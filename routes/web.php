<?php

Route::group(['prefix' => '/'], function () {

    Route::get('/', function () {
        //redirect to default route
        $defaultPath = env('DEFAULT_PATH', '');
        return redirect($defaultPath ?: '/telc');
    });

});

Route::group(['prefix' => '/telc'], function () {

    Route::get('/', function (\Illuminate\Http\Request $request) {
        Session::put('cid', $request->get('cid'));

        switch ($request->get('aid'))
        {
            case '38': //William Kenny
                Session::put('lp_campaign_id', '62a785c01de26');
                Session::put('lp_campaign_key', 'DLmHBNt2PfnTjWhGxdVy');
                break;
            case '32': //AW Performance LLC
                Session::put('lp_campaign_id', '6244ba77c6fac');
                Session::put('lp_campaign_key', 'YnZ2RpX3GzcxKJ9THVMj');
                break;
            case '30': //Slick Ads Media
                Session::put('lp_campaign_id', '6244b883850b2');
                Session::put('lp_campaign_key', 'bXDt2fCchpY4LKGkz3jd');
                break;
            case '31': //Scale Up Media Agency Inc
                Session::put('lp_campaign_id', '6244ba459aa52');
                Session::put('lp_campaign_key', 'd39XrWbJTxzCq4RNvjtM');
                break;
            case '8': //FB Moderation
                Session::put('lp_campaign_id', '5e306b37f0864');
                Session::put('lp_campaign_key', 'gc6Y7M2FmzDXNQ3yqKdZ');
                break;
            case '35': // AdMediary
                Session::put('lp_campaign_id', '627bd25300744');
                Session::put('lp_campaign_key', 'yxqFTYvW2LkNBRVmrMjb');
                break;
            default:
                Session::put('lp_campaign_id', env('LEADSPEDIA_CAMPAIGN_ID'));
                Session::put('lp_campaign_key', env('LEADSPEDIA_CAMPAIGN_KEY'));
        }

        $phoneNumber = '(800) 484-6757';

        return view('talc.index')->with(compact('phoneNumber'));
    })->name('3.index');

    Route::get('/thankyou', function () {
        return view('talc.thankyou');
    })->name('talc.thankyou');

    Route::post('/', function (\Illuminate\Http\Request $request) {

        $cid = Session::get('cid');

        $lpCampaignId  = '6244ba77c6fac';
        $lpCampaignKey = 'YnZ2RpX3GzcxKJ9THVMj';

        $postData = [
            'lp_request_id'   => (!empty($cid)) ? $cid : $request->get('req_id'),
            'lp_campaign_id'  => $lpCampaignId,
            'lp_campaign_key' => $lpCampaignKey,
            'lp_s1'           => $request->get('s1'),
            'lp_s2'           => $request->get('s2'),
            'lp_s3'           => $request->get('s3'),
            'lp_s4'           => $request->get('s4'),
            'lp_s5'           => $request->get('s5'),
            'lp_test'         => 1,
            'diagnosed' => $request->get('diagnosed'),
            'diagnosed_when'  => $request->get('diagnosed_when'),
            'over_4_years'    => $request->get('over_4_years'),
            'has_attorney'    => $request->get('has_attorney'),
            'lp_response'     => 'JSON',
            'first_name'      => $request->firstname,
            'last_name'       => $request->lastname,
            'phone_home'      => $request->phone,
            'address'         => $request->address,
            'address2'        => '',
            'city'            => $request->city,
            'state'           => $request->state,
            'zip_code'        => $request->zip_code,
            'county'          => '',
            'country'         => 'US',
            'email_address'   => $request->email,
            'comments'        => $request->tellus,
            'ip_address'      => $request->get('ip_address'),
            'comments'        => $request->tellus,
        ];

        //Filter Null values
        foreach($postData as $key=>$value)
        {
         if(is_null($value) )
            unset($postData[$key]);
        }

        $guzzle = new \GuzzleHttp\Client();

        //check if qualified lead or not
        

        $postRequest = $guzzle->request('POST', 'https://legalinjurynetwork.leadspediatrack.com/post.do', [
            'form_params' => $postData
        ]);

        $postResponse = $postRequest->getBody()->getContents();
        $jsonObject = json_decode($postResponse);

        if($jsonObject->result =='failed'){
            if(isset($jsonObject->errors[0]->error)) {
                return response()->json(array('sms'=>$jsonObject->errors[0]->error));
            }
            return response()->json(array('sms'=>0));
        } else {
            return response()->json(array('sms'=>1));
        }
        return response()->json(array('sms'=>0));

    })->name('talc.post-lead');

});


