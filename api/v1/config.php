<?php

$version='0.1.2'; // 2016/Dec/7th

$data_file_prefix = ''; // YOU MUST CREATE AN ALPHANUMERIC PREFIX HERE FOR FLAT FILE SECURITY

$create_api_key_password = '';  // YOU MUST CREATE A PASSWORD HERE TO USE THE API KEY CREATION PAGE create-api-key.php

$verify_connection = 0;  // 0=no 1=yes (check SSL cert and peer)

// API Modules you want activated, and corrisponding endpoint ip_address:port_number
$allowed_apis = array(
                    'bitcoin' => '',
                    'ethereum' => '',
                    'steem' => 'http://192.168.1.107:8093'
                    );


require_once 'init.php'; // Initiate application 

?>