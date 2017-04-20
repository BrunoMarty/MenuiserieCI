<?php

class User extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('User_Model');
        $this->load->helper('url_helper');
    }

    // fonction qui envoi sur la page de connexion
    public function index() {
        $data['title'] = "Connexion";
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        $data['email'] = array(
            'name' => 'email',
            'class' => 'user',
            'placeholder' => 'E-mail...',
        );
        $data['password'] = array(
            'name' => 'password',
            'class' => 'user',
            'placeholder' => 'Mot de passe ...',
        );
        //si la variable POST existe alors on instancie la variable de Session
        if ($_POST) {
            $response = $this->User_Model->verif_connect($_POST['password'], $_POST['email']);
            var_dump($response);
            if ($response !== 0) {
                $_SESSION['user'] = $this->User_Model->verif_connect($_POST['password'], $_POST['email']);
            }
        }
        $this->load->view('header');
        $this->load->view('User/index', $data);
        $this->load->view('footer');
    }

    public function create() {
        $data['title'] = "Inscription";
        $data['form']['particulier'] = $this->formAccount(1);
        $data['form']['professionnel'] = $this->formAccount(2);

        if (($_POST) && ($this->User_Model->add_account() != false)) {
            
        }
        $this->load->view('header');
        $this->load->view('User/create', $data);
        $this->load->view('footer');
    }

    public function disconnect() {
        unset($_SESSION);
        session_destroy();
        redirect('user', 'refresh');
    }

    // fonction qui génère un formulaire piarticulier ou pro en fonction du paramètre envoyé
    public function formAccount($choix) {
        $form['nom'] = array(
            'name' => 'nom',
            'class' => 'user',
            'placeholder' => 'Nom...',
        );
        $form['prenom'] = array(
            'name' => 'prenom',
            'class' => 'user',
            'placeholder' => 'Prenom ...',
        );
        $form['email'] = array(
            'name' => 'email',
            'class' => 'user',
            'placeholder' => 'E-mail...',
        );
        $form['password'] = array(
            'name' => 'password',
            'class' => 'user',
            'placeholder' => 'E-mail...',
        );
        $form['adresse'] = array(
            'name' => 'adresse',
            'class' => 'user',
            'placeholder' => 'Adresse ...',
        );
        $form['ville'] = array(
            'name' => 'ville',
            'class' => 'user',
            'placeholder' => 'Ville...',
        );
        $form['cp'] = array(
            'name' => 'cp',
            'class' => 'user',
            'placeholder' => 'Code Postal ...',
        );
        $form['tel'] = array(
            'name' => 'tel',
            'class' => 'user',
            'placeholder' => 'N°Tel...',
        );
        $form['abonnement'] = array(
            'name' => 'abonnement',
            'class' => 'user',
            'placeholder' => 'Abonnement...',
        );

        if ($choix == 1) {
            $form['assurance'] = array(
                'name' => 'assurance',
                'class' => 'user',
                'placeholder' => 'Assurance ...',
            );
            $form['naissance'] = array(
                'name' => 'naissance',
                'class' => 'user',
                'placeholder' => 'Date de naissance ...',
            );
            $form['type'] = array(
                'name' => 'type',
                'class' => 'user',
                'type' => 'hidden',
                'value' => 'particulier',
            );
        }
        if ($choix == 2) {
            $form['naissance'] = array(
                'name' => 'raison',
                'class' => 'user',
                'placeholder' => 'Raison sociale...',
            );
            $form['siret'] = array(
                'name' => 'siret',
                'class' => 'user',
                'placeholder' => 'N°Siret ...',
            );
            $form['creation'] = array(
                'name' => 'date_creation',
                'class' => 'user',
                'placeholder' => 'N°Siret ...',
            );
            $form['type'] = array(
                'name' => 'type',
                'class' => 'user',
                'type' => 'hidden',
                'value' => 'professionnel',
            );
        }
        return $form;
    }

}
