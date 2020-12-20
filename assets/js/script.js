

$(function(){
    $("#toggler").on("click", function(){
        
       $(".sideNav").toggleClass("sideNavOpened");
       $("#menu-wrapper").toggleClass("sidebar-wrapper");

        $("body").toggleClass("scroll-none");

        
    });
});






$( function(){ 
   $(".submenu >li> a   ").on("click",function() {

if(! ( $(this).attr('href') )) { 

    $(this).parent().siblings().children("ul").collapse("hide");

    $(this).parent().children("ul").collapse("show");
    $(this).parent().children("ul").collapse("hide");
    

    $(this).find(".caret").toggleClass("caret-rotated");
        
    


} else{
    window.location.href = $(this).attr("href");
}

   




    



    //$(this).parent().children(".submenu").toggleClass("show");


    //$(this).parent().children(".submenu").toggleClass("bbbbbbbbbbbb");

       
   });
});




$( function(){ 
   
 $( "#menu-wrapper" ).click(function(e) {


    if(e.target==this){
        if($(".sideNav").hasClass("sideNavOpened")) {


                $(".sideNav").removeClass("sideNavOpened");

                $("body").removeClass("scroll-none");
                $("#menu-wrapper").toggleClass("sidebar-wrapper");

                


            } 

        }
});

 });

 
 



