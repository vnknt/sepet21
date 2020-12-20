<?php

class Urun extends CI_Controller {



    public function __construct() 
    {

        parent::__construct();
    $this->load->model("urun_model");

    $this->load->model("urunkategori_model");


    $this->load->library('session');


    }


















public function ekle() {



$arr_category=[];
$arr =array();




$kategoriler=$this->urunkategori_model->get($arr_category);

$last=$this->urun_model->get($arr,"id DESC",500);

$markalar=$this->urun_model->markalar();






$data["kategoriler"]=$kategoriler;
$data["son_urunler"] = $last;
$data["markalar"]   = $markalar;



$this->load->view("ekle",$data);


}





public function duzenle() {


    $arr = ["id" => $this->uri->segment(3) ];




    $arr_category=["ust_kategori !="=>"null"];


    $kategoriler=$this->urunkategori_model->get($arr_category);



 

    $urun = $this->urun_model->get($arr,"id ASC","1");

    $data["urun"] = $urun;
    $data["kategoriler"] = $kategoriler;
    
    print_r($urun);
    $this->load->view("duzenle",$data);



}


















public function urun_kaydet() {

            $this->load->library('form_validation');
            $this->load->helper("form");
            $this->load->model("urunkategori_model");


        if(isset($_POST['urun_adi'])) {

        
            $rank = rand(1,150);
        $rules=array(
                            

            'required'      =>   '{field} boş bırakılamaz',
            
            'min_length'    =>   '{field} çok kısa',
            'max_length'    =>   '{field} çok uzun',
        
        );



            $this->form_validation->set_rules("urun_adi","Ürün Adı","required|min_length[5]|max_length[18]", $rules);
            $this->form_validation->set_rules("urun_fiyat","Ürün Fiyatı","required", $rules);
            $this->form_validation->set_rules("urun_marka","Marka","required|max_length[20]", $rules);
            $this->form_validation->set_rules("urun_detay","Ürün detayı","required|min_length[3]|max_length[20]", $rules);
            $this->form_validation->set_rules("urun_kategori","Kategori","required", $rules);



            $form = $this->form_validation->run();

                    if(!$form) {
                        echo trim(validation_errors("<div class='alert alert-danger'>" ,"</div>")) ;


                        return 0;


                    } 

            $urun_adi = $this->input->post("urun_adi");
            $fiyat = $this->input->post("urun_fiyat");
            $marka = $this->input->post("urun_marka");
            $detay = $this->input->post("urun_detay");
            $kategori =  $this->input->post("urun_kategori");
            $alt_kategori = $this->urunkategori_model->get_parent_category($kategori);
            $resim_url = $this->input->post("resim_url");

           


            

                    
        $array = [

        "isim"        =>$urun_adi,
        "kategori"    =>$kategori,
        "aciklama"    =>$detay,
        "fiyat"       =>$this->input->post("urun_fiyat"),
        "marka"       =>$this->input->post("urun_marka"),
        "rank"        =>$rank,
        "alt_kategori"=>$alt_kategori[0]["ust_kategori"],
        "resim_url"   =>$resim_url


        ];

        $query = $this->urun_model->ekle($array);

        print_r(json_encode($query));

           }























}








public function sil(){



    $id  = $this->uri->segment(3);
 
    $this->urun_model->delete($id);

    redirect(base_url("urun/ekle"));





}









public function image_add() {


    $id=$this->uri->segment(3);


    $this->session->set_userdata("urun_id",$id);

    $this->load->view("resimekle");

    




}

public function dirr() {


    $this->load->helper('directory');
    $map = directory_map('./..');



print_r($map);

}




    public function image_upload() {

      
        $config['upload_path']          ="./../images/uploads";
        $config['allowed_types']        = 'jpg|png|webp';
       $config['max_size']             = 1000;
         $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('file'))
        {
                $error = array('error' => $this->upload->display_errors());

                //$this->load->view('upload_form', $error);

                print_r($error);
        }
        else
        {


               


               
                $data = array('upload_data' => $this->upload->data());

                $arr=["resim_url"=>$data["upload_data"]["file_name"] ];


               echo $this->urun_model->update($arr,$this->session->userdata("urun_id"));





                
                //$this->load->view('upload_success', $data);










        }


    }
                             
                             





























public function urun_duzenle() {




    $this->load->library('form_validation');
    $this->load->helper("form");
    $this->load->model("urunkategori_model");


if(isset($_POST['urun_adi'])) {


    $rank = rand(1,150);
$rules=array(
                    

    'required'      =>   '{field} boş bırakılamaz',
    
    'min_length'    =>   '{field} çok kısa',
    'max_length'    =>   '{field} çok uzun',

);



    $this->form_validation->set_rules("urun_adi","Ürün Adı","required|min_length[5]|max_length[18]", $rules);
    $this->form_validation->set_rules("urun_fiyat","Ürün Fiyatı","required", $rules);
    $this->form_validation->set_rules("urun_marka","Marka","required|max_length[20]", $rules);
    $this->form_validation->set_rules("urun_detay","Ürün detayı","required|min_length[3]|max_length[20]", $rules);
    $this->form_validation->set_rules("urun_kategori","Kategori","required", $rules);



    $form = $this->form_validation->run();

            if(!$form) {
                echo trim(validation_errors("<div class='alert alert-danger'>" ,"</div>")) ;


                return 0;


            } 
$id=$this->input->post("urun_id");
    $urun_adi = $this->input->post("urun_adi");
    $fiyat = $this->input->post("urun_fiyat");
    $marka = $this->input->post("urun_marka");
    $detay = $this->input->post("urun_detay");
    $kategori =  $this->input->post("urun_kategori");
    $alt_kategori = $this->urunkategori_model->get_parent_category($kategori);
 
   


    

            
$array = [

"isim"        =>$urun_adi,
"kategori"    =>$kategori,
"aciklama"    =>$detay,
"fiyat"       =>$this->input->post("urun_fiyat"),
"marka"       =>$this->input->post("urun_marka"),
"rank"        =>$rank,
"alt_kategori"=>$alt_kategori[0]["ust_kategori"],



];

$query = $this->urun_model->update($array,$id);

    print_r(json_encode($query));

   }






















}












































    
}







?>