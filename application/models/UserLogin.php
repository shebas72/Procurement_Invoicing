    <?php
    class UserLogin extends CI_Model{
         public function checkLogin($email, $password) {
      $this->db->where('email', $email);
    $this->db->where('password', $password);
    $query = $this->db->get('users');
      if($query->num_rows())
      {
        $user = $query->row_array();
      //  print_r($user); die(); // remove die after testing
        return $user;
      }
  return false;

    }

  //   public function checkLogin($email, $password) {
  //   $this->db->where('email', $email);
  //   $this->db->where('password', $password);
  //   $query = $this->db->get('users');
  //   if($query->num_rows() == '1'){
  //       $data = $query->row_array();
  //       $this->session->set_userdata(array('name'=>$data['name'],'loggedin'=>'1'));         
  //   }
  //   return $query->num_rows();

  // }

    function getactivename(){
   $name = $this->session->userdata('name');

   $this->db->where('name', $name);
   $q = $this->db->get('users');
   return $q->row();
}


    
}