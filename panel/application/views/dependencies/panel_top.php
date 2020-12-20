<?php $this->load->view("dependencies/head"); ?>














<div class="wrapper  ">



    <nav id="sidebar" class="sidebar-active">


 
        <ul class="list-unstyled components">



                
            <li class="nav-item   "><a class="d-block" href="#">Ana Sayfa </a> </li>
            
                
            <li class="nav-item   "><a class=" d-block" href="<?php echo base_url("urun/ekle");?>">Ürün Ekle</a> </li>
            <li class="nav-item   "><a class=" d-block" href="<?php echo base_url("urun/image_add");?>">Resim Ekle</a> </li>
            
            
            <li class="nav-item   "><a class="d-block" href="#">Ürün Sil</a> </li>
            <li class="nav-item   "><a class="d-block" href="#">Fiyat Sorgula</a> </li>
            <li class="nav-item   "><a class="d-block" href="#">Mesajlar</a> </li>
            
            <li class="nav-item active  ">
                <a id="logout-btn" class="w-75" href="<?php echo base_url("logout");?> "> <i class="fa fa-sign-out" aria-hidden="true"></i> Çıkış Yap</a>
            
            </li>
                    
        



        </ul>   






    </nav>





<div id="content">

    <nav class=" navbar navbar-expand-xlg navbar-dark bg-dark text-white fixed-top">
        <div class="container-fluid justify-content-md-start justify-content-between">
        <div class="sidebar-header"><h3>Yönetim Paneli</h3></div>

        <button class="navbar-toggler ml-5 " id="toggleBtn" type="button" >
                        <span class="navbar-toggler-icon"></span>

                        <span >Menü</span>


                    </button>
        </div>  
    </nav>





    <div class=" icerik   p-5 d-block ">

        <div class="container-fluid  " style="border:2px solid #000;">

          