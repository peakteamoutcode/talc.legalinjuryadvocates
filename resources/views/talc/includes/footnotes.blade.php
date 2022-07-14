<p>By clicking the "Agree and Submit" button, you provide your electronic signeture and consumer Injury Advocates and [up to 3] of its legal providers to email or call/text you about your potential legal claim at the phone number you entered using automated technology, including auto-dialers and pre-recorder voice technology. This includes if your phone is a mobile number of is listed on any state, federal, or corporate "Do Not Call" list. Your consent is not required to obtain a legal evaluation.</p>
<p>By clicking the "Agree and Submit" button, you further affirm that you have read and agree to this Site's Thems and Conditions (including arbitration, class waiver, SMS Terms, and E-SIGN consent provisions) and Privacy Policy.</p>

<footer class="footer">
    <div class="footer-text">
        <p>To the extent that this communication is considered ATTORNEY ADVERTISING (hereinafter collectively referred to as the "{{ getenv('COMPANY_NAME') }}") is responsible for the content of this communication. This communication is designed for general informational purposes only and it does NOT constitute the formation of a lawyer-client relationship. Although {{ getenv('COMPANY_NAME') }} aims to provide useful information, this should not be considered legal advice. While we attempt to provide accurate information, {{ getenv('COMPANY_NAME') }} does not warrant that the information is accurate. {{ getenv('COMPANY_NAME') }} disclaims all liability to any person for any loss caused by errors or omissions in this collection of information. The hiring of a lawyer is an important decision that should not be based solely upon advertisements. NO REPRESENTATION IS MADE REGARDING THE POTENTIAL OUTCOME OF ANY SPECIFIC CASE OR THE QUALITY OF LEGAL SERVICES BEING BETTER THAN YOU COULD FIND ELSEWHERE. Furthermore, by providing your phone number and clicking “Review My Claim” or “Get Your Free Evaluation,” you consent to receive automated calls, emails and text alerts from {{ getenv('COMPANY_NAME') }} and related third parties, and co-counsel/partner firms, providing information about product liability lawsuits, as well as related promotional offers. You agree that {{ getenv('COMPANY_NAME') }} and its partner law firms may contact you about their services at the phone number(s) you submitted even if it is on a National or State Do Not Call List. Calls/texts may employ automated dialing technology and pre-recorded/artificial voice messages. You also consent to our Terms & Conditions and Privacy Policy.</p>
    </div>
    <div class="footer-bottom">
        {{-- @if(getenv('COMPANY_DOMAIN') == 'legalinjuryadvocates.com')
            <p>Site Sponsored by Young & Partners, LLP</p>
        @endif --}}
        <p>Copyright © {{ now()->year }}
        <ul>
            <li><a href="https://info.{{ getenv('COMPANY_DOMAIN') }}/terms" target="_blank"> Terms & Conditions</a></li>
            <li><a href="https://info.{{ getenv('COMPANY_DOMAIN') }}/privacy" target="_blank"> Privacy Policy</a></li>
            <li><a href="https://info.{{ getenv('COMPANY_DOMAIN') }}/contact" target="_blank"> Contact Us</a></li>
            <li><a href="https://info.{{ getenv('COMPANY_DOMAIN') }}/ccpa" target="_blank"> CCPA</a></li>
            <li><a href="{{asset('layouts/doc/DO-NOT-SELL-MY-INFO.docx')}}" target="_blank">Do Not Sell My Data</a></li>
        </ul>
    </div>
</footer>
