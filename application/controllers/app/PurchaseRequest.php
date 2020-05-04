<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PurchaseRequest extends CI_Controller {

    public function index() {


$this->load->library('session');

        //restrict users to go to home if not logged in
        if($this->session->userdata('logged_in')){
             $this->load->view('app/header');
             $this->load->view('app/pur_req');
             $this->load->view('app/footer');
        }
        else{
            redirect('app/login');
        }


    }

}