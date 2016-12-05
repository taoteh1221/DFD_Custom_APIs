<?php

$create_api_key_password = '';  // YOU MUST CREATE A PASSWORD HERE TO USE THE API KEY CREATION PAGE create-api-key.php

// API Modules you want activated
$allowed_apis = array(
                    'bitcoin',
                    'ethereum',
                    'steem'
                    );

$version='0.1.0'; // 2016/Dec/5th

session_start();
require_once 'lib/classes/auth.class.php';

?>