<?php
class Urunler extends CI_Controller {

public function __construct(){

    parent::__construct();
    $this->kategori= $this->uri->segment(2);




      $this->load->model("kategori_model");
 
      $this->categories =  $this->kategori_model->get_categories();
      
      $this->load->vars("categories",$this->categories);
      
      
}





    



public function index() {
    $this->load->model("urunler_model");

    $query=$this->urunler_model->getAll();



    $data["urunler"]= $query;
 




    $this->load->view("kategori",$data);



   
}



public function liste($id="null"){

    $this->load->model("kategori_model");
 
    $kategori=$id;



    if(!$kategori) {
        $kategori="null";

    }


    $q= $this->kategori_model->list($kategori);


    if($q == 0) {


        return 0 ;



    }
        
        foreach ($q as $row ){



       
              $this->liste( $row["kategori_adi"] );

        

              print_r($row);

            



        } 


    


}



public function kategori() {


    $this->load->model("urunler_model");
    $this->load->model('kategori_model');

    $this->load->library("pagination");




  
    
    $marka = $this->input->get("marka");



 
    $order = $this->input->get("order") ;
    

    $urun= $this->input->get("urun");

  





    $page = $this->input->get("page");

    if(!is_numeric($page))
    {
        $page=1;

    }

    if($page<1) {
        $page=1;

    }
    if($page>100) {
        $page=100;
    }


    
    $kategori=$this->uri->segment(3) ;

    if($marka!="") {
            $arr= [

                
            "marka"=>$marka
                
            ];

        }
        else {
            $arr=array();
        }

    if($marka) {
        $arr["marka"] =$marka;
    }
    if($order!="") {
        $orderName = "fiyat";
        $orderBy = $order;
    } else {
        $orderName = "rank";
        $orderBy ="desc";
    }
    









    
    $query =   $this->urunler_model->get_all($kategori,$urun,$arr,$orderName,$orderBy,$page) ;

    $markalar= $this->urunler_model->markalar($kategori) ;



    $data["urunler"]=$query;
    $data["markalar"]=$markalar;



   
//print_r($data["categories"]);

    

    $config["base_url"]=base_url("urunler/kategori");
    $config["total_rows"]=$this->urunler_model::$num_rows;
    $config["uri_segment"]=3;
    $config["per_page"]=20;
   // $config["base_url"]="";
    //$config["base_url"]="";






    $data["page"] = $page;
    
    $this->load->view("kategori",$data);




   

/*
    $query=$this->urunler_model->get($arr);
    $data["urunler"]= $query;
    $this->load->view("index",$data);


*/
}


















public function categories(){





    $this->load->model('kategori_model');


$data = $this->kategori_model->get_categories();


print_r($data);


}











public function ara() {


    print("ARA");















}























}
?>