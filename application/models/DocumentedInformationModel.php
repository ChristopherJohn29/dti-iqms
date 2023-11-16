<?php

class DocumentedInformationModel extends CI_Model {

    public function getDocumentedInformationList(){

        $this->db->select('documented_information.*, department.dep_name AS dep_name, section.section_name AS section_name, document_type.doc_type_name AS type, document_status.status_value AS status_name');
        $this->db->from('documented_information');
        $this->db->where('documented_information.user_id', $this->session->userdata('user_id'));
        $this->db->join('department', 'department.id = documented_information.dep_id', 'left');
        $this->db->join('section', 'section.id = documented_information.sec_id', 'left');
        $this->db->join('document_status', 'document_status.status_code = documented_information.status', 'left');
        $this->db->join('document_type', 'document_type.id = documented_information.doc_type_id', 'left');

        $query = $this->db->get();
        $result = $query->result_array();

        return $result;
    }

    public function getDI($doc_id){
        $this->db->select('*');
        $this->db->from('documented_information');
        $this->db->where('id', intval($doc_id));

        $query = $this->db->get();
        $result = $query->result_array();

        return $result;
    }

    public function getDocumentedInformationHistory($doc_id){

        $this->db->select('*');
        $this->db->from('document_history');
        $this->db->where('doc_id', $doc_id);

        $query = $this->db->get();
        $result = $query->result_array();

        return $result;
    }

    public function getDocumentedInformationTechnicalReview(){

        $this->db->select('documented_information.*, department.dep_name AS dep_name, section.section_name AS section_name, document_type.doc_type_name AS type, document_status.status_value AS status_name');
        $this->db->from('documented_information');
        $this->db->where('documented_information.status', 'TR');
        $this->db->or_where('documented_information.status', 'AP');
        $this->db->join('department', 'department.id = documented_information.dep_id', 'left');
        $this->db->join('section', 'section.id = documented_information.sec_id', 'left');
        $this->db->join('document_status', 'document_status.status_code = documented_information.status', 'left');
        $this->db->join('document_type', 'document_type.id = documented_information.doc_type_id', 'left');

        $query = $this->db->get();
        $result = $query->result_array();

        return $result;
    }

    public function getDocumentedInformationFormsReview(){

        $this->db->select('documented_information.*, department.dep_name AS dep_name, section.section_name AS section_name, document_type.doc_type_name AS type, document_status.status_value AS status_name');
        $this->db->from('documented_information');
        $this->db->where('documented_information.status', 'FR');
        $this->db->join('department', 'department.id = documented_information.dep_id', 'left');
        $this->db->join('section', 'section.id = documented_information.sec_id', 'left');
        $this->db->join('document_status', 'document_status.status_code = documented_information.status', 'left');
        $this->db->join('document_type', 'document_type.id = documented_information.doc_type_id', 'left');

        $query = $this->db->get();
        $result = $query->result_array();

        return $result;
    }

    public function getDocumentedInformationFinalReview(){

        $this->db->select('documented_information.*, department.dep_name AS dep_name, section.section_name AS section_name, document_type.doc_type_name AS type, document_status.status_value AS status_name');
        $this->db->from('documented_information');
        $this->db->where('documented_information.status', 'FIR');
        $this->db->where('documented_information.dep_id', $this->session->userdata('department'));
        $this->db->join('department', 'department.id = documented_information.dep_id', 'left');
        $this->db->join('section', 'section.id = documented_information.sec_id', 'left');
        $this->db->join('document_status', 'document_status.status_code = documented_information.status', 'left');
        $this->db->join('document_type', 'document_type.id = documented_information.doc_type_id', 'left');

        $query = $this->db->get();
        $result = $query->result_array();

        return $result;
    }

