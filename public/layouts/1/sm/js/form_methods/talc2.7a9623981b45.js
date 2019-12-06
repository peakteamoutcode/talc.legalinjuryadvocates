//  Multistep Form Control 
$(document).ready(function(){
    // SLIDE 1 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    $("#after_2003").on("click", function(event){
        event.preventDefault();
        $("#diagnosed_ovarian_cancer").val("after_2003");
        $("#slide1").addClass("hidden");
        $("#slide2").removeClass("hidden");
    });
    
    $("#before_2003").on("click", function(event){
        event.preventDefault();
        $("#diagnosed_ovarian_cancer").val("before_2003");
        $("#slide1").addClass("hidden");
        $("#slide2").removeClass("hidden");
    });

    $("#not_diagnosed").on("click", function(event){
        event.preventDefault();
        $("#diagnosed_ovarian_cancer").val("no");
        $("#slide1").addClass("hidden");
        $("#slide2").removeClass("hidden");
    });

    // SLIDE 2 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    $("#under_65_yes").on("click", function(event){
        event.preventDefault();
        $("#under_65_when_diagnosed").val("yes");
        $("#slide2").addClass("hidden");
        $("#slide3").removeClass("hidden");
    });

    $("#under_65_no").on("click", function(event){
        event.preventDefault();
        $("#under_65_when_diagnosed").val("no");
        $("#slide2").addClass("hidden");
        $("#slide3").removeClass("hidden");
    });

    // SLIDE 3 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    $("#yes_talc").on("click", function(event){
        event.preventDefault();
        $("#use_talc_4_years").val("yes");
        $("#slide3").addClass("hidden");
        $("#slide4").removeClass("hidden");
    });

    $("#no_talc").on("click", function(event){
        event.preventDefault();
        $("#use_talc_4_years").val("no");
        $("#slide3").addClass("hidden");
        $("#slide4").removeClass("hidden");
    });
    
    // SLIDE 4 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    $("#lawyer_yes").on("click", function(event){
        event.preventDefault();
        $("#lawyer").val("yes");
        $("#slide4").addClass("hidden");
        $("#slide5").removeClass("hidden");
        $(window).scrollTop(0);
    });

    $("#lawyer_no").on("click", function(event){
        event.preventDefault();
        $("#lawyer").val("no");
        $("#slide4").addClass("hidden");
        $("#slide5").removeClass("hidden");
        $(window).scrollTop(0);
    });
});