<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
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
class RememberPassword extends CI_Controller {

    //put your code here
    function __construct() {
        parent::__construct();
        $this->load->model('User', '', TRUE);
        $this->load->model('Util');
    }

    function index() {        
        
        $this->load->view('RememberPassword/rememberpass_view');
    }

    function sendMail() {

        try {
            $mail = $this->input->post("recEmail");

            $result = $this->User->findUserByMail($mail);
            if ($result) {

                $password = $this->Util->get_random_password();

                $data = array(
                    'Password' => md5($password)
                );

                $this->User->updateUserByIduser($result->Id, $data);
                $this->Util->sendMailRememberpassword($mail, $password);

                $this->output
                        ->set_content_type("application/json")
                        ->set_output(json_encode(array('status'=> true, 'message' => 'La nueva contraseña fue enviada exitosamente.')));
            } else {
                $this->output
                        ->set_content_type("application/json")
                        ->set_output(json_encode(array('status'=> false,'message' => 'No hay ninguna cuenta asociada con este correo electrónico..')));
            }
        } catch (Exception $exc) {
            $this->output
                    ->set_content_type("application/json")
                    ->set_output(json_encode(array('status'=> false, 'message' => $exc->getTraceAsString())));
        }
    }

}
