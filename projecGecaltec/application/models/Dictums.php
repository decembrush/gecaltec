<?php

Class Dictums extends CI_Model {

    //put your code here

    function listDocumentsDictum() {
        $this->db->select('documents.Id, NumberDictum, NumberSheet, Year, Description,'
                . ' documents.DateCreate, documentsDetails.Name, Path, IdDocument');
        $this->db->from('documents');
        $this->db->join('documentsDetails', "documents.Id = documentsDetails.IdDocument");
        //$this -> db -> limit(1);

        $query = $this->db->get();

        //if($query -> num_rows() > 0)
        //{
        return $query->result();
        //}        
    }

    function findDocumentsDictumByYerAndNumberDictum($numberDictum, $year) {
        $this->db->select('documents.Id, NumberDictum, NumberSheet, Year, Description');
        $this->db->from('documents');
        $this->db->where("Year", $year);
        $this->db->where("NumberDictum", $numberDictum);
        //$this->db->join('documentsdetails', "documents.Id = documentsdetails.IdDocument");
        //$this -> db -> limit(1);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    function findDocumentsDictumByYerAndNumberSheet($numberSheet, $year) {
        $this->db->select('documents.Id, NumberDictum, NumberSheet, Year, Description');
        $this->db->from('documents');
        $this->db->where("Year", $year);
        $this->db->where("NumberSheet", $numberSheet);
        //$this->db->join('documentsdetails', "documents.Id = documentsdetails.IdDocument");
        //$this -> db -> limit(1);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    function findDocDictumByNumberFull($numberFull) {
        $this->db->select('documents.Id, NumberDictum, NumberSheet, Year, Description,'
                . ' documents.DateCreate, documentsDetails.Name, Path, IdDocument');
        $this->db->from('documents');
        $this->db->join('documentsDetails', "documents.Id = documentsDetails.IdDocument");
        
        $this->db->where("NumberFull", $numberFull);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->first_row();
        } else {
            return false;
        }
    }
    
    function findDocDictumByFullNumberAndNumerSheet($numberFull, $numberSheet) {
        $this->db->select('documents.Id, NumberDictum, NumberSheet, Year, Description, NumberFull,'
                . ' documents.DateCreate, documentsDetails.Name, Path, IdDocument');
        $this->db->from('documents');
        $this->db->join('documentsDetails', "documents.Id = documentsDetails.IdDocument");
        $this->db->where("NumberFull", $numberFull);
        $this->db->where("NumberSheet", $numberSheet);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->first_row();
        } else {
            return false;
        }
    }

    function insertDictum($data) {

        $this->db->insert('documents', $data);
        if ($this->db->affected_rows()) {
            $insert_id = $this->db->insert_id();

            return $insert_id;
        } else {
            return false;
        }
    }

    function insertDictumDetail($data) {

        $this->db->insert('documentsDetails', $data);
        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }

    function deleteDictum($idDuctum) {
        $this->db->where('Id', $idDuctum);
        $this->db->delete('documents');

        $this->db->where('IdDocument', $idDuctum);
        $this->db->delete('documentsdetails');

        return true;
    }

}

?>