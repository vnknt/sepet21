<?php
class Urun_model extends CI_Model {






    public function __construct() {

        parent::__construct();

    }





    public $tableName = "urunler";





    public function ekle($arr=array()) {




        $query = $this->db
                      ->insert($this->tableName,$arr);
    
    
    
            return json_encode($query);
    
    
    
        }














        public function get($arr=array(),$order="",$limit="") {


                         $this->db
                              ->select("*")
                              ->from($this->tableName)
                              ->where($arr)
                              ->order_by($order)
                              ->limit($limit);


                            $query=$this->db->get();
                            return $query->result_array(); 



            










        }




        public function delete($id) {
            


            $this->db->select("resim_url")->from($this->tableName)->where("id",$id);
            $resim_url =$this->db->get()->result_array();

            
            $path_to_file = "./../images/uploads/".$resim_url[0]["resim_url"];



                $this->db
                     ->delete($this->tableName,array('id' => $id));
                
                
            unlink($path_to_file);



        }








        public function update($arr=array() , $id) {



           
            $this->db->where('id', $id);
            
           $query= $this->db->update($this->tableName, $arr);

           return json_encode($query);











        }




        public function markalar() {

            $this->db->distinct()->select("marka");

            $query  = $this->db->get($this->tableName);

            return $query->result_array();



        }








}