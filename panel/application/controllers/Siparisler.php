<?php
class Siparisler extends CI_Controller {

    public function __construct() {

        parent::__construct();






        $this->load->model("siparisler_model");







    }






    public function index() {








        $data["carts"] = $this->siparisler_model->get_carts();


        $this->load->view("siparisler",$data);






    }




    public function incele() {

        $id=$this->uri->segment(3);
            


             $data["cart"]     = $this->siparisler_model->get_cart_info($id);
             $data["products"]   = $this->siparisler_model->get_cart_products($id);


             $this->load->view("incele",$data);
           


    }





















}










?>