<?php $this->load->view("dependencies/head");?>
<div class="container">

<div class="row justify-content-center align-items-center">

    <div  class="col-12  text-center m-4 ">
        <h class="display-4 "> Admin Login </b>
    </div>


    <div class="col-12  col-md-7" >
        <form action="javascript:void(0); " onSubmit="return sendUserData()">
            <div class="form-group text-center" >
                <input class="form-control mb-3" type="text"     id="username"     name="username" placeholder="Kullanıcı adı" >
                <input class="form-control mb-3" type="password" id="password" name="password" placeholder="Şifre">
                <button class="btn btn-primary w-50"  >Giriş Yap</button>


            </div>
        </form>
    </div>




    <div class="alert  alert-dismissible fade hide col-12 col-md-7 text-center" role="alert">
          <p class="mb-0" id="error-msg" > </p>
        <button type="button" class="close" id="btn-hide-alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>














</div>
</div>





<?php $this->load->view("dependencies/foot");?>