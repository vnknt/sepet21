<!DOCTYPE html>
<html lang="en">
<head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	

	

	<link rel="stylesheet" href="<?php echo base_url("assets/css/costum.css");?>" type="text/css">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>




.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}



</style>


<body>

























<nav class="navbar navbar-expand-lg navbar-dark  text-white bg-costum fixed-top d-flex" id="navbar_costum">
<a class="navbar-brand" style="letter-spacing:1.5px;" href="<?php echo base_url();?>"><span style="color:#fcba03;font-weight:bold;">SEPET</span>21 </a>
<ul class="navbar-nav mr-auto">
	<li>
</ul>




 
  <div class="navbar-header">
  <a  href="<?php echo base_url("sepet");?>" class="btn d-lg-none " style="font-size:1.3rem;	letter-spacing:3px;	border:1px solid rgba(133, 163, 212,0.2); justify-self-left;"> <span class="fa fa-shopping-cart text-white  " ><span  id="cartTotal1" class="cartTotal" style="font-size:1rem;"></span>
			</a> 
		<button class="navbar-toggler" id="toggler" type="button" data-toggle="collapser" data-target="#navbarListr" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon "></span>
  		</button>
		 
    </div>
 
<div class="collapse navbar-collapse    " id="navbarList">


<ul class="navbar-nav ml-auto">

	<li class="nav-item active pr-5">
		<a class="nav-link " href="<?php echo base_url("anasayfa");?>">Ana Sayfa <span class="sr-only">(current)</span></a>
    </li>

	<li class="nav-item dropdown active pr-5">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ürünler
        </a>


		
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

		<?php foreach ($categories as $cat) {?>

         	<li> <a class="dropdown-item" href="<?php echo base_url("urunler/kategori/").$cat["kategori_adi"];?>"><?php echo $cat["baslik"];?></a></li>
		
		
			 <?php }?>




          			
		</ul>
		

	
		  
      </li>


	<li class="nav-item active pr-5">
		<a class="nav-link pr-5" href="<?php echo base_url("iletisim");?>">İletişim <span class="sr-only">(current)</span></a>
	</li>
	



	<li class="nav-item d-none d-md-block"><a  href="<?php echo base_url("sepet");?>" class="btn " style="font-size:1.3rem;	border:1px solid rgba(133, 163, 212,0.2); justify-self-left; min-width:80px;"> <span class="fa fa-shopping-cart text-white" style="height:1rem;"><span  class="mr-2  cartTotal"id="cartTotal2"  style="font-size:1rem;"></span>
					</a> </li>


</ul>

</div>
</nav>









<div class="d-lg-none" id="menu-wrapper">


<div class="sideNav	 ">
<div class="menu-head d-block text-center p-3 text-white " style="font-size:1.3em; background-color:rgba(11, 32, 153,0.95)!important;font-weight:bold;">Menü</div>


	<div class="sidebar_content ">
	


		<form action="<?php echo base_url("urunler/ara");?>" method ="GET">
			<div class="form-group row p-2 border-bottom border-secondary" >

				<input type="text" class="form-control col-10" name="urun" placeholder="Ürün adı" autocomplete="off"/>
				
				<button type="submit" class=" btn btn-primary col-2 "><span class="fa fa-search"></span>	</button>
			</div>
		</form>










			<ul class="navbar-nav ">
					<li class="nav-item active "> <a href="<?php echo base_url("anasayfa");?>">Ana Sayfa</a></li>





					<li class="nav-item active  ">



						<a class="" data-toggle="collapse" data-target="#submenu1">
								<span class="nav-header-primary">Kategoriler <span class="pull-right"><b class="caret"></b></span></span>
						</a> 
							<ul class="collapse submenu" id="submenu1">
								














<?php 

foreach($categories as $kategori)

{

?>











					<li class="submenu ">
									<a class=" " <?php if($kategori["sub"]) {?>   class="not-linked"  <?php }else {?>href="<?php echo base_url("urunler/kategori/".$kategori["kategori_adi"]);}?>"  data-toggle="collapse" data-target="#yiysecekler">
<span class="nav-header-primary"><?php echo $kategori["baslik"];?>  <?php if($kategori["sub"]) {?> <span class="pull-right"><span class="caret">></span></span>   <?php }?></span>
									</a>


									<?php if($kategori["sub"]) {?>
										<ul class="  collapse submenu" >
									



											<?php foreach ($kategori["sub"] as $sub) { if($sub) {?>


											<li class="  ">
												<a <?php if(!$sub["sub"]) {echo  '  href="'. base_url("urunler/kategori/".$sub["kategori_adi"]).'"'; }  ?>  data-toggle="collapse" data-target="#submenu3">
													<span class="nav-header-primary"><?php echo $sub["baslik"];?> </span>
												</a>
												
											</li>







											<?php }}?>


										













										</ul>

													<?php
									}
										?>


								
								</li>


























<?php



	






}





?>
















<!--










								<li class="   submenu">
									<a class=" " data-toggle="collapse" data-target="#icescekler">
										<span class="nav-header-primary">İçecek <span class="pull-right"><b class="caret">></b></span></span>
									</a>
									<ul class="  collapse submenu" id="icecekler">
									
									<li class="  ">
										<a class=" " data-toggle="collapse" data-target="#submenu3">
											<span class="nav-header-primary">Yiyecek1 </span>
										</a>
											
									</li>
									<li class="  ">
										<a class="" data-toggle="collapse" data-target="#submenu3">
											<span class="nav-header-primary">Yiyecek2</span>
										</a>
											
									</li>
									<li class="  ">
										<a class="" data-toggle="collapse" data-target="#submenu3">
											<span class="nav-header-primary">Yiyecek3 </span>
										</a>
											
									</li>


								</ul>
								</li>
								<li class="  ">
									<a class="" data-toggle="collapse" data-target="#submenu3">
										<span class="nav-header-primary">Gıda <span class="pull-right"><b class="caret"></b></span></span>
									</a>
										
								</li>



							</ul>
					</li>

---></ul>
					<li class="nav-item active ">



						
						<a href="<?php echo base_url("iletisim");?>">İletişim<span class="pull-right"><b class="caret"></b></a>
						</a> 
							
					</li>

					



			</ul>



			
	</div>









</div>




</div>











<div class="container wrap mt-5 pt-3">


	