    public function getDocumentedInformationApproval(){

        $division_id = $this->session->userdata('division');

        $this->db->select('*');
        $this->db->from('department');
        $this->db->where('status', 1);
        $this->db->where('div_id', $division_id);

        $query = $this->db->get();
        $department_ids = array_column($query->result_array(), 'id');

        $this->db->select('documented_information.*, department.dep_name AS dep_name, section.section_name AS section_name, document_type.doc_type_name AS type, document_status.status_value AS status_name');
        $this->db->from('documented_information');
        $this->db->where('documented_information.status', 'APR');
        $this->db->where_in('documented_information.dep_id', $department_ids);
        $this->db->join('department', 'department.id = documented_information.dep_id', 'left');
        $this->db->join('section', 'section.id = documented_information.sec_id', 'left');
        $this->db->join('document_status', 'document_status.status_code = documented_information.status', 'left');
        $this->db->join('document_type', 'document_type.id = documented_information.doc_type_id', 'left');

        $query = $this->db->get();
        $result = $query->result_array();

        return $result;
    }

    public function getDocumentedInformationChecking(){

        $this->db->select('documented_information.*, department.dep_name AS dep_name, section.section_name AS section_name, document_type.doc_type_name AS type, document_status.status_value AS status_name');
        $this->db->from('documented_information');
        $this->db->where('documented_information.status', 'CHK');
        $this->db->join('department', 'department.id = documented_information.dep_id', 'left');
        $this->db->join('section', 'section.id = documented_information.sec_id', 'left');
        $this->db->join('document_status', 'document_status.status_code = documented_information.status', 'left');
        $this->db->join('document_type', 'document_type.id = documented_information.doc_type_id', 'left');

        $query = $this->db->get();
        $result = $query->result_array();

        return $result;
    }

    public function getDocumentedInformationApprovalForPublishing(){
        $this->db->select('documented_information.*, department.dep_name AS dep_name, section.section_name AS section_name, document_type.doc_type_name AS type, document_status.status_value AS status_name');
        $this->db->from('documented_information');
        $this->db->where('documented_information.status', 'AFP');
        $this->db->join('department', 'department.id = documented_information.dep_id', 'left');
        $this->db->join('section', 'section.id = documented_information.sec_id', 'left');
        $this->db->join('document_status', 'document_status.status_code = documented_information.status', 'left');
        $this->db->join('document_type', 'document_type.id = documented_information.doc_type_id', 'left');

        $query = $this->db->get();
        $result = $query->result_array();

        return $result;
    }

    public function getDocumentedInformationPublishing(){
        $this->db->select('documented_information.*, department.dep_name AS dep_name, section.section_name AS section_name, document_type.doc_type_name AS type, document_status.status_value AS status_name');
        $this->db->from('documented_information');
        $this->db->where('documented_information.status', 'PUBL');
        $this->db->join('department', 'department.id = documented_information.dep_id', 'left');
        $this->db->join('section', 'section.id = documented_information.sec_id', 'left');
        $this->db->join('document_status', 'document_status.status_code = documented_information.status', 'left');
        $this->db->join('document_type', 'document_type.id = documented_information.doc_type_id', 'left');

        $query = $this->db->get();
        $result = $query->result_array();

        return $result;
    }

    

    public function getDocumentedInformationPublished(){

        $this->db->select('documented_information.*, department.dep_name AS dep_name, section.section_name AS section_name, document_type.doc_type_name AS type, document_status.status_value AS status_name');
        $this->db->from('documented_information');
        $this->db->where('documented_information.status', 'PUB');
        $this->db->join('department', 'department.id = documented_information.dep_id', 'left');
        $this->db->join('section', 'section.id = documented_information.sec_id', 'left');
        $this->db->join('document_status', 'document_status.status_code = documented_information.status', 'left');
        $this->db->join('document_type', 'document_type.id = documented_information.doc_type_id', 'left');

        $query = $this->db->get();
        $result = $query->result_array();

        return $result;
    }

