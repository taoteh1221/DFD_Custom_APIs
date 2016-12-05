<?php

require_once 'config.php';

// Requests from the same server don't have a HTTP_ORIGIN header
if (!array_key_exists('HTTP_ORIGIN', $_SERVER)) {
    $_SERVER['HTTP_ORIGIN'] = $_SERVER['SERVER_NAME'];
}

try {
    
    if ( in_array($_REQUEST['custom_api'], $allowed_apis) ) {
    require_once 'lib/classes/custom-api/'.$_REQUEST['custom_api'].'.api.class.php';
    }
    else {
    throw new Exception('API '.$_REQUEST['custom_api'].' is not enabled in configuration');
    }
    

    $custom_api = new custom_api($_REQUEST['request'], $_SERVER['HTTP_ORIGIN']);
    echo $custom_api->process_api();
    
    
}
catch (Exception $e) {
    echo json_encode(Array('error' => $e->getMessage()));
}

?>