<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();
 }
 /*function login($email,$password)
 {
  $this->db->where("email",$email);
  $this->db->where("password",$password);

  $query=$this->db->get("user");
  if($query->num_rows()>0)
  {
   foreach($query->result() as $rows)
   {
    //add all data to session
    $newdata = array(
      'user_id'  => $rows->id,
      'user_name'  => $rows->username,
      'user_email'    => $rows->email,
      'logged_in'  => TRUE,
    );
   }
   $this->session->set_userdata($newdata);
   return true;
  }
  return false;
 }*/
 public function add_user()
 {
  $data= array(
      'firstname' => $this->input->post('firstname'),
      'lastname'  => $this->input->post('lastname'),
      'email'    => $this->input->post('email'),
      'username'   => $this->input->post('username'),
      'type'  => $this->input->post('type'),
      'password'   => md5($this->input->post('password'))
  );
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

  function check_if_email_exists($email){

    $this->db->where('email',$email);
    $result = $this->db->get('system_user');

    if($result->num_rows()>0){
      return FALSE;
    } else {
      return TRUE;
    }
  }
  function fetch_data(){
    $query=$this->db->query("SELECT * FROM system_user WHERE status=1 ORDER BY id DESC ");
    return $query;
  }
}
?>