<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public function index() {
       $this->load->view('app/header');
        $this->load->view('app/dashboard');
       $this->load->view('app/footer');
    }

}