<?php

class User extends CI_Controller {





public function __construct() 
{
parent::__construct();
$this->load->model("admin_model");
}





public function login() {







$this->load->view("login");








}






public function login_control() {







    if(isset($_POST["username"] ) && isset($_POST["password"] ) ){ 



        $username = $this->input->post("username");
        $password = $this->input->post("password");

        
        
        if($username != NULL && $password != NULL) {


            $query =  $this->admin_model->login_control($username , $password ) ;
        

                if ($query) {
                        $this->session->set_userdata('adminLogin',true) ;
                        
                        print(json_encode(1));
                        return 0;

                } else {
                    print("username-password");
                }

        } else {
            print("null-input");
        }
    }else {

    redirect(base_url("login"));
    }

    
    
    
    
    
    
    }
    























}









?>