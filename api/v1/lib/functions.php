<?php

/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
function json_send_data($server, $method, $request, $params=false, $json_parsed_array=false) {
    
$data = array(
                "jsonrpc" => "2.0",
                "method" => $request,
                "params" => $params,
                "id" => "1"
             );

$json_post = json_encode($data);

$ch = curl_init($server);

curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$json_post);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

$result = curl_exec($ch);
curl_close($ch);

    if ( $json_parsed_array == 1 ) {
    return json_parsed_array($result);
    }
    else {
    return $result;
    }

}
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
function json_parsed_array($jsondata) {
  
$data = json_decode($jsondata, TRUE);
  
  //print_r($data);
      if (is_array($data) || is_object($data)) {
	
	    foreach ($data as $key => $value) {
	      
	      //print_r($key);
	      
	      if ( $key == 'result' ) {
	       
		return $data[$key];
	       
	      }
	    
    
	    }
	    
      }
  
}
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////

?>