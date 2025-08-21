<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IqmsAnalysisModel extends CI_Model{
    public function __construct(){ parent::__construct(); }

    public function ensure($module_code, $office_id, $process_id, $fiscal_year, $title = null, $user_id = null){
        $where = [
            'module_code' => $module_code,
            'office_id'   => (int)$office_id,
            'fiscal_year' => (string)$fiscal_year,
        ];
        $where['process_id'] = $process_id ? (int)$process_id : null;
        $row = $this->db->get_where('iqms_analyses', $where)->row_array();
        if($row) return $row;
        $insert = $where + [
            'analysis_title' => $title ?: $module_code.' '.$fiscal_year,
            'form_date'      => date('Y-m-d'),
            'analysis_status'=> 'Draft',
            'created_by'     => $user_id ?: 0
        ];
        $this->db->insert('iqms_analyses', $insert);
        $id = $this->db->insert_id();
        return $this->db->get_where('iqms_analyses', ['id'=>$id])->row_array();
    }

    public function getById($id){
        return $this->db->get_where('iqms_analyses', ['id'=>(int)$id])->row_array();
    }
}

