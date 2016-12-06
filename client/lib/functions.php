<?php


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

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    curl_close($curl);

    return $result;
}
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////


?>