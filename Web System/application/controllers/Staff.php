<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class staff extends CI_Controller{
 public function __construct()
 {
  parent::__construct();
  $this->load->model("Staff_model");
 }
 
 function update_Staff(){
  $this->Staff_model->getStaff($id);
 }
 public function registration()
 {
  $this->load->library('form_validation');
  // field name, error message, validation rules
  $this->form_validation->set_rules('idnumber', 'ID_Number','required|callback_checks_ID');
  $this->form_validation->set_rules('designation', 'Designation','trim|required');
  $this->form_validation->set_rules('fullname', 'Full_Name','trim|required|max_length[80]');
  $this->form_validation->set_rules('pnumber', 'Phone_number','required|numeric');
  $this->form_validation->set_rules('email','Email','required|valid_email');
  $this->form_validation->set_rules('dob','DOB','required');
  $this->form_validation->set_rules('gender','Gender','required');
  $this->form_validation->set_rules('address','Address','required|max_length[80]');
  $this->form_validation->set_rules('quality', 'Quality','max_length[65535]');
  $this->form_validation->set_rules('exper','Exper','max_length[65535]');
  $this->form_validation->set_rules('refer','Refer','max_length[65535]');

  if($this->form_validation->run() == FALSE)
  {
   $this->load->view('AddStaff');
  }
  else
  {
      
      
    $config['upload_path'] = './uploads/staff/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $this->load->library('upload', $config);
    $this->upload->do_upload('file_name');
  
    
    $file_name=$this->upload->data();
    $data= array(
      'id' => $this->input->post('idnumber'),
      'profilepicture'=>$file_name['file_name'],
      'designation'    => $this->input->post('designation'),
      'Full_Name'   => $this->input->post('fullname'),
      'Contact_number'   => $this->input->post('pnumber'),
      'email'=> $this->input->post('email'),
      'dob'=> $this->input->post('dob'),
      'gender'=> $this->input->post('gender'),
      'Experience'=> $this->input->post('exper'),
      'Qualification'=> $this->input->post('quality'),
      'Refer'=> $this->input->post('refer'),
      'Address'=> $this->input->post('address')
  );
    $this->Staff_model->add_user($data);
    redirect('Staff/man');
    
  }
 }
  function man(){
      if($this->session->userdata('logged') == 1){
      $this->load->model("Staff_model");
      $data["staff_data"] = $this->Staff_model->fetch_data();
      $this->load->view('staff',$data);
    }
    else{
      redirect(base_url().'maint/login'); 
    }
    
  }
  function reg(){
      if($this->session->userdata('logged') == 1){
        $this->load->view('AddStaff');
      }
      else{
        redirect(base_url().'maint/login'); 
      }
  }
  
  function delete1(){
    $this->Staff_model->delete1();
    redirect(base_url().'Staff/man');
  }
  function update(){
     $this->load->library('form_validation');
    // field name, error message, validation rules
    $this->form_validation->set_rules('idnumber', 'ID_Number','required|callback_checks_ID');
    $this->form_validation->set_rules('pic','Picture','required');
    $this->form_validation->set_rules('designation', 'Designation','trim|required');
    $this->form_validation->set_rules('fullname', 'Full_Name','trim|required|max_length[80]');
    $this->form_validation->set_rules('pnumber', 'Phone_number','required');
    $this->form_validation->set_rules('email','Email','required|valid_email');
    $this->form_validation->set_rules('dob','DOB','required');
    $this->form_validation->set_rules('gender','Gender','required');
    $this->form_validation->set_rules('address','Address','required|max_length[80]');
    $this->form_validation->set_rules('quality', 'Quality','max_length[65535]');
    $this->form_validation->set_rules('exper','Exper','max_length[65535]');
    $this->form_validation->set_rules('refer','Refer','max_length[65535]');

  if($this->form_validation->run() == FALSE)
  {
   $this->load->view('updateStaff');
  }
  else
  {
      
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $this->load->library('upload', $config);
    $this->upload->do_upload('file_name');
  
    
    $data= array(
      'id' => $this->input->post('idnumber'),
      'profilepicture'=>$file_name['file_name'],
      'designation'    => $this->input->post('designation'),
      'Full_Name'   => $this->input->post('fullname'),
      'Contact_number'   => $this->input->post('pnumber'),
      'email'=> $this->input->post('email'),
      'dob'=> $this->input->post('dob'),
      'gender'=> $this->input->post('gender'),
      'Experience'=> $this->input->post('exper'),
      'Qualification'=> $this->input->post('quality'),
      'Refer'=> $this->input->post('refer'),
      'Address'=> $this->input->post('address')
    );
    $id1 = $this->input->post('idnumber');
    $this->staff_model->update($data,$id1);
    redirect('Staff/man');
    
  }  
  }
  function edituser(){
    $id = $this->uri->segment(3);
    $data["result"] = $this->Staff_model->edit($id);
    $this->load->view('updateStaff',$data);
    
  }
  
  function checks_ID($requested_ID){
    $ID_available = $this->Staff_model->check_ID_exists($requested_ID);

    if($ID_available){
      return TRUE;
    } else {
      return FALSE;
    }
  
  }
  
}
?>