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
class Dictum extends CI_Controller {
    //put your code here
    function __construct()
    {
      parent::__construct();
      //$this->load->model('user','',TRUE);
    }
    
    function index(){
        if($this->session->userdata('logged_in'))
        {
            //print_r($this->session->all_userdata());
            
            $content = $this->load->view('Dictum/dictum_view', "", true);

            // Pass to the master view
            $this->load->view('Layout/masterAdmin_view', array('content' => $content, 'pageTitle' => 'Dictamenes'));
            
            //$this->load->view('item/show', array('item' => $item), true);
        }else{
            redirect(base_url());
        }
        
        
        
    }
}
