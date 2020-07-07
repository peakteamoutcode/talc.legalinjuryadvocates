<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Talc Lawsuits</title>
    <!-- CSS -->
    <link href="/layouts/3/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link href="/layouts/3/css/style.css" rel="stylesheet">
</head>

<body>

@if(env('FACEBOOK_ACCOUNT_ID', null) !== null)

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='3.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '{{ env('FACEBOOK_ACCOUNT_ID') }}');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{ env('FACEBOOK_ACCOUNT_ID') }}&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

@endif

@if(env('FACEBOOK_ACCOUNT_ID_2', null) !== null)
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='3.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '{{ env('FACEBOOK_ACCOUNT_ID_2') }}');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{ env('FACEBOOK_ACCOUNT_ID_2') }}&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
@endif

<div class="page-wrapper">

    <div class="section-wrapper">
        @yield('content')
    </div>

    <footer class="footer">
        <div class="footer-text">
            <p>To the extent that this communication is considered ATTORNEY ADVERTISING, the law firm of Young & Partners, LLP, through Legal Injury Network, LLC (hereinafter collectively referred to as the "Legal Injury Advocates") is responsible for the content of this communication. This communication is designed for general informational purposes only and it does NOT constitute the formation of a lawyer-client relationship. Although Legal Injury Advocates aims to provide useful information, this should not be considered legal advice. While we attempt to provide accurate information, Legal Injury Advocates does not warrant that the information is accurate. Legal Injury Advocates disclaims all liability to any person for any loss caused by errors or omissions in this collection of information. The hiring of a lawyer is an important decision that should not be based solely upon advertisements. NO REPRESENTATION IS MADE REGARDING THE POTENTIAL OUTCOME OF ANY SPECIFIC CASE OR THE QUALITY OF LEGAL SERVICES BEING BETTER THAN YOU COULD FIND ELSEWHERE. Furthermore, by providing your phone number and clicking “Review My Claim” or “Get Your Free Evaluation,” you consent to receive automated calls, emails and text alerts from Legal Injury Advocates and related third parties, including Young & Partners Law Firm and co-counsel/partner firms, providing information about product liability lawsuits, as well as related promotional offers. You agree that Legal Injury Advocates and its partner law firms may contact you about their services at the phone number(s) you submitted even if it is on a National or State Do Not Call List. Calls/texts may employ automated dialing technology and pre-recorded/artificial voice messages. You also consent to our Terms & Conditions and Privacy Policy.</p>
        </div>
        <div class="footer-bottom">
            <p>Copyright © 2019 | All rights reserved.</p>
            <ul>
                <li>
                    <a href="/terms">Terms & Conditions</a>
                </li>
                <li>
                    <a href="/privacy">Privacy Policy</a>
                </li>
                <li>
                    <a href="mailto:info@legalinjuryadvocates.com">Contact Us</a>
                </li>
            </ul>
        </div>
    </footer>
</div>

<script src="/layouts/3/js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="/layouts/3/js/custom.js" type="text/javascript"></script>

</body>

</html>
