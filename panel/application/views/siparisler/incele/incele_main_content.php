<?php

?>





<div class="container pt-5">
        <div class="form-group  ">

        <input class="col-12 form-control" type="text" value="<?php echo $cart[0]["isim"];?>" readonly/>


        </div>

        <div class="form-group  ">

            <input class="col-12 form-control" type="text" value="<?php echo $cart[0]["telefon"];?>" readonly/>


        </div>

        <div class="form-group  ">

            <textarea class="col-12 form-control" style="height:100px;"type="text" placeholder="<?php echo $cart[0]["adres"];?>"  readonly/></textarea>


        </div>

        <div class="form-group  ">

<textarea class="col-12 form-control" style="height:100px;"type="text" placeholder="<?php echo $cart[0]["cart_note"];?>"  readonly/></textarea>



<?php
foreach ($products as $product) {



    ?>


<?php echo $product["qty"];?> x <?php echo $product["product_name"];?>  -<?php echo $product["product_info"];?>

<br>
--------------------------------------
<br>




<?php
}





?>
</div>
        <div class="form-group row ">
            <label class="col-4">Toplam</label>
            <input class="col-7 form-control" type="text" placeholder="<?php echo $cart[0]["total"];?> " readonly/> TL


        </div>
        





</div>