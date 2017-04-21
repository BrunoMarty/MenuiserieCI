<?php

class User_Model extends CI_Model {

    // construteur qui fait la connexion à la base de données
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
    // fonction d'ajout de compte Particulier ou Pro, en fonction du formulaire par lequel on arrive
    public function add_account() {
        // création de compte particulier
         $ville = $this->verif_ville($this->input->post('cp'), $this->input->post('ville'));
        if ($this->input->post('type') == "particulier") {
            $this->load->helper('url');
            if(($this->input->post('nom') == "")||($this->input->post('prenom') == "")||($this->input->post('email') == "")) {
                return false;
            } else {
                $data = array(
                    'nom' => $this->input->post('nom'),
                    'prenom' => $this->input->post('prenom'),
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                    'adresse' => $this->input->post('adresse'),
                   'fk_ville' =>  $ville['id'],
                    'assurance' => $this->input->post('assurance'),
                    'tel' => $this->input->post('tel'),
                    'date_naissance' => $this->input->post('naissance'),
                    'fk_usager' => 1,
                    'date_adhesion' => date('Y-m-d'),
                    'fk_abonnement' => 1,
                    'formation' => false,
                );
                // ajout en BDD
                return $this->db->insert('Particulier', $data);
            }
        }
        // création de compte professionnel
        elseif($this->input->post('type') == "professionnel"){
             if(($this->input->post('nom') == "")||($this->input->post('prenom') == "")||($this->input->post('email') == "")) {
                return false;
            } else {
               
                $data = array(
                    'nom' => $this->input->post('nom'),
                    'prenom' => $this->input->post('prenom'),
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                    'adresse' => $this->input->post('adresse'),
                    'fk_ville' =>  $ville['id'],
                    'fk_profession' => 1,
                    'raison_sociale' => $this->input->post('raison'),
                    'tel' => $this->input->post('tel'),
                    'date_creation' => $this->input->post('creation'),
                    'fk_abonnement' => 1,
                );
                // ajout en BDD
                return $this->db->insert('Professionnel', $data);
            }
        }
    }
    
    public function verif_ville($cp,$ville) {
        $query = $this->db->get_where('Ville', array('code_postal' => $cp, 'ville' => strtoupper($ville)));
        if($query->row_array()==NULL){
            $this->db->insert('Ville', array('code_postal'=> $cp,'ville'=> strtoupper($ville)));
            $query = $this->db->get_where('Ville', array('code_postal' => $cp, 'ville' => strtoupper($ville)));
        }
        return $query->row_array();
    }
}
