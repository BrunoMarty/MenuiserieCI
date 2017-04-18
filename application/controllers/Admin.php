<?php

class Admin extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Model');
        $this->load->helper('url_helper');
    }

    public function index() {
        
        $data['titre']= "interface admin";
        
        $this->load->view('header');
        $this->load->view('Admin/index', $data);
        $this->load->view('footer');
        
    }
    
    public function getHoraire(){
        
        $data['horaires'] = $this->Admin_Model->get_horaire();
        if (empty($data['horaires'])) {
            show_404();
        }
        
        if($_POST){
            $this->Admin_Model->set_horaire($data['horaires']);
            
        }
        
        $data['titre']= "Gestion Horaire";
        
        $this->load->view('header');
        $this->load->view('Admin/horaire', $data);
        $this->load->view('footer');
    }
}

