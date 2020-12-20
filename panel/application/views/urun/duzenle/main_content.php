
<h1 class="display-5 text-center">Ürün Düzenle</h1>









<form action="javascript:void();" >
   





<div id="hidden-form" >
    <div class="row d-flex justify-content-center  " >


        <div class="col-sm-12 col-lg-12   "  >
        <div class="form-group row d-flex justify-content-center">
           
            
                <div class="col-6 col-sm-6 col-md-5 ">
                    <input type="text" id="urun_adi" class="form-control" value="<?php echo trim($urun[0]["isim"]);?>" autocomplete="off"> 
                </div>        
                <div class="col-6 col-sm-6 col-md-5">
                    <input type="number" step="0.01" class="form-control" id="urun_fiyat" value="<?php echo trim($urun[0]["fiyat"]);?>" autocomplete="off"> 
                </div> 
                <div class="col-6 col-sm-6 col-md-5 ">
                    <input type="text" id="marka" class="form-control" value="<?php echo trim($urun[0]["marka"]);?>" autocomplete="off">  
                </div>   
                <div class="col-6 col-sm-6 col-md-5 ">
                    <input type="text" id="urun_detay" class="form-control" value="<?php echo trim($urun[0]["aciklama"]);?>" autocomplete="off"> 
                </div>  



                <div class="col-8 col-sm-8 col-md-8 ">
                    <div class="row pl-3" id="selector"> 
                        <select class="form-group" id="selectBox" >
                            <option class="form-group" value="">Kategori Seç</option>
                        <?php
                                foreach ($kategoriler as $kategori) {
                                    ?>
                                <option <?php echo trim($urun[0]["isim"]);?> value="<?php echo $kategori["kategori_adi"];?>" <?php if(trim($urun[0]["kategori"])==$kategori["kategori_adi"] ) {echo 'selected="selected"';} ?>       ><?php echo $kategori["baslik"];?></option>
                             <?php
                                } ?>
                                
                        </select>




                                <div id="alt"></div>




                        </div>

                                
                </div>   











    

            </div>


                    <div class="form-group row d-flex justify-content-center">

                        <div class="col-12 col-md-2 " ><button class="btn btn-secondary w-100" onclick="urunDuzenle(<?php echo $this->uri->segment(3);?>);">KAYDET</button></div>
                        <div class="col-12 col-md-2 " ><a class="btn btn-danger w-100" href="<?php echo base_url("urun/ekle");?> ">İptal</a></div>


                      </div>

                
            

            
          
            
</form>
<div id="messages">


</div>

  


        </div>



    </div>

</div>
