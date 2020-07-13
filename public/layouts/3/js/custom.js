$("form.claim-form .slide-one button.form-btn").click(function(){
    $(".form-slide").hide();
    $(".form-slide.slide-two").show();
    var answer = this.innerText.toLowerCase().indexOf('yes') !== -1 ? 'true' : 'false';
    $('input[name="over_4_years"]').val(answer);
});

$("form.claim-form .slide-two button.form-btn").click(function(){
    $("form.claim-form p.error-text").hide();
    $(".form-slide").hide();
    $(".form-slide.slide-three").show();
    $('input[name="diagnosis"]').val(this.innerText);
});

$("form.claim-form .slide-three button.form-btn").click(function(){
    $("form.claim-form p.error-text").hide();
    $(".form-slide").hide();
    $(".form-slide.slide-four").show();
    var answer = this.innerText.toLowerCase().indexOf('yes') !== -1 ? 'after 2010' : 'before 2010';
    $('input[name="diagnosis_when"]').val(answer);
});

$("form.claim-form .slide-four button.form-btn").click(function(){
    $("form.claim-form p.error-text").hide();
    $(".form-slide").hide();
    $(".form-slide.slide-five").show();
    var answer = this.innerText.toLowerCase().indexOf('yes') !== -1 ? 'true' : 'false';
    $('input[name="has_attorney"]').val(answer);
});
