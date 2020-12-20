


<h1 class="display-5 text-center">Ürün Ekle</h1>









<form action="javascript:void(0);" >
   





<div id="hidden-form" >
    <div class="row d-flex justify-content-center  " >


        <div class="col-sm-12 col-lg-12   "  >
        <div class="form-group row d-flex justify-content-center">
           
            
                <div class="col-6 col-sm-6 col-md-5 ">
                    <input type="text" id="urun_adi" class="form-control" placeholder="Ürün Adı" autocomplete="off"> 
                </div>        
                <div class="col-6 col-sm-6 col-md-5">
                    <input type="number" step="0.01" class="form-control" id="urun_fiyat" placeholder="Fiyatı" autocomplete="off"> 
                </div> 
                <div class="col-6 col-sm-6 col-md-5 ">
                    <input type="text" id="marka" class="form-control" placeholder="Marka" autocomplete="off">  
                </div>   
                <div class="col-6 col-sm-6 col-md-5 ">
                    <input type="text" id="urun_detay" class="form-control" placeholder="Detay" autocomplete="off"> 
                </div>  



                <div class="col-8 col-sm-8 col-md-8 ">
                    <div class="row pl-3" id="selector"> 
                        <select class="form-group" id="selectBox" onchange="">
                        <?php
                                foreach ($kategoriler as $kategori) {
                                    ?>
                                <option value="<?php echo $kategori["kategori_adi"];?>"><?php echo $kategori["baslik"];?></option>
                             <?php
                                } ?>
                                
                        </select>









                        </div>


                </div>   











    

            </div>


                    <div class="form-group row d-flex justify-content-center">

                        <div class="col-12 col-md-2 " ><button class="btn btn-secondary w-100" onclick="urunEkle();">KAYDET</button></div>
                        <div class="col-12 col-md-2 " ><button class="btn btn-danger w-100" onclick="location.reload();">İptal</button></div>


                      </div>

                
            

            
          
            
</form>
<div id="messages">


</div>

  


        </div>



    </div>

</div>



<table class="table">

<thead>

<th>id</th>
<th>Adı</th>
<th>Fiyati</th>
<th>Detay</th>

<th>İşlem</th>





</thead>




<?php


foreach ($son_urunler as $urun) { ?>


    <tr id="<?php echo $urun["id"];?>" > 
        <td>



        <img class="card-img-top" src="<?php echo base_url("uploads/images/").$urun["resim_url"];?>" style="width:70px;">
        


        </td>
        <td>
            <?php echo $urun["isim"];?>


        </td>
        <td>
            <?php echo $urun["fiyat"];?>


        </td>
        <td>
            <?php echo $urun["aciklama"];?>


        </td>
        <td>
           <a class="btn btn-warning"   href="<?php echo base_url("urun/duzenle/") . $urun["id"];?>" >Düzenle</a>
            
            <a class="btn btn-danger" href="<?php echo base_url("urun/sil/") . $urun["id"];?>">Sil</a>
            <a class="btn btn-primary" href="<?php echo base_url("urun/image_add/") . $urun["id"];?>">Resim Ekle</a>
            

        </td>


<?php }?>
















</table>








