<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iqms extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->authentication->check_user_session();
        $this->role_checker->checkViewerRole();
    }

    public function index()
    {
        $data['page'] = 'admin/iqms/dashboard';
        $data['title'] = 'IQMS Dashboard';
        $data['customcss'] = 'iqms.css';
        $this->load->view('template/template', $data);
    }

    public function stakeholders()
    {
        $data['page'] = 'admin/iqms/stakeholders';
        $data['title'] = 'Process Stakeholders Analysis';
        $data['customcss'] = 'iqms.css';
        $this->load->view('template/template', $data);
    }

    public function swot()
    {
        $data['page'] = 'admin/iqms/swot';
        $data['title'] = 'Process SWOT Analysis';
        $data['customcss'] = 'iqms.css';
        $this->load->view('template/template', $data);
    }

    public function organization_outcomes()
    {
        $data['page'] = 'admin/iqms/organization_outcomes';
        $data['title'] = 'Organization Outcomes';
        $data['customcss'] = 'iqms.css';
        $this->load->view('template/template', $data);
    }

    public function quality_objectives()
    {
        $data['page'] = 'admin/iqms/quality_objectives';
        $data['title'] = 'Quality Objectives';
        $data['customcss'] = 'iqms.css';
        $this->load->view('template/template', $data);
    }

    public function risk_register()
    {
        $data['page'] = 'admin/iqms/risk_register';
        $data['title'] = 'Risk Register';
        $data['customcss'] = 'iqms.css';
        $this->load->view('template/template', $data);
    }

    public function opportunity_register()
    {
        $data['page'] = 'admin/iqms/opportunity_register';
        $data['title'] = 'Opportunity Register';
        $data['customcss'] = 'iqms.css';
        $this->load->view('template/template', $data);
    }

    public function process_performance()
    {
        $data['page'] = 'admin/iqms/process_performance';
        $data['title'] = 'Process Performance Monitoring';
        $data['customcss'] = 'iqms.css';
        $this->load->view('template/template', $data);
    }

    public function improvement_action()
    {
        $data['page'] = 'admin/iqms/improvement_action';
        $data['title'] = 'Improvement Action';
        $data['customcss'] = 'iqms.css';
        $this->load->view('template/template', $data);
    }
}