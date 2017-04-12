<?php

class Main extends CI_Controller {

    public function index() {

        $data['mnom'] = Array("", "Janvier", "Février", "Mars"
            , "Avril", "Mai", "Juin", "Juillet", "Août"
            , "Septembre", "Octobre", "Novembre", "Décembre");

// on verifie sur des variables ont été envoyé via formulaire
        if (!isset($_REQUEST["m"]))
            $data['m'] = date("n");
        else
            $data['m'] = $_REQUEST["m"];
        if (!isset($_REQUEST["a"]))
            $data['a'] = date("Y");
        else
            $data['a'] = $_REQUEST["a"];

// On instancie une variable avec la date du premier jour du mois de cette année
        $data['dayone'] = date("w", mktime(1, 1, 1, $data['m'], 1, $data['a']));
        if ($data['dayone'] == 0)
            $data['dayone'] = 7;

// On determine les limites de l'agenda (en année)
        $data['aplus'] = $data['a'] + 10;
        $data['amoins'] = $data['a'] - 10;

        $data['jours_in_month'] = cal_days_in_month(CAL_GREGORIAN, $data['m'], $data['a']);
// Calcul du nombe de semaine soit nb_jour ds le mois diviser par 7
// Et on arrondit au superieur
        $data['nb_semaine'] = ceil($data['jours_in_month'] / 7);
        $data['jours_a_afficher'] = $data['nb_semaine'] * 7;

        $this->load->view('header');
        $this->load->view('Main/index', $data);
        $this->load->view('footer');
    }

}
