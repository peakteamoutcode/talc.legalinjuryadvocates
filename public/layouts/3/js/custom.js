$("form.claim-form .slide-one button.form-btn").click(function(){
    $(".form-slide").hide();
    $(".form-slide.slide-two").show();
});

$("form.claim-form .slide-two button.form-btn").click(function(){
    $("form.claim-form p.error-text").hide();
    $(".form-slide").hide();
    $(".form-slide.slide-three").show();
});

$("form.claim-form .slide-three button.form-btn").click(function(){
    $("form.claim-form p.error-text").hide();
    $(".form-slide").hide();
    $(".form-slide.slide-four").show();
});

$("form.claim-form .slide-four button.form-btn").click(function(){
    $("form.claim-form p.error-text").hide();
    $(".form-slide").hide();
    $(".form-slide.slide-five").show();
});

$("form.claim-form .slide-two button.form-btn.error-no").click(function(){
    $(".form-slide.slide-two").show();
    $(".form-slide.slide-three").hide();
    $(this).siblings(".error-text").show();
});


$("form.claim-form .slide-three button.form-btn.error-no").click(function(){
    $(".form-slide.slide-three").show();
    $(".form-slide.slide-four").hide();
    $(this).siblings(".error-text").show();
});


$("form.claim-form .slide-four button.form-btn.error-no").click(function(){
    $(".form-slide.slide-four").show();
    $(".form-slide.slide-five").hide();
    $(this).siblings(".error-text").show();
});