<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    function index() {

      
        $data['title'] = "ServFinder";
        $data['pageContent'] = "homeview.php";
        $this->load->view('layout', $data);  
    }
    
}