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
class Dictum extends CI_Controller {

    //put your code here
    function __construct() {
        parent::__construct();
        $this->load->model('Dictums', '', TRUE);
    }

    function index() {
        if ($this->session->userdata('logged_in')) {
            //print_r($this->session->all_userdata());

            $content = $this->load->view('Dictum/dictum_view', "", true);

            // Pass to the master view
            $this->load->view('Layout/masterAdmin_view', array('content' => $content, 'pageTitle' => 'Dictamenes'));
            
            //$this->load->view('item/show', array('item' => $item), true);
        } else {
            redirect(base_url());
        }
    }

    function listDictum() {
        $result = $this->Dictums->listDocumentsDictum();
        $this->output
                ->set_content_type("application/json")
                ->set_output(json_encode(array('status' => true, 'List' => $result)));
    }
    
    function verifyDictum(){
        
        $numberFull = $this->input->post("inp_no_dictamen");        
        if ($this->Dictums->findDocDictumByNumberFull($numberFull)) {
            
            $this->output
                    ->set_content_type("application/json")
                    ->set_output(json_encode(array('status' => true, 
                        'message' => "El numero de dictamen es correcto, por favor ingrese el numero de hoja.")));
            
        } else {
            $this->output
                    ->set_content_type("application/json")
                    ->set_output(json_encode(array('status' => false, 
                        'message' => "No se encontraron resultados por el numero de dictamen ingresado.")));
            return;
        }      
    }
    
    function verifyDictumAndSheet(){
        
        $numberFull = $this->input->post("inp_no_dictamen");  
        $numberSheet = $this->input->post("inp_no_hoja");
        
        $result = $this->Dictums->findDocDictumByFullNumberAndNumerSheet($numberFull, $numberSheet);
        if ($result) {
            
            $this->output
                    ->set_content_type("application/json")
                    ->set_output(json_encode(array('status' => true, 
                        'data' => $result)));
            
        } else {
            $this->output
                    ->set_content_type("application/json")
                    ->set_output(json_encode(array('status' => false, 
                        'message' => "No se encontraron resultados por el numero de hoja ingresado.")));
            return;
        }      
    }
    
    function insertDocument() {

        if (!($this->Dictums->findDocumentsDictumByYerAndNumberDictum($this->input->post("nDic_iden"),$this->input->post("nYear")))) {
            $this->output
                    ->set_content_type("application/json")
                    ->set_output(json_encode(array('status' => false, 'message' => "El número de dictamen ingresado ya existe para el presente año, por favor, verifique")));
            return;
        }
        
        if (!($this->Dictums->findDocumentsDictumByYerAndNumberSheet($this->input->post("nDic_cod"),$this->input->post("nYear")))) {
            $this->output
                    ->set_content_type("application/json")
                    ->set_output(json_encode(array('status' => false, 'message' => "El número de hoja ingresado ya existe para el presente año, por favor, verifique")));
            return;
        }
        
        
        $data = array(
            'NumberDictum' => $this->input->post("nDic_iden"),
            'NumberSheet' => $this->input->post("nDic_cod"),
            'Year' => $this->input->post("nYear"),
            'Description' => $this->input->post("nDic_decrip"),
            'DateCreate' => date("Y-m-d H:i:s"),
            'NumberFull' => $this->input->post("nDic_iden")."-".$this->input->post("nYear"),
        );

        $resultSave = $this->Dictums->insertDictum($data);
        if ($resultSave) {
            $structure = './document';

            $config['upload_path'] = $structure . "/";
            $config['allowed_types'] = 'pdf';
            $config['remove_spaces'] = TRUE;
            $config['file_name'] = $this->input->post("nDic_iden") . "-" . $this->input->post("nYear") . "-" . $this->input->post("nDic_cod");

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('file_2')) {

                $trozos = explode(".", $_FILES["file_2"]["name"]);
                $extension = end($trozos);

                $dataDetails = array(
                    'Name' => $config['file_name'] . "." . $extension,
                    'Path' => "/document/" . $config['file_name'] . "." . $extension,
                    'IdDocument' => $resultSave,
                    'DateCreate' => date("Y-m-d H:i:s")
                );
                $this->Dictums->insertDictumDetail($dataDetails);


                $this->output
                        ->set_content_type("application/json")
                        ->set_output(json_encode(array('status' => true, 'message' => "El dictamen se ha creado correctamente.")));
            } else {
                $this->output
                        ->set_content_type("application/json")
                        ->set_output(json_encode(array('status' => false, 'message' => "El dictamen no fue creado, por favor verifique.")));
            }
        } else {
            $this->output
                    ->set_content_type("application/json")
                    ->set_output(json_encode(array('status' => false, 'message' => "El dictamen no fue creado, por favor verifique.")));
        }
    }

    function deleteDictumById() {

        
        $id = $_POST["id"];
        
        if ($this->Dictums->deleteDictum($id)) {
            $this->output
                        ->set_content_type("application/json")
                        ->set_output(json_encode(array('status' => true, 'message' => "El dictamen se ha eliminado correctamente.")));
        }else{
            $this->output
                    ->set_content_type("application/json")
                    ->set_output(json_encode(array('status' => false, 'message' => "El dictamen no fue eliminado, intente de nuevo.")));
        }
    }

}
