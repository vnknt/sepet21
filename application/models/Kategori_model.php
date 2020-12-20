<?php

class Kategori_model extends CI_Model {
    

    public function __construct(){

        parent::__construct();
    
    
    
    }
    
public $tableName = "kategoriler";







    public function list($kategori) {

        $arr=["ust_kategori"=>$kategori];


        

            $this->db
                 ->select("*")
                 ->from($this->tableName)
                 ->where($arr) ;




                 $result=$this->db->get();

                    if( ! $result->num_rows()) {
                        return 0;
                    }
                    return $result->result_array();



    }




































    public function get_categories(){

        $this->db->select('*');
        $this->db->from($this->tableName);
        $this->db->where('ust_kategori', "null");

        $parent = $this->db->get();
        
        $categories = $parent->result_array();
        $i=0;
        foreach($categories as $p_cat){

            $categories[$i]["sub"] = $this->sub_categories($p_cat["kategori_adi"]);
            $i++;
        }
        return $categories;
    }




    public function getCount($arr) {





            








    }




    public function sub_categories($id){

        $this->db->select('*');
        $this->db->from($this->tableName);
        $this->db->where('ust_kategori', $id);

        $child = $this->db->get();
        $categories = $child->result_array();
        $i=0;
        foreach($categories as $p_cat){

            $categories[$i]["sub"] = $this->sub_categories($p_cat["kategori_adi"]);
            $i++;
        }
        return $categories;       
    }






}
?>