<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index() {
// $this->load->model('UserLogin', 'login');

// $data['userdata'] = $this->session->all_userdata();
//        $this->load->view('app/header', $data);
//         $this->load->view('app/dashboard');
//        $this->load->view('app/footer');


$this->load->library('session');
$this->load->model('UserLogin');
$this->load->model('UserRegister');
		//restrict users to go to home if not logged in
		if($this->session->userdata('logged_in')){
			 $this->load->view('app/header');
			 $this->load->view('app/dashboard');
			 $this->load->view('app/footer');
		}
		else{
			redirect('app/login');
		}


    }

}