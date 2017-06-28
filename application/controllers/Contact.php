<?php


/**
 * Description of contact
 *
 * @author lameliss
 */
class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
    }

    public function index() {
         $data['title'] = "Contact";

        $this->load->view('header');
        $this->load->view('Main/contact',$data);
        $this->load->view('footer');
    }

}
