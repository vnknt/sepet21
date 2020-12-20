<?php

class Urunler_model extends CI_Model {
    

    public function __construct(){

        parent::__construct();
    
    
    
    
    
    
    
    
    
    
    
    
    }
    
public $tableName = "urunler";
public static $num_rows ;


public function getAll() {


    $this->db
         ->select("*")
         ->from($this->tableName);

    $query = $this->db->get() ;



    if($query->num_rows()) {
        return $query->result_array();

    }else {
        return 0;

    }


}






public function get($arr=array())

{








        $this->db
                ->select("*")
                ->from($this->tableName)
                ->where($arr);



    $query = $this->db->get() ;





    return $query->result_array();












}







public function get_all($kategori,$urun,$arr=array() , $orderName,$orderBy,$page) {

$this->db->limit(18,($page-1)*18);


    if(isset($urun) && $urun!="") {




        $this   
        ->db
        ->select("*")
        ->from($this->tableName)->like("isim",$urun)
           ->order_by( $orderName,$orderBy);
   




    }else {


    







    if(!$kategori) {


        $this   
        ->db
        ->select("*")
        ->from($this->tableName)->where($arr)
           ->order_by( $orderName,$orderBy);
   


    }else {

        $this   
        ->db
        ->select("*")
        ->from($this->tableName)->where($arr)
           ->group_start()
               ->where("kategori",$kategori)
                   ->or_group_start()
                       ->or_where("alt_kategori",$kategori)
                   ->group_end()
           ->group_end()
           ->order_by( $orderName,$orderBy);
    }



    
}




    $result=$this->db->get();

    return $result->result_array();




}
















public function markalar ($kategori) {




    if($kategori){
    $this->db->distinct()->select("marka")->where("kategori",$kategori)->or_where("alt_kategori",$kategori);
    }else {


        $this->db->distinct()->select("marka");




    }


    $query  = $this->db->get($this->tableName);

    return $query->result_array();







}























    
}



?>