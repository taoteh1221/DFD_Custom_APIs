<?php

class user_auth
{
    
    private $file = 'data/auth.dat';

    public function keys_array() {
        
        $raw = file($this->file, FILE_SKIP_EMPTY_LINES);
        
        foreach ($raw as $value) {
        $cleaned[] = trim($value);
        }
        
        return $cleaned;
    
    }
    
    public function create_key() {
        
        $new_key = md5(uniqid($_SERVER['REMOTE_ADDR'], true));
        
        file_put_contents($this->file, $new_key."\r\n", FILE_APPEND | LOCK_EX);
        
        return $new_key;
    
    }
    
    
    
}

?>