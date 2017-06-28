<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Partenaires
 *
 * @author lameliss
 */
class Partenaires extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Partenaires_Model');
        $this->load->helper('url_helper');
    }

    public function index() {

        $data['partenaires'] = $this->Partenaires_Model->get_partenaires();
        $this->load->view('header');
        $this->load->view('Main/partenaires',$data);
        $this->load->view('footer');
    }

}