Route::group(['prefix' => '/4'], function () {

    Route::get('/', function () {
        return view('1.index');
    })->name('1.index');

    Route::post('/', function (\Illuminate\Http\Request $request) {

        $postData = [
            'diagnosed_when' => $request->get('diagnosed_when'),
            'under_65' => $request->get('under_65'),
            'over_4_years' => $request->get('over_4_years'),
            'has_attorney' => $request->get('has_attorney'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email_address' => $request->get('email_address'),
            'zip_code' => $request->get('zip_code'),
            'notes' => $request->get('notes'),
            'phone_home' => $request->get('phone_home'),
            'phone_cell' => $request->get('phone_cell'),
            'ip_address' => $request->get('ip_address'),
            'is_bot' => false,
            'qualified' => true,
            'lp_request_id' => $request->get('req_id'),
            'lp_campaign_id' => env('LEADSPEDIA_CAMPAIGN_ID'),
            'lp_campaign_key' => env('LEADSPEDIA_CAMPAIGN_KEY'),
            'lp_s1' => $request->get('s1'),
            'lp_s2' => $request->get('s2'),
            'lp_s3' => $request->get('s3'),
            'lp_s4' => $request->get('s4'),
            'lp_s5' => $request->get('s5'),
            'path' => '/1'
        ];

        $guzzle = new \GuzzleHttp\Client();

        $ipqsParams = array(
            'user_agent' => $_SERVER['HTTP_USER_AGENT'],
            'user_language' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
            'strictness' => 1,
            'allow_public_access_points' => 'true'
        );
        $ipqsFormattedParams = http_build_query($ipqsParams);
        $ipqsURL = sprintf(
            'https://www.ipqualityscore.com/api/json/ip/%s/%s?%s',
            'O3AT606i4GvBJBC5ePetx3rGXzIMxapj',
            $postData['ip_address'],
            $ipqsFormattedParams
        );
        $ipqsJSON = $guzzle->get($ipqsURL)->getBody()->getContents();
        $ipqsObj = json_decode($ipqsJSON);

        if(isset($ipqsObj->success) && $ipqsObj->success == true)
        {
            if($ipqsObj->proxy == true || $ipqsObj->is_crawler == true || $ipqsObj->tor == true)
            {
                $postData['is_bot'] = true;
            }

        }

        //check if qualified lead or not
        $phoneNumber = '(800) 484-6757';

        $request = $guzzle->request('POST', 'https://legalinjurynetwork.leadspediatrack.com/post.do', [
            'form_params' => $postData
        ]);

        $response = $request->getBody()->getContents();

        return redirect()->route('1.thanks');

    })->name('1.post-lead');

    Route::get('/thanks', function () {
        return view('1.thanks');
    })->name('1.thanks');

});

Route::group(['prefix' => '/1'], function () {

    Route::get('/', function (\Illuminate\Http\Request $request) {
        Session::put('cid', $request->get('cid'));

        switch ($request->get('aid'))
        {
            case '38': //William Kenny
                Session::put('lp_campaign_id', '62a785c01de26');
                Session::put('lp_campaign_key', 'DLmHBNt2PfnTjWhGxdVy');
                break;
            case '32': //AW Performance LLC
                Session::put('lp_campaign_id', '6244ba77c6fac');
                Session::put('lp_campaign_key', 'YnZ2RpX3GzcxKJ9THVMj');
                break;
            case '30': //Slick Ads Media
                Session::put('lp_campaign_id', '6244b883850b2');
                Session::put('lp_campaign_key', 'bXDt2fCchpY4LKGkz3jd');
                break;
            case '31': //Scale Up Media Agency Inc
                Session::put('lp_campaign_id', '6244ba459aa52');
                Session::put('lp_campaign_key', 'd39XrWbJTxzCq4RNvjtM');
                break;
            case '8': //FB Moderation
                Session::put('lp_campaign_id', '5e306b37f0864');
                Session::put('lp_campaign_key', 'gc6Y7M2FmzDXNQ3yqKdZ');
                break;
            case '35': // AdMediary
                Session::put('lp_campaign_id', '627bd25300744');
                Session::put('lp_campaign_key', 'yxqFTYvW2LkNBRVmrMjb');
                break;
            default:
                Session::put('lp_campaign_id', env('LEADSPEDIA_CAMPAIGN_ID'));
                Session::put('lp_campaign_key', env('LEADSPEDIA_CAMPAIGN_KEY'));
        }

        $phoneNumber = '(800) 484-6757';

        return view('3.index')->with(compact('phoneNumber'));
    })->name('3.index');

    Route::post('/', function (\Illuminate\Http\Request $request) {

        $cid = Session::get('cid');

        $lpCampaignId = Session::get('lp_campaign_id');
        $lpCampaignKey = Session::get('lp_campaign_key');

        if($cid==""){
            $lpCampaignId="62a785c01de26";
            $lpCampaignKey="DLmHBNt2PfnTjWhGxdVy";
        }

        $postData = [
            'diagnosed' => $request->get('diagnosed'),
            'diagnosed_when' => $request->get('diagnosed_when'),
            'over_4_years' => $request->get('over_4_years'),
            'has_attorney' => $request->get('has_attorney'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email_address' => $request->get('email_address'),
            'zip_code' => $request->get('zip_code'),
            'notes' => $request->get('notes'),
            'phone_home' => $request->get('phone_home'),
            'phone_cell' => $request->get('phone_cell'),
            'ip_address' => $request->get('ip_address'),
            'lp_request_id' => (!empty($cid)) ? $cid : $request->get('req_id'),
            'lp_campaign_id' => $lpCampaignId,
            'lp_campaign_key' => $lpCampaignKey,
            'lp_s1' => $request->get('s1'),
            'lp_s2' => $request->get('s2'),
            'lp_s3' => $request->get('s3'),
            'lp_s4' => $request->get('s4'),
            'lp_s5' => $request->get('s5'),
            'path' => '/1'
        ];

        $guzzle = new \GuzzleHttp\Client();

        //check if qualified lead or not


        $request = $guzzle->request('POST', 'https://legalinjurynetwork.leadspediatrack.com/post.do', [
            'form_params' => $postData
        ]);

        $response = $request->getBody()->getContents();

        return redirect()->to('/thanks');

    })->name('3.post-lead');

});

Route::group(['prefix' => '/1b'], function () {

    Route::get('/', function () {
        $phoneNumber = '888-787-0120';
        $useXverify = true;
        return view('3.index')->with(compact('phoneNumber', 'useXverify'));
    });

    Route::post('/', function (\Illuminate\Http\Request $request) {

        $postData = [
            'diagnosed' => $request->get('diagnosed'),
            'diagnosed_when' => $request->get('diagnosed_when'),
            'over_4_years' => $request->get('over_4_years'),
            'has_attorney' => $request->get('has_attorney'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email_address' => $request->get('email_address'),
            'zip_code' => $request->get('zip_code'),
            'notes' => $request->get('notes'),
            'phone_home' => $request->get('phone_home'),
            'phone_cell' => $request->get('phone_cell'),
            'ip_address' => $request->get('ip_address'),
            'lp_request_id' => $request->get('req_id'),
            'lp_campaign_id' => '606f534005f9d',
            'lp_campaign_key' => '6NZzGmQq3HkR7n9CJDp8',
            'lp_s1' => $request->get('s1'),
            'lp_s2' => $request->get('s2'),
            'lp_s3' => $request->get('s3'),
            'lp_s4' => $request->get('s4'),
            'lp_s5' => $request->get('s5'),
            'path' => '/1b'
        ];

        $guzzle = new \GuzzleHttp\Client();

        //check if qualified lead or not


        $request = $guzzle->request('POST', 'https://legalinjurynetwork.leadspediatrack.com/post.do', [
            'form_params' => $postData
        ]);

        $response = $request->getBody()->getContents();

        return redirect()->to('/thanks');

    });

});

Route::group(['prefix' => '/1c'], function () {

    Route::get('/', function () {
        $useXverify = true;
        return view('3.index')->with(compact('useXverify'));
    })->name('3.index');

    Route::post('/', function (\Illuminate\Http\Request $request) {

        $postData = [
            'diagnosed' => $request->get('diagnosed'),
            'diagnosed_when' => $request->get('diagnosed_when'),
            'over_4_years' => $request->get('over_4_years'),
            'has_attorney' => $request->get('has_attorney'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email_address' => $request->get('email_address'),
            'zip_code' => $request->get('zip_code'),
            'notes' => $request->get('notes'),
            'phone_home' => $request->get('phone_home'),
            'phone_cell' => $request->get('phone_cell'),
            'ip_address' => $request->get('ip_address'),
            'lp_request_id' => $request->get('req_id'),
            'lp_campaign_id' => '60662c921d025',
            'lp_campaign_key' => '2G39nxc68bVhzqKZmNgX',
            'lp_s1' => $request->get('s1'),
            'lp_s2' => $request->get('s2'),
            'lp_s3' => $request->get('s3'),
            'lp_s4' => $request->get('s4'),
            'lp_s5' => $request->get('s5'),
            'path' => '/1c'
        ];

        $guzzle = new \GuzzleHttp\Client();

        //check if qualified lead or not


        $request = $guzzle->request('POST', 'https://legalinjurynetwork.leadspediatrack.com/post.do', [
            'form_params' => $postData
        ]);

        $response = $request->getBody()->getContents();

        return redirect()->to('/thanks');

    });

});

Route::group(['prefix' => '/3'], function () {

    Route::get('/', function () {
        return view('3.index');
    })->name('3.index');

    Route::post('/', function (\Illuminate\Http\Request $request) {
        Log::info('Hits the post 3 request');
        $aid = $request->get('aid');

        //$campaignId = env('LEADSPEDIA_CAMPAIGN_ID');
        //$campaignKey = env('LEADSPEDIA_CAMPAIGN_KEY');

        //check for DQ
        if (strtolower($request->get('diagnosed')) == 'no / other' || strtolower($request->get('diagnosed_when')) == 'before 2010' || strtolower($request->get('has_attorney')) == 'true')
        {
            switch ($aid)
            {
                //if concussion media switch to overflow accouunt
                case '21':
                    $campaignId = '611a9ed8305e4';
                    $campaignKey = 'wjpYWNXzDtb6rZFfQxHG';
                    break;
            }
        } else {

            switch ($aid)
            {
                //set affiliate campaign ids/keys
                case '21':
                    $campaignId = '61095ad073ff9';
                    $campaignKey = 'hMB3cJb4wdCyk9qZNQ2D';
                    break;
            }

        }

        $campaignId="62a79ced759c8";
        $campaignKey="K4rbMtkh6f9NQDHxZyWJ";


        $postData = [
            'diagnosed' => $request->get('diagnosed'),
            'diagnosed_when' => $request->get('diagnosed_when'),
            'over_4_years' => $request->get('over_4_years'),//removed
            'has_attorney' => $request->get('has_attorney'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email_address' => $request->get('email_address'),
            'zip_code' => $request->get('zip_code'),
            'notes' => $request->get('notes'),
            'phone_home' => $request->get('phone_home'),
            'phone_cell' => $request->get('phone_cell'),
            'ip_address' => $request->get('ip_address'),
            //'lp_request_id' => $request->get('req_id'),
            'lp_campaign_id' => $campaignId,
            'lp_campaign_key' => $campaignKey,
            'lp_s1' => $request->get('s1'),
            'lp_s2' => $request->get('s2'),
            'lp_s3' => $request->get('s3'),
            'lp_s4' => $request->get('s4'),
            'lp_s5' => $request->get('s5'),
            'path' => '/3'
        ];

        $guzzle = new \GuzzleHttp\Client();

        //check if qualified lead or not


        $request = $guzzle->request('POST', 'https://legalinjurynetwork.leadspediatrack.com/post.do', [
            'form_params' => $postData
        ]);

        $response = $request->getBody()->getContents();
        Log::info('Request sent and works fine.');
        return redirect()->to('/thanks');

    })->name('3.post-lead');

});

Route::group(['prefix' => '/5'], function () {

    Route::get('/', function () {
        return view('5.index');
    })->name('5.index');

    Route::post('/', function (\Illuminate\Http\Request $request) {

        $aid = $request->get('aid');

        $campaignId = '61244a92a1266';
        $campaignKey = 'yQVTkMLYJh7rGWB9fnz4';

        $postData = [
            'diagnosed' => $request->get('diagnosed'),
            'diagnosed_when' => $request->get('diagnosed_when'),
            'over_4_years' => $request->get('over_4_years'),//removed
            'has_attorney' => $request->get('has_attorney'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email_address' => $request->get('email_address'),
            'zip_code' => $request->get('zip_code'),
            'notes' => $request->get('notes'),
            'phone_home' => $request->get('phone_home'),
            'phone_cell' => $request->get('phone_cell'),
            'ip_address' => $request->get('ip_address'),
            //'lp_request_id' => $request->get('req_id'),
            'lp_campaign_id' => $campaignId,
            'lp_campaign_key' => $campaignKey,
            'lp_s1' => $request->get('s1'),
            'lp_s2' => $request->get('s2'),
            'lp_s3' => $request->get('s3'),
            'lp_s4' => $request->get('s4'),
            'lp_s5' => $request->get('s5'),
            'path' => '/5'
        ];

        $guzzle = new \GuzzleHttp\Client();

        //check if qualified lead or not


        $request = $guzzle->request('POST', 'https://legalinjurynetwork.leadspediatrack.com/post.do', [
            'form_params' => $postData
        ]);

        $response = $request->getBody()->getContents();

        return redirect()->to('/thanks');

    })->name('5.post-lead');

});

Route::get('/thanks', function () {
    return view('thanks');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/privacy', function () {
    return view('privacy') ;
});

Route::get('/ccpa', function () {
    return view('ccpa') ;
});

Route::get('/contact', function () {
    return view('3.contact');
});

Route::get('/do-not-sell-my-info', function () {
    return view('do-not-sell-my-info');
});
