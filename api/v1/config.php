<?php

$version='0.1.1'; // 2016/Dec/6th

$create_api_key_password = '';  // YOU MUST CREATE A PASSWORD HERE TO USE THE API KEY CREATION PAGE create-api-key.php

// API Modules you want activated, and corrisponding endpoint ip_address:port_number
$allowed_apis = array(
                    'bitcoin' => '',
                    'ethereum' => '',
                    'steem' => 'http://192.168.1.107:8093'
                    );


require_once 'init.php'; // Initiate application 

?>