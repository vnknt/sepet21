<?php

class Cart_model extends CI_Model {



public function __construct() {
    parent::__construct();
    
    $this->load->library("cart");

}




public $tableName = "carts";
public $tableProducts="cart_products";






public function saveCart($arr=array()) {

    $this->db->insert($this->tableName,$arr);

    $id=$this->db->insert_id();

    return $id;



}


public function saveProducts($cartId) {


$arr=[];

    foreach($this->cart->contents() as $product) {

        $arr = [
            "cart_id"      =>$cartId,
            "product_name" => $product["name"],
            "product_id"   => $product["rowid"],
            "qty"          => $product["qty"],
            "img"          => $product["img"],
            "product_info" => $product["info"]

        ];
            $query = $this->db->insert($this->tableProducts,$arr);

            if(!$query) {

                return 0;

            }  
    }


    
    $this->cart->destroy();
    return 1;













}




























}
?>