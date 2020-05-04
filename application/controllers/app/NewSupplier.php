<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class NewSupplier extends CI_Controller {

    function __construct() {
parent::__construct();

    $this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();
        $this->load->model('NewSuppliermodel', 'newsupplier');
}
    public function index() {


$this->load->library('session');

        //restrict users to go to home if not logged in
        if($this->session->userdata('logged_in')){
             $this->load->view('app/header');
             $this->load->view('app/newsupplier');
             $this->load->view('app/footer');
        }
        else{
            redirect('app/login');
        }


    }



    public function addSupplier() {
        //set the form validation here
        $this->form_validation->set_rules('name', 'name', 'required|min_length[3]');
        $this->form_validation->set_message('is_unique', 'Email already exists.');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[suppliers.email]');
     
        //if the above validation fails, redirect to register page
        //with vaildation_errors();
        if ($this->form_validation->run() == FALSE) {
            //set the validation errors in flashdata (one time session)
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url() . 'app/newsupplier');
        } else {
            //if not get the input values
            $sid = $this->input->post('sid');
            $name = $this->input->post('name');
            $company = $this->input->post('company');
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');
            $address = $this->input->post('address');
            $city = $this->input->post('city');
            $region = $this->input->post('region');
            $country = $this->input->post('country');
            $postbox = $this->input->post('postbox');
            
            $data = [
                'name' => $name, 'company' => $company, 'phone' => $phone, 'email' => $email, 'address' => $address, 'city' => $city, 'region' => $region, 'country' => $country, 'postbox' => $postbox, 
            ];
            //pass the input values to the register model
            $insert_data = $this->newsupplier->add_user($data);
            //if data inserted then set the success message and redirect to login page
            if ($insert_data) {
                $this->session->set_flashdata('msg', 'New Supplier Added Successfully!');
                redirect(base_url() . 'app/newsupplier');
            }
        }
    }

}