<?php

class Articles_Model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_articles() {

        $query = $this->db->get('Articles');
        return $query->result_array();
    }
}
