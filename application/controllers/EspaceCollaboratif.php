<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EspaceCollaboratif
 *
 * @author alexandre
 */
class EspaceCollaboratif extends CI_Controller {
    
     public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
    }

    public function index() {


        $this->load->view('header');
        $this->load->view('Main/espaceCollaboratif');
        $this->load->view('footer');
    }

}
