<?php


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
        else if ( $user_auth->check_key($this->request['api_key']) == false ) {
            throw new Exception('Invalid API Key: ' . $this->request['api_key']);
        }

    }

    /**
     * Example of an Endpoint
     */
     protected function example() {
        return "Ethereum API endpoint test";
     }
     
     // Get a username's account data !!!!!!!!!"GET" METHOD CURRENTLY CAUSES ISSUES, AVOID FOR NOW!!!!!!!!!!!
     protected function account() {
        global $allowed_apis;
        return json_send_data( $allowed_apis['ethereum'], 'POST', 'get_account', array($this->request['username']), 1 );
     }
     
 }
 
 ?>