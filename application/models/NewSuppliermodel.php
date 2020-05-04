    <?php
    class NewSuppliermodel extends CI_Model{


       
        function add_user($name,$email,$phone,$company,$address,$sid,$city,$region,$country,$postbox)
  {
  $query="insert into suppliers values('','$name','$email','$company','$phone','$address','$city','$region','$country','$postbox')";
  $this->db->query($query);
  }


       function displayrecords()
	{
	  $this->db->select("*");
  $this->db->from('suppliers');
  $query = $this->db->get();
  return $query->result();
 }


 public function updaterecords344343()
    {
        $this->load->helper('url');
        // $sid = $this->input->post('sid');
 
        $data = array(
            // 'title' => $this->input->post('title'),
            // 'description' => $this->input->post('description')
          'name' =>$this->input->post('name'),
    'email' =>$this->input->post('email'),
    'phone' =>$this->input->post('phone'),
    'company' =>$this->input->post('company'),
    'address' =>$this->input->post('address'),
    'city' =>$this->input->post('city'),
    'region' =>$this->input->post('region'),
    'country' =>$this->input->post('country'),
    'postbox' =>$this->input->post('postbox')
        );
        
            $this->db->where('sid', $sid);
            $this->db->update('suppliers', $data);
        
    }
	
// public function updaterecords($name,$email,$phone,$company,$address,$sid,$city,$region,$country,$postbox)
public function updaterecords()
  {
    $this->load->helper('url');
        // $sid = $this->input->post('sid');
  $query=$this->db->query("update suppliers SET name='$name',email='$email',phone='$phone',company='$company',address='$address',city='$city',region='$region',country='$country',postbox='$postbox' where sid='".$sid."'");
   // return $query->result();
return $this->db->last_query();


  } 

 function displayrecordsById($sid)
  {
  $query=$this->db->query("select * from suppliers where sid='".$sid."'");
  return $query->result();
  }

    }