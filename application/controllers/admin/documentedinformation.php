<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class documentedinformation extends CI_Controller {

    public function __construct(){

        parent::__construct();

        $this->load->model('DocumentedInformationModel');
        $this->load->model('DepartmentModel');
        $this->load->model('DocumentTypeModel');

        $this->authentication->check_user_session();
    }

    public function index(){

        $data['page'] = 'admin/di_list';
		$data['title'] = 'Documented Information List';
        $data['customcss'] = 'di_list.css';
        $data['customjs'] = 'di_list.js';
        $data['department'] =  $this->DepartmentModel->getDepartment();
        $data['doctype'] =  $this->DocumentTypeModel->getDocumentType();

		$this->load->view('template/template', $data);
    }

    public function getDIList(){
        $documentedInformation =  $this->DocumentedInformationModel->getDocumentedInformationList();

        echo json_encode($documentedInformation);
    }

    public function getDIHistory(){
        $doc_id = $_POST['doc_id'];
        $documentedInformation =  $this->DocumentedInformationModel->getDocumentedInformationHistory($doc_id);

        echo json_encode($documentedInformation);
    }

    public function getDITR(){
        $documentedInformation =  $this->DocumentedInformationModel->getDocumentedInformationTechnicalReview();

        echo json_encode($documentedInformation);
    }

    public function getDIFormsReview(){
        $documentedInformation =  $this->DocumentedInformationModel->getDocumentedInformationFormsReview();

        echo json_encode($documentedInformation);
    }

    public function getDIFinalReview(){
        $documentedInformation =  $this->DocumentedInformationModel->getDocumentedInformationFinalReview();

        echo json_encode($documentedInformation);
    }

    public function getDIApproval(){
        $documentedInformation =  $this->DocumentedInformationModel->getDocumentedInformationApproval();

        echo json_encode($documentedInformation);
    }

    public function getDIChecking(){
        $documentedInformation =  $this->DocumentedInformationModel->getDocumentedInformationChecking();

        echo json_encode($documentedInformation);
    }

    public function getDIApprovalForPublishing(){
        $documentedInformation =  $this->DocumentedInformationModel->getDocumentedInformationApprovalForPublishing();

        echo json_encode($documentedInformation);
    }

    public function getDIPublished(){
        $documentedInformation =  $this->DocumentedInformationModel->getDocumentedInformationPublished();

        echo json_encode($documentedInformation);
    }

    public function technicalReview(){
        $data['page'] = 'admin/di_technical_review';
		$data['title'] = 'Technical Review';
        $data['customcss'] = 'di_tr.css';
        $data['customjs'] = 'di_tr.js';
        $data['department'] =  $this->DepartmentModel->getDepartment();
        $data['doctype'] =  $this->DocumentTypeModel->getDocumentType();

		$this->load->view('template/template', $data);
    }

    public function formsReview(){
        $data['page'] = 'admin/di_forms_review';
		$data['title'] = 'Forms Review';
        $data['customcss'] = 'di_forms_review.css';
        $data['customjs'] = 'di_forms_review.js';
        $data['department'] =  $this->DepartmentModel->getDepartment();
        $data['doctype'] =  $this->DocumentTypeModel->getDocumentType();

		$this->load->view('template/template', $data);
    }

    public function finalReview(){
        $data['page'] = 'admin/di_final_review';
		$data['title'] = 'Final Review';
        $data['customcss'] = 'di_final_review.css';
        $data['customjs'] = 'di_final_review.js';
        $data['department'] =  $this->DepartmentModel->getDepartment();
        $data['doctype'] =  $this->DocumentTypeModel->getDocumentType();

		$this->load->view('template/template', $data);
    }

    public function approval(){
        $data['page'] = 'admin/di_approval';
		$data['title'] = 'Approval';
        $data['customcss'] = 'di_approval.css';
        $data['customjs'] = 'di_approval.js';
        $data['department'] =  $this->DepartmentModel->getDepartment();
        $data['doctype'] =  $this->DocumentTypeModel->getDocumentType();

		$this->load->view('template/template', $data);
    }


    public function checking(){
        $data['page'] = 'admin/di_checking';
		$data['title'] = 'Checking';
        $data['customcss'] = 'di_checking.css';
        $data['customjs'] = 'di_checking.js';
        $data['department'] =  $this->DepartmentModel->getDepartment();
        $data['doctype'] =  $this->DocumentTypeModel->getDocumentType();

		$this->load->view('template/template', $data);
    }

    public function approvalForPublishing(){
        $data['page'] = 'admin/di_ap';
		$data['title'] = 'Approval For Publishing';
        $data['customcss'] = 'di_ap.css';
        $data['customjs'] = 'di_ap.js';
        $data['department'] =  $this->DepartmentModel->getDepartment();
        $data['doctype'] =  $this->DocumentTypeModel->getDocumentType();

		$this->load->view('template/template', $data);
    }

    public function published(){
        $data['page'] = 'admin/di_p';
		$data['title'] = 'Published';
        $data['customcss'] = 'di_p.css';
        $data['customjs'] = 'di_p.js';
        $data['department'] =  $this->DepartmentModel->getDepartment();
        $data['doctype'] =  $this->DocumentTypeModel->getDocumentType();

		$this->load->view('template/template', $data);
    }


    public function save(){
        $data = $_POST;

        $save = $this->DocumentedInformationModel->saveDI($data);
        
        if ($save) {
            // Insertion successful
            echo "saved";
        } else {
            // Insertion failed
            echo "error";
        }
    }

    public function update(){

        $data = $_POST;

        $save = $this->DocumentedInformationModel->updateDI($data);
        
        if ($save) {
            // Insertion successful
            echo "saved";
        } else {
            // Insertion failed
            echo "error";
        }
    }

    public function updateTR(){

        $data = $_POST;

        if($_POST['technical_review'] == 'Approved'){
            $data['status'] = 'FIR';
        } else {
            $data['status'] = 'TR';
        }
   
        $save = $this->DocumentedInformationModel->updateDIReview($data, 'technical_review');
        
        if ($save) {
            // Insertion successful
            $datahistory['doc_id'] = $data['doc_id'];
            $datahistory['process'] = "Technical Review";
            $datahistory['status'] = $_POST['technical_review'];
            $this->DocumentedInformationModel->saveHistory($datahistory);
            echo "saved";
        } else {
            // Insertion failed
            echo "error";
        }
    }

    public function updateFormsReview(){

        $data = $_POST;

        if($_POST['forms_review'] == 'Approved'){
            $data['status'] = 'TR';
        } else {
            $data['status'] = 'FR';
        }
   
        $save = $this->DocumentedInformationModel->updateDIReview($data, 'forms_review');
        
        if ($save) {
            // Insertion successful
            $datahistory['doc_id'] = $data['doc_id'];
            $datahistory['process'] = "Forms Review";
            $datahistory['status'] = $_POST['forms_review'];
            $this->DocumentedInformationModel->saveHistory($datahistory);
            echo "saved";
        } else {
            // Insertion failed
            echo "error";
        }
    }

    public function updateFinalReview(){

        $data = $_POST;

        if($_POST['final_review'] == 'Approved'){
            $data['status'] = 'APR';
        } else {
            $data['status'] = 'TR';
        }
   
        $save = $this->DocumentedInformationModel->updateDIReview($data, 'final_review');
        
        if ($save) {
            // Insertion successful
            $datahistory['doc_id'] = $data['doc_id'];
            $datahistory['process'] = "Final Review";
            $datahistory['status'] = $_POST['final_review'];
            $this->DocumentedInformationModel->saveHistory($datahistory);
            echo "saved";
        } else {
            // Insertion failed
            echo "error";
        }
    }

    public function updateApproval(){

        $data = $_POST;

        if($_POST['approval'] == 'Approved'){
            $data['status'] = 'CHK';
        } else {
            $data['status'] = 'FIR';
        }
   
        $save = $this->DocumentedInformationModel->updateDIReview($data, 'approval');
        
        if ($save) {
            // Insertion successful
            $datahistory['doc_id'] = $data['doc_id'];
            $datahistory['process'] = "Approval";
            $datahistory['status'] = $_POST['approval'];
            $this->DocumentedInformationModel->saveHistory($datahistory);
            echo "saved";
        } else {
            // Insertion failed
            echo "error";
        }
    }


    public function updateChecking(){

        $data = $_POST;

        if($_POST['checking'] == 'Approved'){
            $data['status'] = 'AFP';
        } else {
            $data['status'] = 'APR';
        }
   
        $save = $this->DocumentedInformationModel->updateDIReview($data, 'checking');
        
        if ($save) {
            // Insertion successful
            $datahistory['doc_id'] = $data['doc_id'];
            $datahistory['process'] = "Checking";
            $datahistory['status'] = $_POST['checking'];
            $this->DocumentedInformationModel->saveHistory($datahistory);
            echo "saved";
        } else {
            // Insertion failed
            echo "error";
        }
    }

    public function updateApprovalForPublishing(){

        $data = $_POST;

        if($_POST['approval_for_publishing'] == 'Approved'){
            $data['status'] = 'PUB';
        } else {
            $data['status'] = 'CHK';
        }
   
        $save = $this->DocumentedInformationModel->updateDIReview($data, 'approval_for_publishing');
        
        if ($save) {
            // Insertion successful
            $datahistory['doc_id'] = $data['doc_id'];
            $datahistory['process'] = "Approval For Publishing";
            $datahistory['status'] = $_POST['approval_for_publishing'];
            $this->DocumentedInformationModel->saveHistory($datahistory);
            echo "saved";
        } else {
            // Insertion failed
            echo "error";
        }
    }

}