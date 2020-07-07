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
