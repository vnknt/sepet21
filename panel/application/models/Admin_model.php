<?php
class Admin_model extends CI_Model {






    public function __construct() {

        parent::__construct();

    }







    public $tableName = "admin";






    public function login_control($username, $password) {


        $this->db->select("*");
        $this->db->from($this->tableName);
        
        $this->db->where("username",$username);
        $this->db->where("password",$password);
        $result=$this->db->get();
        if (    $result->num_rows() ) {
            return $result->result();
        }else {
            return false;
        }
    }
}

?>