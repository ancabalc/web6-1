<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {
    
    function create() {

        // require APPPATH.'models/usersmodel.php';
        // $usersModels = new UsersModel();
        // $usersModels->addUser($_POST);        
        
        $data['title'] = "CREATE APPLICATION";
        $data['pageContent'] = "applicationview.php";
        $this->load->view('layout', $data);  
    }
    
}