<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
 public function __construct()
 {
  parent::__construct(); 
  $this->load->helper('url'); 
  $this->load->database();
 }
 public function index()
 {
  if($this->session->userdata('logged') == 1){
      $this->load->view('index');
    }
    else{
      redirect(base_url().'user/test'); 
    }
  
 }
 public function dash(){
  
  if($this->session->userdata('logged') == 1){
      $this->load->model("user_model");
      $data["fetch_data"]=$this->user_model->fetch_data();
      $this->load->model('Staff_model');
      $data["fetch_ID"]=$this->Staff_model->getID();
      $this->load->view('system_user',$data);
    }
    else{
      redirect(base_url().'user/test'); 
    }
  
 }

 
 public function registration()
 {
  $this->load->library('form_validation');
  // field name, error message, validation rules
  //$this->form_validation->set_rules('userID', 'ID','required|max_length[13]');
  $this->form_validation->set_rules('username', 'Username','trim|required|min_length[4]');
  $this->form_validation->set_rules('password', 'Password','trim|required|min_length[4]|max_length[32]');
  $this->form_validation->set_rules('confirmpassword', 'Password Confirmation','trim|required|matches[password]');

  if($this->form_validation->run() == FALSE)
  {
   $this->load->view('error404');
  }
  else
  {
    $data= array(
      'id' => $this->input->post('userID'),
      'username'   => $this->input->post('username'),
      'password'   => $this->input->post('password')
    );
    $this->load->model("user_model");
    $this->load->model("Staff_model");
    $this->user_model->add_user($data);
    $data["fetch_data"]=$this->user_model->fetch_data();
    $data["fetch_ID"]=$this->Staff_model->getID();
    $this->load->view('system_user',$data);
  }
 }
 function check_username($requested_username){

    $this->load->model('user_model');
    $username_available = $this->user_model->check_if_username_exists($requested_username);
    if($username_available){
      return TRUE;
    } else {
      return FALSE;
    }
  }


function update()
{
  $this->load->library('form_validation');
  // field name, error message, validation rules
  $this->form_validation->set_rules('username', 'Username','required|max_length[13]');
  $this->form_validation->set_rules('password', 'Password','trim|required|min_length[4]|max_length[32]');
  $this->form_validation->set_rules('confirmpassword', 'Password Confirmation','trim|required|matches[password]');

  if($this->form_validation->run() == FALSE)
  {
   $this->load->view('error404');
  }
  else{
    $this->load->model('user_model');
    $this->user_model->update();
    redirect(base_url().'user/dash');
    
  }
}


  function delete(){
    $this->load->model('user_model');
    $this->user_model->delete();
    redirect(base_url().'user');
  }
  
  function checks_username($requested_name){

    $this->load->model('user_model');

    $name_available = $this->user_model->check_username_exists($requested_name);

    if($name_available){
      return TRUE;
    } else {
      return FALSE;
    }
  }
  function man(){
    $this->load->view('staff');
  }
  function test(){
    $this->load->view('login');
  }
  function test1(){
    $this->load->view('food_cat');
  }
}
?>