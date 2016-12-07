<?php

require_once 'config.php';

?><html>
<head>
<title>API Key Creation</title>
<style>
body {
margin: 55px;
}
</style>
</head>
<body>

<form action='' method='post'>

<p>API Key Creation Password (in config.php): <input type='text' name='key_password' value='' /></p>

<p><input type='submit' value='Request API Key' /></p>

</form>

<p style='color: red; font-weight: bold;'>
<?php
if ( $create_api_key_password != '' && isset($_POST['key_password']) ) {

    if ( $create_api_key_password != $_POST['key_password'] ) {
    echo 'API Key Creation Password Mismatch';
    }
    else {
    
    $user_auth = new user_auth(); // Auth class
    echo 'Your new API key is: ' . $user_auth->create_key();  // New API key creation printed to screen, and saved to data file

    }

}
else {
echo 'API Key Creation Password must be set in config.php';
}

?>
</p>

</body>
</html>