<div class="container-fluid">



    <table class="table table-striped">

        <thead>
        <th>No</th>
        
        <th>işlem</th>
                   
        </thead>




        <?php foreach($carts as $cart) {?> 
        <tr>
            <td><?php echo $cart["id"];?></td>
       
            <td>
                <a class="btn btn-default"><?php echo date('d.m.Y H:i',strtotime($cart["created_at"])) ;?></a>
                <a class="btn btn-primary" href="<?php echo base_url("siparisler/incele/".$cart["id"]);?>">İncele</a>
                
        </td>
            
            
        </tr>

        <?php }?>









    </table>



















</div>