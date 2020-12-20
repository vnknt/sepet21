<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://use.fontawesome.com/c560c025cf.js"></script>
<div class="container" id="sepetDiv">




    <?php $this->load->view("sepet/sepet_goster");?>





</div>



<?php if($success) {


?>
<div class="alert alert-success">Ürün Başarıyla eklendi</div>

<?php
}?>