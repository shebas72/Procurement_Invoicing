<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


function __construct() {
parent::__construct();

// Load url helper
        $this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();
        
        //load the Login Model
        $this->load->model('UserLogin', 'login');
}

	public function index()
	{
        
		$logged_in = $this->session->userdata('logged_in');
        $name = $this->session->userdata('name');
        if($logged_in){
          

            //if yes redirect to welcome page
            redirect(base_url().'app/dashboard');
        }
		
	 $data['title'] = 'Login';
		$this->load->view('app/login', $data);

	}

	    public function doLogin() {
        //get the input fields from login form
       
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = sha1($this->input->post('password'));
       
        //send the email pass to query if the user is present or not
        $check_login = $this->login->checkLogin($email, $password);
        //if the result is query result is 1 then valid user
        if ($check_login) {
        	// $this->data['name'] = $this->session->userdata('name');



            //if yes then set the session 'loggin_in' as true
         // $this->session->set_userdata('logged_in', true);
         $this->session->set_userdata('logged_in', $check_login);
       
         // $this->session->set_userdata('email');

 // $session_user = array(
 //    'id' => $row->id,
 //    'name' => $row->name
 //     );
 //   $this->session->set_userdata($session_user);

 //         $this->session->set_userdata('name');
// $this->session->set_userdata('name',$checkLogin['id']);
            redirect(base_url().'app/dashboard');
        } else {
            //if no then set the session 'logged_in' as false
            $this->session->set_userdata('logged_in', false);
            
            //and redirect to login page with flashdata invalid msg
            $this->session->set_flashdata('msg', 'Username / Password Invalid');
            redirect(base_url().'app/login');            
        }
    }

 // public function getcurrentuser() {
 //         $cname= $this->session->set_userdata('name');
 //    }

        public function logout() {
        //unset the logged_in session and redirect to login page
        $this->session->unset_userdata('logged_in');
        redirect(base_url().'app/login');
    }
}
