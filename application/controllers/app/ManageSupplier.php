<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ManageSupplier extends CI_Controller {
   function __construct() {
parent::__construct();

    $this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();
        $this->load->model('NewSuppliermodel');
        
}
    public function index() {

  $query = $this->NewSuppliermodel->displayrecords();
  $data['suppliers'] = null;
  if($query){
   $data['suppliers'] =  $query;
  }


        //restrict users to go to home if not logged in
        if($this->session->userdata('logged_in')){
           
         
             $this->load->view('app/header');
             $this->load->view('app/managesupplier',$data);
             $this->load->view('app/footer');
        }
        else{
            redirect('app/login');
        }


    }

  

  // function show(){
  //   $data=$this->NewSuppliermodel->displayrecords();
  //   echo json_encode($data);
  // }



}