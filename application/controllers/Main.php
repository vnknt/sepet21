<?php
class Main extends CI_Controller {

public function __construct(){

    parent::__construct();
    $this->kategori= $this->uri->segment(2);

    $this->load->model("kategori_model");
 

    $this->categories =  $this->kategori_model->get_categories();
    


    $this->load->vars("categories",$this->categories);
    
    

    
    

}



public function index() {



    

   $this->load->view("index");




}


public function sepet($i=0) {


    $this->load->library("cart");

    $arr["success"]=$i;
    
    $this->load->view("sepet",$arr);


}







public function sepet_goster() {



    $this->load->library("cart");
    $this->load->view("sepet/sepet_goster");



}
















public function siparis() {

    $this->load->library('form_validation');
    $this->load->helper("form");
    $this->load->model("cart_model");
    $this->load->library("cart");

    $name=$this->input->post("isim");
    $phoneNum=$this->input->post("telefon");
    $adress=$this->input->post("adres");
    $note=$this->input->post("not");




    $errors=array(

        "required"      => '{field} Giriniz ',
        "min_length"    => '{field} çok kısa ',
        "max_length "   => '{field} çok uzun ' 

        


    );




    

    $this->form_validation->set_rules("telefon","Telefon Numarası","required|min_length[10]|max_length[12]",$errors);
    $this->form_validation->set_rules("adres","Adres","required|min_length[10]|max_length[255]",$errors);

        

     $form = $this->form_validation->run();




    if($form) {
       
        $arr= [
            "isim"=>$name,
            "telefon"=>$phoneNum,
            "adres"=>$adress,
            "cart_note"=>$note,
            "total"    => $this->cart->total()


        ];




            $saveCart   = $this->cart_model->saveCart($arr) ;
            if($saveCart){



                 $saveProducts=  $this->cart_model->saveProducts($saveCart);





                 if(!$saveProducts) {

                    echo "Urunler Eklenemedi , tekrar deneyin";

                 }else {


                        echo "Siparişiniz Kaydedildi , Ana sayfaya yönlendiriliyorsunuz";
                        $this->cart->destroy();
                        header("Refresh:2; url=".base_url());
                        die();
                 }
            }








        
    }



































 
        $this->load->view("siparis.php");


    
  
    












}
















}
?>