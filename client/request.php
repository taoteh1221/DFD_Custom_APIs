<?php

if ( !extension_loaded('curl') ) {
echo 'Curl extension is required.'; exit;
}

require_once 'lib/functions.php';


// Data array sent to API
$data = array(
                'api_key' => 'API_KEY_HERE',
                'custom_api' => 'steem',
                'username' => 'taoteh1221'
            );


// API call tests !!!!!!!!!"GET" METHOD CURRENTLY CAUSES ISSUES, AVOID FOR NOW!!!!!!!!!!!

//echo call_api('GET', "http://gigabyte1900.dragonfrugal.network/api/v1/api.php?request=example", $data);
//echo call_api('POST', "http://gigabyte1900.dragonfrugal.network/api/v1/api.php?request=example", $data);
echo call_api('POST', "http://gigabyte1900.dragonfrugal.network/api/v1/api.php?request=account", $data);
//echo call_api('POST', "http://gigabyte1900.dragonfrugal.network/api/v1/example", $data);
//echo call_api('PUT', "http://gigabyte1900.dragonfrugal.network/api/v1/api.php?request=example", $data);
//echo call_api('DELETE', "http://gigabyte1900.dragonfrugal.network/api/v1/api.php?request=example", $data);


?>