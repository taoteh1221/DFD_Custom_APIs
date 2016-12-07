<?php

require_once 'client-init.php';

// Data array sent to API
$data = array(
                'api_key' => 'API_KEY_HERE',  // PUT YOUR API KEY HERE
                'custom_api' => 'steem',
                'username' => 'taoteh1221'
            );


// API call tests !!!!!!!!!"GET" METHOD CURRENTLY CAUSES ISSUES, AVOID FOR NOW!!!!!!!!!!!

//echo call_api('GET', "https://gigabyte1900.dragonfrugal.network/api/v1/api.php?request=example", $data);
//echo call_api('POST', "https://gigabyte1900.dragonfrugal.network/api/v1/api.php?request=example", $data);
echo call_api('POST', "https://gigabyte1900.dragonfrugal.network/api/v1/api.php?request=account", $data);
//echo call_api('POST', "https://gigabyte1900.dragonfrugal.network/api/v1/example", $data);
//echo call_api('PUT', "https://gigabyte1900.dragonfrugal.network/api/v1/api.php?request=example", $data);
//echo call_api('DELETE', "https://gigabyte1900.dragonfrugal.network/api/v1/api.php?request=example", $data);


?>