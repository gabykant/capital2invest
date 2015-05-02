<?php

/**
 * Description of Dashboard
 *
 * @author gabykant
 */
class Dashboard extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("tb_project_model");
    }
    public function index() {}
    
    public function project() {
        $array_project = $this->tb_project_model->getAllProject();
        if(count($array_project) > 0) {
            $data['projects'] = $array_project;
        }//var_dump($array_project);
        $this->load->view("admin/list_projects", $data);
    }
    public function detail($id) {
        if($id === null) {exit(0);}
        $aproject = $this->tb_project_model->getProjectById($id);
        if($aproject === null) { exit(0);}
        $data["id"] = $aproject->id;
        $data['name'] = $aproject->lb_name;
        $data['country'] = $aproject->lb_country;
        $data['town'] = $aproject->lb_town;
        $data['address'] = $aproject->lb_address;
        $data['organisation'] = $aproject->lb_organization;
        $data['description'] = $aproject->lb_project_detail;
        $data['fund'] = $aproject->lb_expected_funding;
        $data['reason'] = $aproject->lb_project_reason;
        
        $this->load->view("admin/project_detail", $data);
    }
}
