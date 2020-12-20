<?php
class Siparisler_model extends CI_Model {


public function __construct() {

    parent::__construct();


}



public $cartsTable = "carts";
public $productsTable = "cart_products";


public function get_carts() {


    $this->db->select("*")
             ->from($this->cartsTable)
             ->order_by("created_at","desc");



    return $this->db->get()->result_array();

}





public function get_cart_info($id) {


    $this->db->select("*")
             ->from($this->cartsTable)
             ->where("id",$id);


    return $this->db->get()->result_array();

}






public function get_cart_products($id) {


    $this->db->select("*")
             ->from($this->productsTable)
             ->where("cart_id",$id);



    return $this->db->get()->result_array();

}



























}
?>