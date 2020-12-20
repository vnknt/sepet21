

<div class="row d-flex justify-content-center ">

    <b class="text-center p-3" style="font-size:1.8em;">Siparişi Yolla</b>

</div>

<form action="<?php echo base_url("siparis");?>" method="POST" >







    <div class="form-group row d-flex justify-content-center">
        <input class="form-control col-10 col-md-8 col-lg-7" placeholder="İsim (İsteğe Bağlı)" name="isim">
        
    </div>

    <div class="form-group row  d-flex justify-content-center">
        
        <input class="form-control  col-10 col-md-8 col-lg-7" placeholder="Telefon Numaranız" name="telefon"> 
        
        
    </div>

    <div class="form-group row  d-flex justify-content-center">
        
        <textarea class="form-control  col-10 col-md-8 col-lg-7" placeholder="Adres" name="adres"></textarea>
        
        
    </div>


    <div class="form-group row  d-flex justify-content-center">
        
        <textarea class="form-control col-10 col-md-8 col-lg-7"  placeholder="Notunuz" name="not"></textarea>
    </div>



    <div class="form-group  col-8 ">
        <div class=" pull-right">
            <p>Toplam Tutar <b><?php echo $this->cart->total();?> TL</b> </p>
        </div>
    </div>

    <div class="clearfix"></div>



 <div class="form-group row  d-flex justify-content-center">
        
        <button class="btn btn-primary pull-right col-8 col-md-6 col-lg-5"  > Siparişi Gönder</button>
        <a class="btn btn-danger pull-left "  href="<?php echo base_url("sepet");?>">  İptal  </a>
        

    </div>





    

</form>



<div class="messages row d-flex justify-content-center">
    <?php echo validation_errors('<div class="alert alert-danger col-10 col-md-8 col-lg-7">','</div>');?>
</div>