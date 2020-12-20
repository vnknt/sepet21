



var base_url = $("#base_url").attr("baseURL");


$(document).ready( function() {


    reloadCart();



});







function sepeteEkle(id) {
   
    var cart = document.getElementById("cartTotal");

$.ajax({

    type:"POST",
    dataType:"JSON",
    url:base_url+"/api/addToCart",
    data :{
        id:id




    },
    success:function(result) {
        
      reloadCart();


      $('.modal').modal('show');




    }
    
    
    
    
    
    
    });




















}












function urunSil(id) {



    $.ajax( {


        type:"POST",
        url:base_url+"api/deleteFromCart",
        dataType:"JSON",
        data :{

            id:id



        },
        success:function(result) {
            
            if(result==1) {
                reloadCart();
            }

        }
    });



}









function reloadCart() {
    
    $("#cartTotal2").load(base_url+"api/showTotalItem");

            $("#cartTotal1").load(base_url+"api/showTotalItem");


         
        $("#sepetDiv").load(base_url+"sepet_goster");
        
   
        




}

























function urunAzalt(id) {




    $.ajax( {


        type:"POST",
        url:base_url+"api/urunAzalt",
        dataType:"JSON",
        data :{

            id:id



        },
        success:function(result) {
            
            if(result==1) {
                $("#sepetDiv").load(base_url+"sepet_goster");
            }

        }
    });










}































