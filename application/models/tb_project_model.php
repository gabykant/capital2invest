<?php

class Tb_project_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    public function setProject($array) {
        $this->db->insert("tb_project", $array);
        if($this->db->affected_rows()) {
            return 1;
        }
        return -1;
    }
    public function getProjectNameById($id) {
        $query = $this->db->get_where("tb_project", array("id" => $id))->row();
        if($query) {
            return $query->name;
        }
        return NULL;
    }
    public function getAllProject() {
        $this->db->select("tb_project.*, users.*, users.id as user_");
        $this->db->join("users", "users.id=user_id");
        return $this->db->get("tb_project")->result_array();
    }
    function deleteProject($id) {
        return $this->db->delete("tb_project", array("id" => $id));
    }
    function getProjectById($id) {
        return $this->db->get_where("tb_project", array("id" => $id))->row();
    }
}

