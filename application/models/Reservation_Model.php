<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reservation_Model
 *
 * @author lameliss
 */
class Reservation_Model extends CI_Model {

    // constructeur qui fait la connexion à la base de données
    public function __construct() {
        $this->load->database();
    }

    public function getAll() {
        $sql = 'SELECT * FROM Reservation';
        return $this->db->query($sql)->result_array();
    }

    public function getById($id) {

        $limit = 1;
        $offset = 0;
        $requete = $this->db->get_where('Reservation', array('id' => $id), $limit, $offset);
        return $this->db->query($requete)->result_array();
    }  

    public function getByDate($date) {
        $requete = $this->db->get_where('Reservation', array('date' => $date));
        return $requete->result_array();
    }

    public function getMachines() {

        $query = $this->db->get('Machine');
        return $query->result_array();
    }

    public function getHoraires() {

        $query = $this->db->get('Horaire');
        return $query->result_array();
    }
    
    public function getOutils($machine) {
        $requete = $this->db->get_where('Outil', array('fk_machine' => $machine));
        if($requete -> result_array()==null)
            return "false";
        return $requete->result_array();
    }

    public function getMachinesDispo($date, $deb, $fin) {
        $sql = "SELECT DISTINCT * 
                FROM Machine M 
                WHERE M.id NOT IN (SELECT `fk_machine`
                                   FROM Reservation
				   WHERE  date = '$date'
			           AND `heure_debut` BETWEEN '$deb' AND '$fin' 
                                   OR `heure_fin` BETWEEN '$deb' AND '$fin'
                                   AND date = '$date')";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function addReservation($client){
        $data = array(
            'fk_particulier' => $client,
            // a finir pour les pros
            'debut' => $deb,
            'fin' => $fin,
            'date' => $date,
            'fk_machine' => $machine          
        );
    }

}

