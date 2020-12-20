<?php

class UrunKategori extends CI_Controller {



    public function __construct() 
    {

        parent::__construct();
        $this->load->model("urunkategori_model");

    }


public function index(){

    echo "category";








}



    public function get() {



        
        $kategori=$this->input->post("name");
        
        $arr=["ust_kategori"=>$kategori];
        
        print(json_encode($this->urunkategori_model->get($arr)));



       
    }




  







































}?>
