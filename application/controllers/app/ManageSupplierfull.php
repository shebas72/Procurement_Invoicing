<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ManageSupplierfull extends CI_Controller {
   function __construct() {
parent::__construct();

    $this->load->helper('url','html');
        $this->load->library(['form_validation','session']);
        $this->load->database();
        $this->load->model('NewSuppliermodel');
        
}
    public function index() {

 $query = $this->NewSuppliermodel->displayrecordsbyid($sid);
  $data['suppliers'] = null;
  if($query){
   $data['suppliers'] =  $query;
  }


        //restrict users to go to home if not logged in
        if($this->session->userdata('logged_in')){
           
         
             $this->load->view('app/header');
             $this->load->view('app/full',$data);
             $this->load->view('app/footer');
        }
        else{
            redirect('app/login');
        }



    }
  public function updatesupplier_old($sid) {
   
  // $id = $this->uri->segment(3);

$result['data']=$this->NewSuppliermodel->displayrecordsById($sid);

   if($this->session->userdata('logged_in')){
           
         
             $this->load->view('app/header');
             $this->load->view('app/full',$result);
             $this->load->view('app/footer');

            if($this->input->post('update'))
    {

    $name=$this->input->post('name');
    $email=$this->input->post('email');
    $phone=$this->input->post('phone');
    $company=$this->input->post('company');
    $address=$this->input->post('address');
    $city=$this->input->post('city');
    $region=$this->input->post('region');
    $country=$this->input->post('country');
    $postbox=$this->input->post('postbox');
    // $result['data']=$this->NewSuppliermodel->updaterecords($name,$email,$phone,$company,$address,$city,$region,$country,$postbox);
    $result['data']=$this->NewSuppliermodel->updaterecords($sid);
    // redirect('app/ManageSupplierfull');
    $this->session->set_flashdata('msg', 'Updated Successfully!');
    }



        }
        else{
            redirect('app/login');
        }

         
 
    }


public function updatesupplier22222($sid) {
   
  // $sid = $this->uri->segment(3);
$result['data']=$this->NewSuppliermodel->displayrecordsById($sid);
  if($this->input->post('update'))
    {

    $name=$this->input->post('name');
    $email=$this->input->post('email');
    $phone=$this->input->post('phone');
    $company=$this->input->post('company');
    $address=$this->input->post('address');
    $city=$this->input->post('city');
    $region=$this->input->post('region');
    $country=$this->input->post('country');
    $postbox=$this->input->post('postbox');
    // $result['data']=$this->NewSuppliermodel->updaterecords($name,$email,$phone,$company,$address,$city,$region,$country,$postbox);
    $result['data']=$this->NewSuppliermodel->updaterecords($sid);
    // $this->NewSuppliermodel->updaterecords($sid);
    // redirect('app/ManageSupplierfull');
    $this->session->set_flashdata('msg', 'Updated Successfully!');
    }

// $result['data']=$this->NewSuppliermodel->displayrecordsById($sid);

   if($this->session->userdata('logged_in')){
           
         
             $this->load->view('app/header');
             $this->load->view('app/full',$result);
             $this->load->view('app/footer');

            



        }
        
         
 
    }

    //  public function updatesupplier($sid)
    // {
    //   $result['data']=$this->NewSuppliermodel->displayrecordsById($sid);
    //     $sid = $this->uri->segment(3);
    //     $data = array();
 
    //     if (empty($sid))
    //     { 
    //      show_404();
    //     }else{
    //       $result['data'] = $this->NewSuppliermodel->updaterecords($sid);
    //        $this->load->view('app/header');
    //          $this->load->view('app/full',$result);
    //          $this->load->view('app/footer');
    //     }
    // }
   
  public function updatesupplier($sid) {
 // $query = $this->NewSuppliermodel->displayrecordsbyid($sid);
 //  $data['suppliers'] = null;
 //  if($query){
 //   $data['suppliers'] =  $query;
 //  }
     // $sid = $this->uri->segment(3);
     // $result['data']=$this->NewSuppliermodel->updaterecords($get['sid']);
    $result['data']=$this->NewSuppliermodel->displayrecordsById($sid);
  if($this->input->post('update'))
    {

    $name=$this->input->post('name');
    $email=$this->input->post('email');
    $phone=$this->input->post('phone');
    $company=$this->input->post('company');
    $address=$this->input->post('address');
    $city=$this->input->post('city');
    $region=$this->input->post('region');
    $country=$this->input->post('country');
    $postbox=$this->input->post('postbox');
    // $result['data']=$this->NewSuppliermodel->updaterecords($name,$email,$phone,$company,$address,$city,$region,$country,$postbox);
    // $result['data']=$this->NewSuppliermodel->updaterecords($sid);
   $result['data']=$this->NewSuppliermodel->updaterecords($sid);
    // redirect('app/ManageSupplierfull');
    
    }
    $this->load->view('app/header');
           $this->load->view('app/full',$result);
             $this->load->view('app/footer');
    $this->session->set_flashdata('msg', 'Updated Successfully!');
    // print_r($result['data']);
// redirect('app/managesupplier');
// print_r($result['data']);
  }


}