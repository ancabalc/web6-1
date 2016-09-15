<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'models/applicationsmodel.php';

 
 class Requests extends CI_Controller{
     
     function index(){
         
         $data['title'] = "Applications";
         $data['pageContent'] = "applicationview.php";
         $this->load->view('layout', $data);
     }
     function getAll(){
         
         $applicationModel = new ApplicationsModel();
         $result = $applicationModel->getAll();
         sendResponseToJSON($result);
         
     }
     
 }//application class end