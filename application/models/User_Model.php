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

    public function add_account($choix) {
        if ($choix == 1) {
            $this->load->helper('url');
            if (($this->input->post('nom') == "") || ($this->input->post('prenom') == "") || ($this->input->post('email') == "") || ($this->input->post('password') == "") || ($this->input->post('adresse') == "") || ($this->input->post('assurance') == "") || ($this->input->post('tel') == "") || ($this->input->post('date_naissance') == "")) {
                return false;
            } else {
                $data = array(
                    'nom' => $this->input->post('nom'),
                    'prenom' => $this->input->post('prenom'),
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                    'adresse' => $this->input->post('adresse'),
                    'fk_ville' => $this->input->post(1),
                    'assurance' => $this->input->post('assurance'),
                    'tel' => $this->input->post('tel'),
                    'date_naissance' => $this->input->post('naissance'),
                    'fk_usager' => 1,
                    'fk_abonnement' => 1,
                    'formation' => false,
                );
                return $this->db->insert('Particulier', $data);
            }
        }
        elseif($choix == 2){
            
        }
    }

}
