<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();
 }
 
 public function add_user($data)
 {
  
  $insert = $this->db->insert('system_user',$data);
  return $insert;
 }
 function check_if_username_exists($username){

    $this->db->where('username',$username);
    $result = $this->db->get('system_user');

    if($result->num_rows()>0){
      return FALSE; //username taken
    } else {
      return TRUE; //username reject
    }
  }

  
  function fetch_data(){
    $this->db->where('status','1');
    $query = $this->db->get('system_user');
    return $query->result();
  }
   
  
  
  function update(){
    $data= array(
      'username'   => $this->input->post('username'),
      'password'   => $this->input->post('password')
    );
    $id1 = $this->input->post('idnumber');
    $this->db->set($data);
    $this->db->where('id', $id1);
    $this->db->update('system_user', $data);
  }

  function delete(){
    $id1 = $this->input->post('idnumber');
    if($this->db->delete('system_user','id ='.$id1)){
      return TRUE;
    }
  }
  function check_username_exists($uname){

    $this->db->where('username',$uname);
    $result = $this->db->get('system_user');

    if($result->num_rows()>0){
      return TRUE;
    } else {
      return FALSE;
    }
  }
}
?>