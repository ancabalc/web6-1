<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    function logintemp() {
        
        $data['text'] = "TEst text";
        
        $this->load->view('layout', $data);
    }
}