    public function getDocumentedInformationPublishedDI($department_id, $document_type_id, $section){

        $this->db->select('documented_information.*, department.dep_name AS dep_name, section.section_name AS section_name, document_type.doc_type_name AS type, document_status.status_value AS status_name');
        $this->db->from('documented_information');
        $this->db->where('documented_information.status', 'PUB');
        $this->db->where('documented_information.dep_id', $department_id);
        $this->db->where('documented_information.doc_type_id', $document_type_id);
        $this->db->join('department', 'department.id = documented_information.dep_id', 'left');
        $this->db->join('section', 'section.id = documented_information.sec_id', 'left');
        $this->db->join('document_status', 'document_status.status_code = documented_information.status', 'left');
        $this->db->join('document_type', 'document_type.id = documented_information.doc_type_id', 'left');
        
        if($section){
            $this->db->where('documented_information.sec_id', $section);
        }

        $query = $this->db->get();
        $result = $query->result_array();

        return $result;
    }

    

    public function saveDI($data){

        $status = 'FFU';

        $data = array(
            'doc_title' => $data['document_title'],
            'effectivity_date' => $data['effectivity_date'],
            'doc_type_id' => $data['doc_type_id'],
            'dep_id' => $data['dep_id'],
            'sec_id' => $data['sec_id'],
            'doc_code' => $data['doc_code'],
            'revision_no' => $data['revision_no'],
            'status' => $status,
            'created_date' => date('Y-m-d H:i:s'),
            'user_id' => $this->session->userdata('user_id')
        );
        
        return $this->db->insert('documented_information', $data);
    }

    public function saveHistory($data){

        $data = array(
            'doc_id' => $data['doc_id'],
            'process' => $data['process'],
            'status' => $data['status'],
            'created_date' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('user_id')
        );
        
        return $this->db->insert('document_history', $data);
    }

    public function getDocumentTitle($doc_id) {
        // Query the database to retrieve the doc_title
        $query = $this->db->select('doc_title')
                      ->from('documented_information')
                      ->where('id', $doc_id)
                      ->get();

        // Check if a result was found
        if ($query->num_rows() > 0) {
            return $query->row()->doc_title;
        } else {
            // Handle the case when no matching record is found, e.g., return null or an error message.
            return null;
        }
    }

    public function getDocumentStatus($doc_id) {
        // Query the database to retrieve the doc_title
        $query = $this->db->select('status')
                      ->from('documented_information')
                      ->where('id', $doc_id)
                      ->get();

        // Check if a result was found
        if ($query->num_rows() > 0) {
            return $query->row()->status;
        } else {
            // Handle the case when no matching record is found, e.g., return null or an error message.
            return null;
        }
    }

    public function updateDI(array $data){
        $this->db->where('id', $data['doc_id']);
        $this->db->where('user_id', $data['user_id']);

        $updateData = array(
            'doc_title' => $data['document_title'],
            'effectivity_date' => $data['effectivity_date'],
            'doc_type_id' => $data['doc_type_id'],
            'dep_id' => $data['dep_id'],
            'sec_id' => $data['sec_id'],
            'doc_code' => $data['doc_code'],
            'revision_no' => $data['revision_no']
        );

        return $this->db->update('documented_information', $updateData);
    }

    public function updateDIStatus(array $data){
        $this->db->where('id', $data['doc_id']);

        $updateData = array(
            'status' =>  $data['status']
        );

        return $this->db->update('documented_information', $updateData);
    }

    public function updateDIReview(array $data, $review = ''){
        $this->db->where('id', $data['doc_id']);
        $this->db->where('user_id', $data['user_id']);

        $updateData = array(
            'doc_title' => $data['document_title'],
            'effectivity_date' => $data['effectivity_date'],
            'doc_type_id' => $data['doc_type_id'],
            'dep_id' => $data['dep_id'],
            'doc_code' => $data['doc_code'],
            'revision_no' => $data['revision_no'],
            'status' => $data['status'],
            $review => $data[$review]
        );
        if(isset($data['sec_id'])){
            $updateData['sec_id'] = $data['sec_id'];
        }

        return $this->db->update('documented_information', $updateData);
    }
    
}

?>