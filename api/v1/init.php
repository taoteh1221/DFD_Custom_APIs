<?php

if ( !extension_loaded('curl') ) {
echo 'Curl extension is required.'; exit;
}

if ( !$data_file_prefix || !ctype_alnum($data_file_prefix) ) {
echo 'The "data_file_prefix" variable in config.php must be created or made alphanumeric.'; exit;
}

// General initiation of application
session_start();
require_once 'lib/functions.php';
require_once 'lib/classes/auth.class.php';
require_once 'lib/classes/base.api.class.php';

?>