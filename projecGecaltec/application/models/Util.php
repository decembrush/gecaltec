<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of util
 *
 * @author cdiaza
 */
class Util extends CI_Model {

    //put your code here

    function get_random_password($chars_min = 6, $chars_max = 8, $use_upper_case = false, $include_numbers = false, $include_special_chars = false) {
        $length = rand($chars_min, $chars_max);
        $selection = 'aeuoyibcdfghjklmnpqrstvwxz';
        if ($include_numbers) {
            $selection .= "1234567890";
        }
        if ($include_special_chars) {
            $selection .= "!@\"#$%&[]{}?|";
        }

        $password = "";
        for ($i = 0; $i < $length; $i++) {
            $current_letter = $use_upper_case ? (rand(0, 1) ? strtoupper($selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))];
            $password .= $current_letter;
        }

        return $password;
    }

    function sendMailRememberpassword($mail, $password) {

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'faulknerriver@gmail.com',
            'smtp_pass' => 'administrador123?',
            'mailtype' => 'html',
            'charset' => 'utf-8'
        );
        $this->load->library('email', $config);

        $this->email->set_newline("\r\n");

        // Set to, from, message, etc.

        $this->email->from('no-reply@gecaltec.com', 'Gecaltec');

        $list = array($mail);
        $this->email->to($list);
        $this->email->subject('Reseteo de contraseña');

        $data = array(
            'password' => $password
        );


        $body = $this->load->view('Layout/resetPassword', $data, TRUE);
        $this->email->message($body);

        //$this->email->message($email_body);

        $result = $this->email->send();
        //resetPassword
    }
    
     function sendMailRememberpassword2($mail, $password){
        
        $config = Array(
            'protocol' => 'mail',
            'smtp_host' => 'mail.gecaltec.com.co',
            'smtp_port' => 25,
            'smtp_user' => 'no-reply@gecaltec.com.co',
            'smtp_pass' => 'Febrero2016',
            'mailtype'  => 'html', 
            'charset'   => 'utf-8'
            
        );
        $this->load->library('email', $config);
        
        $this->email->set_newline("\r\n");

        // Set to, from, message, etc.
        
        $this->email->from('no-reply@gecaltec.com', 'Gecaltec');

        $list = array($mail);
        $this->email->to($list);
        $this->email->subject('Reseteo de contraseña');
        
        $data = array(
             'password'=> $password
        );
        
    
        $body = $this->load->view('Layout/resetPassword',$data,TRUE);
        $this->email->message($body);   
        
        //$this->email->message($email_body);
        
        $result = $this->email->send();


        //resetPassword
    }

}
