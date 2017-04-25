<?php

class Affichage_Model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_reservation($date, $heure = NULL) {
        if($heure == NULL){
             $query = $this->db->get_where('Reservation', array('date' => $date));
        }
        else{
        $sql = "SELECT * FROM Reservation WHERE date = '$date' AND heure_debut < $heure AND heure_fin > $heure";
        $query = $this->db->query($sql);
        }
        return $query->result_array();
    }

}
