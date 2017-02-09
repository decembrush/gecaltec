<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dictum
 *
 * @author Administrador
 */
class Account extends CI_Controller {
    //put your code here
    function __construct()
    {
      parent::__construct();
      $this->load->model('user','',TRUE);
    }
    
    function index(){
        
        $data = $this->session->userdata('logged_in');
        if($data)
        {           
            
            $content = $this->load->view('Account/account_view', $data, true);

            // Pass to the master view
            $this->load->view('Layout/masterAdmin_view', array('content' => $content, 'pageTitle' => 'Cuenta'));
            
            //$this->load->view('item/show', array('item' => $item), true);
        }else{
            redirect(base_url());
        }
    }
    
    function updateAccountUser(){
        $data = $this->session->userdata('logged_in');
        if($data)
        {     
            $passwordOldForm = $this->input->post("passwordUserOld");
            $result = $this->user->findUserById($data["Id"]);
            
            if ($passwordOldForm != "") {                
            
                if (md5($passwordOldForm) != $result->Password)  {   
                    $this->output
                                ->set_content_type("application/json")
                                ->set_output(json_encode(array('message' => 'Contraseña actual no coincide.')));
                    return false;
                }else{
                    $dataUpload = array(
                        'User' =>$this->input->post("nameUser"),
                        'Mail' =>$this->input->post("mailUser"),
                        'Password' => md5($this->input->post("passwordUserNew"))
                    );
                    $this->user->updateUserByIduser($data["Id"], $dataUpload);
                    
                }
            }else{
                $dataUpload = array(
                    'User' =>$this->input->post("nameUser"),
                    'Mail' =>$this->input->post("mailUser")                
                );
                $this->user->updateUserByIduser($data["Id"], $dataUpload);
            }
                        

            $this->output
                        ->set_content_type("application/json")
                        ->set_output(json_encode(array('message' => 'Se han actualizado correctamente los datos.')));
            
            
        }else{
            redirect(base_url());
        }       
        
    }
}
