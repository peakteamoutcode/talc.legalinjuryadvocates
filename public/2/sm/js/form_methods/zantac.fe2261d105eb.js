//  Multistep Form Control 
$(document).ready(function(){
    // SLIDE 1 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    $("#bladder_cancer").on("click", function(event){
        event.preventDefault();
        $("#cancer_after_zantac").val("bladder_cancer");
        $("#slide1").addClass("hidden");
        $("#slide2").removeClass("hidden");
        $(window).scrollTop(0);
    });
    
    $("#stomach_cancer").on("click", function(event){
        event.preventDefault();
        $("#cancer_after_zantac").val("stomach_cancer");
        $("#slide1").addClass("hidden");
        $("#slide2").removeClass("hidden");
        $(window).scrollTop(0);
    });
    
    $("#intestinal_cancer").on("click", function(event){
        event.preventDefault();
        $("#cancer_after_zantac").val("intestinal_cancer");
        $("#slide1").addClass("hidden");
        $("#slide2").removeClass("hidden");
        $(window).scrollTop(0);
    });
    
    $("#colorectal_cancer").on("click", function(event){
        event.preventDefault();
        $("#cancer_after_zantac").val("colorectal_cancer");
        $("#slide1").addClass("hidden");
        $("#slide2").removeClass("hidden");
        $(window).scrollTop(0);
    });
    
    $("#esophogeal_cancer").on("click", function(event){
        event.preventDefault();
        $("#cancer_after_zantac").val("esophogeal_cancer");
        $("#slide1").addClass("hidden");
        $("#slide2").removeClass("hidden");
        $(window).scrollTop(0);
    });  
    
    $("#kidney_cancer").on("click", function(event){
        event.preventDefault();
        $("#cancer_after_zantac").val("kidney_cancer");
        $("#slide1").addClass("hidden");
        $("#slide2").removeClass("hidden");
        $(window).scrollTop(0);
    });  
    
    $("#liver_cancer").on("click", function(event){
        event.preventDefault();
        $("#cancer_after_zantac").val("liver_cancer");
        $("#slide1").addClass("hidden");
        $("#slide2").removeClass("hidden");
        $(window).scrollTop(0);
    });  
    
    $("#ovarian_cancer").on("click", function(event){
        event.preventDefault();
        $("#cancer_after_zantac").val("ovarian_cancer");
        $("#slide1").addClass("hidden");
        $("#slide2").removeClass("hidden");
        $(window).scrollTop(0);
    });  
    
    $("#uterine_cancer").on("click", function(event){
        event.preventDefault();
        $("#cancer_after_zantac").val("uterine_cancer");
        $("#slide1").addClass("hidden");
        $("#slide2").removeClass("hidden");
        $(window).scrollTop(0);
    });  
    
    $("#testicular_cancer").on("click", function(event){
        event.preventDefault();
        $("#cancer_after_zantac").val("testicular_cancer");
        $("#slide1").addClass("hidden");
        $("#slide2").removeClass("hidden");
        $(window).scrollTop(0);
    });  
    $("#other_cancer").on("click", function(event){
        event.preventDefault();
        $("#cancer_after_zantac").val("other_cancer");
        $("#slide1").addClass("hidden");
        $("#slide2").removeClass("hidden");
        $(window).scrollTop(0);
    });
    
    // SLIDE 2 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    $("#use_3_months_yes").on("click", function(event){
        event.preventDefault();
        $("#use_3_months").val("yes");
        $("#slide2").addClass("hidden");
        $("#slide3").removeClass("hidden");
        $(window).scrollTop(0);
    });

    $("#use_3_months_no").on("click", function(event){
        event.preventDefault();
        $("#use_3_months").val("no");
        $("#slide2").addClass("hidden");
        $("#slide3").removeClass("hidden");
        $(window).scrollTop(0);
    });
    
    // SLIDE 3 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    $("#lawyer_yes").on("click", function(event){
        event.preventDefault();
        $("#lawyer").val("yes");
        $("#slide3").addClass("hidden");
        $("#slide4").removeClass("hidden");
    });

    $("#lawyer_no").on("click", function(event){
        event.preventDefault();
        $("#lawyer").val("no");
        $("#slide3").addClass("hidden");
        $("#slide4").removeClass("hidden");
    });
});