<?php
class Api extends CI_Controller {


public function __construct() {
    parent::__construct();


}
















public function addToCart() {


            $this->load->model('urunler_model');
            
            $this->load->library('cart');


            $id=$this->input->post("id");

            if(!$id) {
                return 0;
            }


            $arr=["id"=>$id];


            $query=$this->urunler_model->get($arr);

            $data = [
                'id'      => $query[0]["id"],
                'qty'     => 1,
                'price'   => $query[0]["fiyat"],
                'name'    => $query[0]["isim"],
                 "img"    => $query[0]["resim_url"],
                 "info"   => $query[0]["aciklama"]
                //'coupon'         => 'XMAS-50OFF'



            ];

            $this->cart->insert($data);



            $total = 0;

            foreach ($this->cart->contents() as $items) {


                $total++;

            }


            print(json_encode($total));
            




        }




        public function showTotalItem() {

            $this->load->library('cart');

            echo $this->cart->total_items();

        }



        












public function deleteFromCart() {

    $this->load->library('cart');

   
    $rowid = $this->input->post("id");
    if(!$rowid) {
        return 0;

    }


    


    $data=array("rowid"=>$rowid,
                "qty"=>0    );
        
        
    print( $this->cart->update($data));
    






}










public function urunAzalt() {

    $this->load->library('cart');

   
    $rowid = $this->input->post("id");
    if(!$rowid) {
        return 0;

    }


    $item=$this->cart->get_item($rowid);





    $data=array("rowid"=>$rowid,
                "qty"=>$item["qty"]-1 );
        
        
    print( $this->cart->update($data));
    






}
















































}















?>