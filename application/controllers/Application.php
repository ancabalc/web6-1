<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {
    
    function create() {
    
        // require APPPATH.'models/applicationsmodel.php';
        // $applicationModel = new ApplicationsModel();
        // $application = $applicationModel->addApplication($_POST);        
        
        $data['title'] = "CREATE APPLICATION";
        $data['pageContent'] = "tabsview.php";
        $data['categories'] = $this->getCategories();
        $this->load->view('layout', $data);  
    }
    

    function getCategories() {
        
        require APPPATH.'models/categoriesmodel.php';
        $categoriesModel = new CategoriesModel();
        return $categoriesModel->getCategories();
        
    }
    
    function addApplication() {
        require APPPATH.'models/applicationsmodel.php';
        $applicationModel = new ApplicationsModel();
        $result = $applicationModel->addApplication($_POST);
        sendResponseToJSON(array("result"=>$result));
    }
}