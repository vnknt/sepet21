
<div class="row ">



<?php
 $total=count($urunler);
    

?>
<?php






  
foreach( $urunler as $urun) {
 
?>












<div class="col-6 col-sm-4 col-lg-3   ">
    <div class="card mt-3">
      <div class="card-body">
        
           <img class="card-img-top" src="<?php echo base_url("images/uploads/").$urun["resim_url"]?>" alt="Card image cap" style=";">
      
        <h5 class="card-title" style="height:2rem;!important"><?php echo $urun["isim"]?></h5>
        <p class="card-text" style="height:2rem;!important"><?php echo $urun["aciklama"]?></p>


      <div class="row">
        <a href="#" class="btn btn-primary col-8 price_btn " style="font-size:1em;background-color:#314ad6;"><?php echo $urun["fiyat"]?> ₺</a>
        <button href="#" class="btn btn-default col-4 " style="font-size:1rem !important; color:#fcba03 ;border:2px solid #ccc; "  onclick="sepeteEkle(<?php echo $urun["id"] ;?>)"><span  class="fa fa-shopping-cart " style=" font-size:1.5rem"></span></button>
</div>

<i  aria-hidden="true"></i>
      </div>  
    </div>
  </div>
  
















  <?php

}


?>
















</div>



<div class="row d-flex justify-content-center mt-5">
  <nav aria-label="">
    <ul class="pagination">

<?php $str = explode("?",$this->uri->segment(3));

      $seg = $this->uri->segment(1)."/".$this->uri->segment(2)."/";
     
     
?>


      <li class="page-item <?php if($page<=1) echo "disabled";?> "><a class="page-link" href="<?php echo base_url($seg.$str[0]."?page=".($page-1));?>">Önceki Sayfa</a></li>
      
      <li class="page-item active"><a class="page-link" href="#"><?php echo $page?></a></li>
     
      <li class="page-item <?php if($total==0) {echo "disabled"; }?> "><a class="page-link" href="<?php echo base_url($seg.$str[0]."?page=".($page+1)); ?>">Sonraki Sayfa</a></li>
    </ul>
  </nav>


</div>
