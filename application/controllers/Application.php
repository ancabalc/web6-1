<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {
    
    function create() {

       $application = $applicationModel->addApplication($_POST);        
        
        $data['title'] = "CREATE APPLICATION";
        $data['pageContent'] = "applicationview.php";
        $data['categories'] = $this->getCategories();
        $this->load->view('layout', $data);  
    }
    

    function getCategories() {
        
        require APPPATH.'models/categoriesmodel.php';
        $categoriesModel = new CategoriesModel();
        return $categoriesModel->getCategories();
        
    }
}