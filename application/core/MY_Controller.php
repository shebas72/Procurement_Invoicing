<?php

class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();

      
        if (!$logged_in) {
            redirect(base_url() . 'app/login');
        }
    }

}