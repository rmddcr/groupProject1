<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class staff extends CI_Controller{
 public function __construct()
 {
  parent::__construct();
  $this->load->model("Staff_model");
 }
 
 public function registration()
 {
  $this->load->library('form_validation');
  // field name, error message, validation rules
  $this->form_validation->set_rules('idtype', 'ID_Type','required');
  $this->form_validation->set_rules('idnumber', 'ID_Number','trim|required|numeric');
  $this->form_validation->set_rules('pic','Picture','required');
  $this->form_validation->set_rules('firstname', 'Name','trim|required|max_length[20]');
  $this->form_validation->set_rules('designation', 'Designation','trim|required');
  $this->form_validation->set_rules('fullname', 'Full_Name','trim|required|max_length[80]');
  $this->form_validation->set_rules('pnumber', 'Phone_number','required|numeric');
  $this->form_validation->set_rules('email','Email','required|valid_email');
  $this->form_validation->set_rules('dob','DOB','required');
  $this->form_validation->set_rules('inumber','Inumber','required');
  $this->form_validation->set_rules('gender','Gender','required');
  $this->form_validation->set_rules('address','Address','required|max_length[80]');
  $this->form_validation->set_rules('quality', 'Quality','max_length[65535]');
  $this->form_validation->set_rules('exper','Exper','max_length[65535]');
  $this->form_validation->set_rules('refer','Refer','max_length[65535]');

  if($this->form_validation->run() == FALSE)
  {
   $this->load->view('regStaff');
  }
  else
  {
      
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $this->load->library('upload', $config);

    
    $pic = array('upload_data' => $this->upload->data());
    $this->Staff_model->add_user($pic);
    redirect('Staff/man');
    
  }
 }
  function man(){
      if($this->session->userdata('logged') == 1){
      $this->load->model("Staff_model");
      $data["staff_data"] = $this->Staff_model->fetch_data();
      $this->load->view('manager123',$data);
    }
    else{
      redirect(base_url().'main/login'); 
    }
  
    
  }
  function reg(){
      if($this->session->userdata('logged') == 1){
        $this->load->view('regStaff');
      }
      else{
        redirect(base_url().'main/login'); 
      }
  }
  
  function delete1(){
    $this->Staff_model->delete1();
    redirect(base_url().'Staff/man');
  }
  function update(){
     $this->load->library('form_validation');
    // field name, error message, validation rules
    $this->form_validation->set_rules('idtype', 'ID_Type','required');
    //$this->form_validation->set_rules('idnumber', 'ID_Number','trim|required|numeric');
    $this->form_validation->set_rules('pic','Picture','required');
    $this->form_validation->set_rules('firstname', 'Name','trim|required|max_length[20]');
    $this->form_validation->set_rules('designation', 'Designation','trim|required');
    $this->form_validation->set_rules('fullname', 'Full_Name','trim|required|max_length[80]');
    $this->form_validation->set_rules('pnumber', 'Phone_number','required|numeric');
    $this->form_validation->set_rules('email','Email','required|valid_email');
    $this->form_validation->set_rules('dob','DOB','required');
    $this->form_validation->set_rules('inumber','Inumber','required');
    $this->form_validation->set_rules('gender','Gender','required');
    $this->form_validation->set_rules('address','Address','required|max_length[80]');
    $this->form_validation->set_rules('quality', 'Quality','max_length[65535]');
    $this->form_validation->set_rules('exper','Exper','max_length[65535]');
    $this->form_validation->set_rules('refer','Refer','max_length[65535]');

  if($this->form_validation->run() == FALSE)
  {
   $this->load->view('regStaff');
  }
  else
  {
      
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $this->load->library('upload', $config);

    
    $pic = array('upload_data' => $this->upload->data());
    $this->staff_model->update();
    redirect('Staff/man');
    
  }  
  }
  function edituser(){
    $data["result"] = $this->Staff_model->edit();
    $this->load->view('regStaff',$data);
    
  }
  function edit(){
      $this->load->view('EditStaff'); 
    }
  
}
?>
