<div class=" m-3" >


<?php
 $total=count($urunler);
    
if($total==0) {?>


<div class="jumbotron jumbotron-fluid text-center">
  
    <h1 class="display-5">Ürün Bulunamadı</h1>
    <p class="lead">Bu sayfada henüz bir ürün yok ...</p>
 
</div>


<?php } else {?>



    <form action="" method="GET">


        <div class="form-group row">

        <select class="form-control col-12 col-md-3" name="marka">
            <option value="">Tüm Markalar</option>
           <?php foreach($markalar as $row) {


                ?>

            <option value="<?php echo $row["marka"];?>"  <?php if($this->input->get("marka")==$row["marka"]){ echo 'selected="selected"';}?>><?php echo $row["marka"];?>            </option>


<?php 
           }       ?>  
        </select>

        
        <select class="form-control col-12  col-md-3" name="order">
         <option value=""> Sırala </option>
            <option value="asc" <?php if($this->input->get("order")=="asc"){ echo 'selected="selected"';}?>> Artan Fiyat </option>



            <option value="desc"  <?php if($this->input->get("order")=="desc"){ echo 'selected="selected"';}?>> Azalan Fiyat </option>          
        </select>


       
        <button class="btn btn-primary col-12 col-md-3">Filtrele</button>





        </form>



        </div>

    





        <?php }?>
</div>