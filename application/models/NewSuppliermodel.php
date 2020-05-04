    <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class NewSuppliermodel extends CI_Model{
    /*
     * Get suppliers
     */
    function getRows($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('suppliers', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('suppliers');
            return $query->result_array();
        }
    }
    
    /*
     * Insert post
     */
    public function insert($data = array()) {
        $insert = $this->db->insert('suppliers', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
    /*
     * Update post
     */
    public function update($data, $id) {
        if(!empty($data) && !empty($id)){
            $update = $this->db->update('suppliers', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }
    
    /*
     * Delete post
     */
    public function delete($id){
        $delete = $this->db->delete('suppliers',array('id'=>$id));
        return $delete?true:false;
    }
}


   