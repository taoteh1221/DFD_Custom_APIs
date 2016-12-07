<?php

class user_auth
{
    

    public function check_key($key) {
        
        global $data_file_prefix;
        
        // Subdirectories based on first 3 characters to reduce disk I/O
        $subdir = strtolower(substr($key , 0, 1)); 
        $subdir2 = strtolower(substr($key , 1, 1));
        $subdir3 = strtolower(substr($key , 2, 1));
        
        $file = file_get_contents("data/".$subdir."/".$subdir2."/".$subdir3."/".$data_file_prefix."-auth.dat");
        
        return strstr($file, $key);
    
    }
    
    public function create_key() {
        
        global $data_file_prefix;
        
        $new_key = md5(uniqid($_SERVER['REMOTE_ADDR'], true));
        
         // Subdirectories based on first 3 characters to reduce disk I/O 
        $subdir = strtolower(substr($new_key , 0, 1));
        $subdir2 = strtolower(substr($new_key , 1, 1));
        $subdir3 = strtolower(substr($new_key , 2, 1));
        
            if ( !is_dir("data/".$subdir) ){
            mkdir("data/".$subdir, 0777);
            }
            if ( !is_dir("data/".$subdir."/".$subdir2) ){
            mkdir("data/".$subdir."/".$subdir2, 0777);
            }
            if ( !is_dir("data/".$subdir."/".$subdir2."/".$subdir3) ){
            mkdir("data/".$subdir."/".$subdir2."/".$subdir3, 0777);
            }
        
        
        file_put_contents("data/".$subdir."/".$subdir2."/".$subdir3."/".$data_file_prefix."-auth.dat", $new_key."\r\n", FILE_APPEND | LOCK_EX);
        
        return $new_key;
    
    }
    
    
    
}

?>