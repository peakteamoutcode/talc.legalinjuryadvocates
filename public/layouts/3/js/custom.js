$("form.claim-form .slide-one button.form-btn").click(function(){
    $('input[name="diagnosed_when"]').val(this.innerText);

    $(".form-slide").hide();
    $(".form-slide.slide-two").show();
});

$("form.claim-form .slide-two button.form-btn").click(function(){
    var answer = this.innerText.toLowerCase().indexOf('yes') !== -1 ? 'true' : 'false';
    $('input[name="under_65"]').val(answer);

    $("form.claim-form p.error-text").hide();
    $(".form-slide").hide();
    $(".form-slide.slide-three").show();

});

$("form.claim-form .slide-three button.form-btn").click(function(){
    var answer = this.innerText.toLowerCase().indexOf('yes') !== -1 ? 'true' : 'false';
    $('input[name="over_4_years"]').val(answer);

    $("form.claim-form p.error-text").hide();
    $(".form-slide").hide();
    $(".form-slide.slide-four").show();
});

$("form.claim-form .slide-four button.form-btn").click(function(){
    var answer = this.innerText.toLowerCase().indexOf('yes') !== -1 ? 'true' : 'false';
    $('input[name="has_attorney"]').val(answer);

    $("form.claim-form p.error-text").hide();
    $(".form-slide").hide();
    $(".form-slide.slide-five").show();
});
