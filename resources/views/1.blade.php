<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Talcum Powder</title>
    <link rel="icon" href="">

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/1/sm/css/talc2.49fd75d6a377.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="wrapper">

        @yield('content')

        <div class="row footer" style="background: #00a776">
            <div class="col-xs-12 col-sm-6">
                <p  style="color: #ffffff">Copyright © 2019 | All rights reserved.</p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <ul>
                    <li><a href="/terms"  style="color: #ffffff">Terms &amp; Conditions</a></li>
                    <li><a href=/privacy"  style="color: #ffffff">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Form validation scripts -->

<script type="text/javascript">
    $('#notes').keyup(function() {
        $(this).val($(this).val().replace(/\r?\n/gi, ''));
    });
</script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.phone_us').mask('(000) 000-0000');
        jQuery('.zip_code').mask('00000');
    });
</script>
<script src="/1/sm/js/jquery_mask.730c38e02fd3.js"></script>
<script src="/1/sm/js/jquery.validate.min.24ae1ca673cb.js"></script>
<script src="/1/sm/js/additional-methods.min.d95f4f840a79.js"></script>
<script src="/1/sm/js/basic_form_validation.ad2781474e72.js"></script>

<script src="/1/sm/js/form_methods/talc2.7a9623981b45.js"></script>

@yield('body_extra')

</body>
</html>
