<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
 public function __construct()
 {
  parent::__construct();
  //$this->load->model('user_model');
 }
 public function index()
 {
  if($this->session->userdata('logged') == 1){
      $this->load->model("user_model");
      $data["fetch_data"]=$this->user_model->fetch_data();
      
      $this->load->model("menu_model");
      $data["fetch_menu_data"]=$this->menu_model->fetch_menu_data();
      $this->load->view('manager',$data);
    }
    else{
      redirect(base_url().'main/login'); 
    }
  
 }

 /*public function login()
 {
  $email=$this->input->post('email');
  $password=md5($this->input->post('pass'));

  $result=$this->user_model->login($email,$password);
  if($result) $this->welcome();
  else        $this->index();
 }
 public function thank()
 {
  $data['title']= 'Thank';
  $this->load->view('header_view',$data);
  $this->load->view('thank_view.php', $data);
  $this->load->view('footer_view',$data);
 }*/
 public function registration()
 {
  $this->load->library('form_validation');
  // field name, error message, validation rules
  $this->form_validation->set_rules('firstname', 'Name','trim|required');
  $this->form_validation->set_rules('lastname', 'Last Name','trim|required');
  $this->form_validation->set_rules('email', 'Email Address','trim|required|valid_email|max_length[50]');
  $this->form_validation->set_rules('username', 'Username','trim|required|min_length[4]');
  $this->form_validation->set_rules('password', 'Password','trim|required|min_length[4]|max_length[32]');
  $this->form_validation->set_rules('confirmpassword', 'Password Confirmation','trim|required|matches[password]');

  if($this->form_validation->run() == FALSE)
  {
   $this->error500();
  }
  else
  {
    $this->load->model("user_model");
   $this->user_model->add_user();
   $data["fetch_data"]=$this->user_model->fetch_data();
   $this->load->model("menu_model");
   $data["fetch_menu_data"]=$this->menu_model->fetch_menu_data();
   $this->load->view('manager',$data);
        
   //$this->thank();
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

  function check_email($requested_email){

    $this->load->model('user_model');

    $email_available = $this->user_model->check_if_email_exists($requested_email);

    if($email_available){
      return TRUE;
    } else {
      return FALSE;
    }
  }
 /*public function logout()
 {
  $newdata = array(
  'user_id'   =>'',
  'user_name'  =>'',
  'user_email'     => '',
  'logged_in' => FALSE,
  );
  $this->session->unset_userdata($newdata );
  $this->session->sess_destroy();
  $this->index();
 }*/
 public function error500(){
  $this->load->view('500error');
 }
 
}
?>