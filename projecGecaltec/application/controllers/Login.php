<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
      parent::__construct();
    }

    function index()
    {      
        
       $this->load->view('Login/login_view');
    }
    
    function validateLogin(){
        
        return "exitoso";
        
        //$user = $this->input->post("lgUser");
        //$password = $this->input->post("lgPsw");
        //echo "User: ".$user." Password:". $password;
       
        
    }

}

?>