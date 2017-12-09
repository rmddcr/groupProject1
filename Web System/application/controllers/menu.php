<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Menu extends CI_Controller{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('menu_model');
 }
  public function menu_add()
 {
  $this->load->library('form_validation');
  // field name, error message, validation rules
  $this->form_validation->set_rules('category', 'Name','trim|required|max_length[20]');
  $this->form_validation->set_rules('itemname', 'Last Name','trim|required|max_length[50]');
  $this->form_validation->set_rules('regularprice', 'Email Address','required|max_length[10]|numeric');
  $this->form_validation->set_rules('largeprice', 'Username','|max_length[10]|numeric');
  
  if($this->form_validation->run() == FALSE)
  {
   $this->error500();
  }
  else
  {
   $this->load->model("user_model");
   $data["fetch_data"]=$this->user_model->fetch_data();
   $this->load->model("menu_model");
   $this->menu_model->add_menu();
   $data["fetch_menu_data"]=$this->menu_model->fetch_menu_data();
   $this->load->view('manager',$data);
        
   
  }
 }
 public function error500(){
  $this->load->view('500error');
 }
 public function vie(){
  $this->load->view('manager#model-default');
 }

}