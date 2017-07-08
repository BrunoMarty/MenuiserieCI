<?php

class Partenaires_Model extends CI_Model{

    public function __construct() {
        $this->load->database();
    }

    public function get_partenaires() {

        $query = $this->db->get('Partenaires');
        return $query->result_array();
    }
}
