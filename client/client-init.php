<?php

$verify_connection = 0;  // 0=no 1=yes (check SSL cert and peer)

if ( !extension_loaded('curl') ) {
echo 'Curl extension is required.'; exit;
}

require_once 'lib/functions.php';

?>