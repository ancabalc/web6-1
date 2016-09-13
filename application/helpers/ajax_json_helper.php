<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('sendResponseToJSON')){
    
    function sendResponseToJSON($response){
        
        header('Content-Type: application/json');
        
        try{
        
        $res = json_encode($response);
        
        } catch(Exeception $e){
        
        $res = json_encode(array("error"=>"Invalid response"));
        }
        
        echo $res;
        die();
    }
}
