<?php


// Data array sent to API
$data = array(
                'api_key' => 'API_KEY_HERE',
                'custom_api' => 'steem',
                'test_data' => 'test 123'
            );


// API call tests
//echo call_api('GET', "http://gigabyte1900.dragonfrugal.network/api/v1/api.php?request=example", $data);
echo call_api('POST', "http://gigabyte1900.dragonfrugal.network/api/v1/api.php?request=example", $data);
//echo call_api('PUT', "http://gigabyte1900.dragonfrugal.network/api/v1/api.php?request=example", $data);
//echo call_api('DELETE', "http://gigabyte1900.dragonfrugal.network/api/v1/api.php?request=example", $data);


///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
// Method: POST, PUT, GET, DELETE
// Data: array("param" => "value") ==> index.php?param=value
// https://support.ladesk.com/061754-How-to-make-REST-calls-in-PHP
// http://stackoverflow.com/questions/9802788/call-a-rest-api-in-php

function call_api($method, $url, $data = false) {
    
    $curl = curl_init();

    switch ($method) {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS,http_build_query($data));
            break;
        case "DELETE":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
                
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    // Optional Authentication:
    //curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    //curl_setopt($curl, CURLOPT_USERPWD, "username:password");
    
    // Verify SSL certificates
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
    
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    curl_close($curl);

    return $result;
}
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////


?>