<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Staff_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();
 }
 public function add_user($data){
  
  $insert = $this->db->insert('staff',$data);
  //return $insert;
 }
  function fetch_data(){
    $query = $this->db->get('staff');
    return $query->result();
  }
  function delete1(){
    $id1 = $this->input->post('idnumber');
    if($this->db->delete('staff','id ='.$id1)){
      return TRUE;
    }
    }

    function edit($id){
        $this->db->select('*');
        $this->db->from('staff');
        $this->db->where('id',$id);
        $query=$this->db->get();
        return $query->result();
    }
  
  
  function update($data, $id1){  
    $this->db->set($data);
    $this->db->where('id', $id1);
    $this->db->update('staff', $data);
  }

  function check_ID_exists($requested_ID){
    $this->db->where('ID',$requested_ID);
    $result = $this->db->get('staff');

      if($result->num_rows()>0){
        return FALSE;
      } else {
        return TRUE;
      }
    }
    function getID(){
      $this->db->select('ID');
      $this->db->from('staff');
      $query = $this->db->get();
      return $query->result();
    }

  }
  
  

?>