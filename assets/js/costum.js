







var base_url = $("#base_url").attr("baseURL");




/////////////////////////////////////////////////////////////////////////////////////////////////////////   Send user data - login

function sendUserData() {

    var uname = $("#username").val();
    var pass = $("#password").val();
    
    
    var obj = $(".alert");
    var msg =document.getElementById("error-msg");
    
    
    
    
    
    
    $.ajax (    
    {
    
    type:'POST',
    
    url:base_url+"login_control",
    data: {
    
    username: uname,
    password : pass
    
    },
        success:function(result) {
            if(result=="username-password"){
              
    
                obj.removeClass("hide alert-warning alert-success");
                obj.addClass("show alert-danger");
    
                msg.innerHTML=" <strong>Hata</strong> Kullanıcı adı veya Şifre yanlış";
    
    
    
    
            }
            
            
            
            
            
            
            
           else  if(result=="null-input") {
    
         
                obj.removeClass("hide alert-danger alert-success");
                obj.addClass("show alert-warning");
    
                msg.innerHTML="<strong>Hata</strong> Lütfen Tüm alanları doldurunuz";
    
            }
    
    
            else if(result==1) {
    
                obj.removeClass("hide alert-danger alert-warning");
                obj.addClass("show alert-success");
    
                msg.innerHTML="Başarıyla Giriş Yaptınız ";
    
                window.location.href=base_url+"dashboard";
    
    
            }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
        }
    
    }
    
    
    );
    
    
    
    
    
    
    
    }
    
    
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////// hide alert 



    $(function(){
        $("#btn-hide-alert").on("click", function(){
            
            $(".alert").removeClass("show");
    
            $(".alert").addClass("hide");
    
    
    
    
    
    
    
            
        });
    });
    





///////////////////////////////////////////////////////////////////////////////////////////////////////// sidebar Toggle button




$(function() {


$("#toggleBtn").on("click",function() {




$("#sidebar").toggleClass("sidebar-active");



$(".icerik").toggleClass("icerik-active");








});







});




















/////////////////////////////////////////////////////////////////////////////////////////////////////////   isJSON

function isJSON (something) {
    if (typeof something != 'string')
        something = JSON.stringify(something);

    try {
        JSON.parse(something);
        return true;
    } catch (e) {
        return false;
    }
}















/////////////////////////////////////////////////////////////////////////////////////////////////////////  search member

$(function() {
    var obj = $(".alert");
    var msg =document.getElementById("error-msg");
                    
    

    $("#loan_btn1").on("click",function() {

      

        var tc_no = $("#loan_tcno").val();
     

        $.ajax({
            type :'POST',
            url: base_url+'loan/search_member',
            data: {
                'tc_no' : tc_no


            },
           
            success : function(result) {
               
                if(result=="required"){
                    obj.removeClass("hide alert-warning alert-success");
                    obj.addClass("show alert-danger");
                    msg.innerHTML=" <strong>Hata</strong> TC No Giriniz";
                }

                else if(result=="0"){
                    obj.removeClass("hide alert-warning alert-success");
                    obj.addClass("show alert-danger");
                    msg.innerHTML=" <strong>Hata</strong> Üye Bulunamadı";
                }

                else if( isJSON(result)){

                result =   $.parseJSON(result);
                

                $("#hidden-form").removeClass("d-none");
                $("#hidden-form").addClass("d-block");
                       
                $("#firstname").attr("placeholder",result[0].firstname);
                $("#lastname").attr("placeholder",result[0].lastname);
                
                }
            }

        }

        );





    });





///////////////////////////////////////////////////////////////////////////////////////////////////////// add book




$("#add-book").on("click", function() {
 
var barcode = $("#book_barcode").val();

var books =[];
var table = $("#table");







$.ajax(

{
type:'POST',
url:base_url+"loan/search_book",
dataType:'json',
data:{
    book_barcode:barcode
},
success:function(result) {

   


    books.push(result[0]);


    alert(books.length);
    console.log(books[0] );











    


    table.append(" <tr>  <td>" + result[0].id +"</td> <td> " +result[0].book_name + "</td><td>"+result[0].book_barcode+"</td><td>4</td></tr>");
   
   

    

    
















}




}

);
















}
);

});











