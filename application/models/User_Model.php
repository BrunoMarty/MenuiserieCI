<?php

class User_Model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    // fonction qui verifie en base de données si le duo email/password existe et renvoi le résultat
    public function verif_connect($password, $email) {

        $query = $this->db->get_where('Particulier', array('email' => $email, 'password' => md5($password)));
        if ($query != null) {
            return $query->row_array();
        }
        $query = $this->db->get_where('Professionnel', array('email' => $email, 'password' => $password));
        if ($query != null) {
            return $query->row_array();
        }
        return 0;
    }

}
