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
        $this->load->model('user', '', TRUE);
        $this->load->model('util');
    }

    function index() {        
        
        $this->load->view('RememberPassword/rememberpass_view');
    }

    function sendMail() {

        try {
            $mail = $this->input->post("recEmail");

            $result = $this->user->findUserByMail($mail);
            if ($result) {

                $password = $this->util->get_random_password();

                $data = array(
                    'Password' => md5($password)
                );

                $this->user->updateUserByIduser($result->Id, $data);
                $this->util->sendMailRememberpassword($mail, $password);

                $this->output
                        ->set_content_type("application/json")
                        ->set_output(json_encode(array('message' => 'La nueva contraseña fue enviada exitosamente.')));
            } else {
                $this->output
                        ->set_content_type("application/json")
                        ->set_output(json_encode(array('message' => 'No hay ninguna cuenta asociada con este correo electrónico..')));
            }
        } catch (Exception $exc) {
            $this->output
                    ->set_content_type("application/json")
                    ->set_output(json_encode(array('message' => $exc->getTraceAsString())));
        }
    }

}
