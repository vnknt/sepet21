<?php
class Urunkategori_model extends CI_Model {






    public function __construct() {

        parent::__construct();



 
    }



  public $tableName = "kategoriler";









    
    public function get($arr=array()) {


       
        $this->db
             ->select("ust_kategori")
             ->from($this->tableName);

        $subQuery =   $this->db->get()->result_array();

        $cats = [];

        foreach ( $subQuery as $sub) {

            array_push($cats,$sub["ust_kategori"]);

        }

        
      $ca=["temizlik"];
      
        $this->db->select("*")->from($this->tableName)->where_not_in("kategori_adi",$cats);


        $result=$this->db->get();
        return $result->result_array();


       
    }



    public function get_parent_category($kategori) {

        $this->db
             ->select("*")
             ->from($this->tableName)
             ->where(array("kategori_adi"=>$kategori));


             $rslt = $this->db->get() ;



             return $rslt->result_array();








    }



    public function cont_sub($cat) {


        $this->db
        ->select("*")
        ->from($this->tableName)
        ->where(array("ust_kategori"=>$cat));





    }



























}?>