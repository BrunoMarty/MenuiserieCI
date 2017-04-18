<?php

class User extends CI_Controller {

    public function __construct() {
        
        parent::__construct();
        $this->load->model('User_Model');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['title'] = "Connexion";
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if($_POST){
            $_SESSION['user']= $this->User_Model->verif_connect($_POST['password'],$_POST['email']);
        }
            $this->load->view('header');
            $this->load->view('User/index', $data);
            $this->load->view('footer');

    }

}
