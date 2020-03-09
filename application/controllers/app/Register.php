<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {


function __construct() {
parent::__construct();

// Load url helper
$this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();
        $this->load->model('UserRegister', 'registration');
}

	public function index()
	{
	if ($this->session->userdata('logged_in')) {
            redirect(base_url() . 'app/dashboard');
        }	
	 $data['title'] = 'Registration';
		$this->load->view('app/registration', $data);

	}


    public function doRegister() {
        //set the form validation here
        $this->form_validation->set_rules('name', 'name', 'required|min_length[3]');
        $this->form_validation->set_message('is_unique', 'Email already exists.');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[4]');
        //if the above validation fails, redirect to register page
        //with vaildation_errors();
        if ($this->form_validation->run() == FALSE) {
            //set the validation errors in flashdata (one time session)
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url() . 'app/registration');
        } else {
            //if not get the input values
            $name = $this->input->post('name');
            $company = $this->input->post('company');
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');
            $password = sha1($this->input->post('password'));
            $data = [
                'name' => $name, 'company' => $company, 'phone' => $phone, 'email' => $email, 'password' => $password, 'date_time' => date('Y-m-d H:i:s')
            ];
            //pass the input values to the register model
            $insert_data = $this->registration->add_user($data);
            //if data inserted then set the success message and redirect to login page
            if ($insert_data) {
                $this->session->set_flashdata('msg', 'Successfully Register, Login now!');
                redirect(base_url() . 'app/login');
            }
        }
    }
}