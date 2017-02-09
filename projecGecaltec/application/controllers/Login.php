<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      $this->load->model('user','',TRUE);
    }

    function index()
    {      
        
       $this->load->view('Login/login_view');
    }
    
    function validateLogin(){
        
        //header('Content-Type: application/json');
        
        
        //return "exitoso";
        //echo json_encode( "Exitoso" );
        $user = $this->input->post("lgUser");
        $password = $this->input->post("lgPsw");
        
        $result = $this->user->login($user, $password);
               
        
        if ($result) {
            
            $sess_array = array();
            foreach($result as $row)
            {                
              $sess_array = array(
                'Id' => $row->Id,
                'User' => $row->User,
                'Mail' => $row->Mail,
                'Rol' => $row->Name
               );
            }
            $this->session->set_userdata('logged_in', $sess_array);
            
            $this->output
            ->set_content_type("application/json")
            ->set_output(json_encode(array('message'=>'', 'redirect'=>base_url('Dictum/') )));
        }else{
            $this->output
            ->set_content_type("application/json")
            ->set_output(json_encode(array('message'=>'Usuario y/o clave incorrectos.' )));
        }       
        
        //echo json_encode("User: ".$user." Password:". $password);
       
        
    }
    
    function logout(){
        
       $this->session->unset_userdata('logged_in');
       session_destroy();
       redirect('Dictum/', 'refresh'); 
    }

}

?>