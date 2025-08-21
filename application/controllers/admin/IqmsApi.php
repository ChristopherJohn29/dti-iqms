<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IqmsApi extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->authentication->check_user_session();
        $this->role_checker->checkViewerRole();
        $this->load->model('IqmsAnalysisModel');
        $this->load->database();
    }

    // Helper to standardize JSON output
    private function json($data, $status=200){
        return $this->output->set_status_header($status)->set_content_type('application/json')->set_output(json_encode($data));
    }

    // Context ensure returns analysis row and id
    public function ensure_analysis(){
        $module_code = $this->input->post('module_code', true);
        $office_id   = (int)$this->input->post('office_id');
        $process_id  = $this->input->post('process_id') !== null ? (int)$this->input->post('process_id') : null;
        $fiscal_year = $this->input->post('fiscal_year', true) ?: date('Y');
        if(!$module_code || !$office_id){ return $this->json(['error'=>'Missing module_code or office_id'],400); }
        $row = $this->IqmsAnalysisModel->ensure($module_code, $office_id, $process_id, $fiscal_year, null, $this->session->userdata('userid'));
        return $this->json($row);
    }

    // Generic list for a table by analysis_id
    public function list(){
        $table = $this->input->get('table', true);
        $analysis_id = (int)$this->input->get('analysis_id');
        if(!$table || !$analysis_id) return $this->json(['error'=>'Missing table or analysis_id'],400);
        $this->db->from($table);
        $this->db->where('analysis_id', $analysis_id);
        $rows = $this->db->get()->result_array();
        return $this->json($rows);
    }

    // Generic save (insert/update) for a table; analysis_id must be present in payload
    public function save(){
        $table = $this->input->post('table', true);
        if(!$table) return $this->json(['error'=>'Missing table'],400);
        $payload = $this->input->post(null, true);
        $id = isset($payload['id']) ? (int)$payload['id'] : null;
        unset($payload['table']);
        if(!$id){
            $this->db->insert($table, $payload);
            $id = $this->db->insert_id();
        } else {
            $this->db->where('id', $id)->update($table, $payload);
        }
        return $this->json(['id'=>$id]);
    }

    public function delete(){
        $table = $this->input->post('table', true);
        $id    = (int)$this->input->post('id');
        if(!$table || !$id) return $this->json(['error'=>'Missing table or id'],400);
        $this->db->delete($table, ['id'=>$id]);
        return $this->json(['ok'=>true]);
    }

    // List children by foreign key (e.g., risk_id)
    public function children(){
        $table = $this->input->get('table', true);
        $fk    = $this->input->get('fk', true);
        $id    = (int)$this->input->get('id');
        if(!$table || !$fk || !$id) return $this->json(['error'=>'Missing table, fk or id'],400);
        $this->db->from($table);
        $this->db->where($fk, $id);
        // Optional extra filter
        $extra_key = $this->input->get('extra_key', true);
        $extra_val = $this->input->get('extra_val', true);
        if($extra_key !== null && $extra_val !== null){
            $this->db->where($extra_key, $extra_val);
        }
        $rows = $this->db->get()->result_array();
        return $this->json($rows);
    }

    // Delete children by foreign key (bulk)
    public function delete_children(){
        $table = $this->input->post('table', true);
        $fk    = $this->input->post('fk', true);
        $id    = (int)$this->input->post('id');
        if(!$table || !$fk || !$id) return $this->json(['error'=>'Missing table, fk or id'],400);
        $this->db->delete($table, [$fk=>$id]);
        return $this->json(['ok'=>true]);
    }

	    // Ensure a stakeholder category exists by code; create if missing
	    public function ensure_category(){
	        $code = $this->input->post('category_code', true);
	        $name = $this->input->post('category_name', true);
	        if(!$code || !$name){ return $this->json(['error'=>'Missing category_code or category_name'], 400); }
	        $row = $this->db->get_where('iqms_stakeholder_categories', ['category_code'=>$code])->row_array();
	        if(!$row){
	            $payload = [
	                'category_code' => $code,
	                'category_name' => $name,
	                'category_description' => null,
	                'category_number' => null,
	                'sort_order' => 0,
	                'is_system_category' => 0,
	                'status' => 1
	            ];
	            $this->db->insert('iqms_stakeholder_categories', $payload);
	            $id = $this->db->insert_id();
	            $row = $this->db->get_where('iqms_stakeholder_categories', ['id'=>$id])->row_array();
	        }
	        return $this->json($row);
	    }


    public function categories(){
        $this->db->from('iqms_stakeholder_categories');
        $this->db->where('status', 1);
        $this->db->order_by('sort_order', 'ASC');
        $this->db->order_by('category_number', 'ASC');
        $rows = $this->db->get()->result_array();
        return $this->json($rows);
    }

    public function export_csv(){
        $table = $this->input->get('table', true);
        $analysis_id = (int)$this->input->get('analysis_id');
        if(!$table || !$analysis_id){ show_error('Missing table or analysis_id', 400); }
        $rows = $this->db->get_where($table, ['analysis_id'=>$analysis_id])->result_array();
        $filename = $table.'_analysis_'.$analysis_id.'_'.date('Ymd_His').'.csv';
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="'.$filename.'"');
        $out = fopen('php://output','w');
        if(!empty($rows)){
            fputcsv($out, array_keys($rows[0]));
            foreach($rows as $r){ fputcsv($out, $r); }
        } else { fputcsv($out, ['No data']); }
        fclose($out); exit;
    }
}

