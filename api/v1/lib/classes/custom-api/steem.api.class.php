<?php

require_once 'lib/classes/base.api.class.php';

/*
 * Based off http://coreymaynard.com/blog/creating-a-restful-api-with-php/
 */

class custom_api extends base_api
{

    public function __construct($request, $origin) {
        parent::__construct($request);
        
        $user_auth = new user_auth();
        
        if (!array_key_exists('api_key', $this->request)) {
            throw new Exception('No API Key provided');
        }
        else if ( !in_array( $this->request['api_key'], $user_auth->keys_array() ) ) {
            throw new Exception('Invalid API Key: ' . $this->request['api_key']);
        }

    }

    /**
     * Example of an Endpoint
     */
     protected function example() {
        return "Steem API endpoint test";
     }
 }
 
 ?>