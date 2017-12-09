<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class maint extends CI_Controller {

	public function login(){
		if($this->session->userdata('logged') == 1){
			redirect(base_url().'user/dash');
		}
		else{
			redirect(base_url().'user/test');
		}
		
	}
	
	public function validate(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
		if($this->form_validation->run()){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('mainmodel');
			if($this->mainmodel->can_login($username, $password)){
				$session_data = array(
						 $username = 'username'
					);
				$this->session->set_userdata('logged','1');
				//$data['username'] = $username;
				redirect(base_url().'user');
			}
			else{
				$this->session->set_flashdata('error','Invalid username and password');
				$this->login();			}
		}
		else{
			$this->login();
		}
	}
	
	public function test(){
		
			echo '<h2>Welcome - '.$this->session->userdata('username').'<h2>';
			echo '<label><a href="'.base_url().'maint/logout">Logout</a></label>';
		
	}
	function logout()  
      {  
           if($this->session->userdata('logged') == 0 or 1 or 2){
				$this->session->unset_userdata('logged');
           		//$this->session->unset_userdata('username');
           		$this->session->sess_destroy();  
           		redirect(base_url().'maint/login');
			}
			else{
				$this->load->view('login');	
			}  
      } 
    /*function selectUser(){
    	$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
		if($this->form_validation->run()){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('mainmodel');
			$result = $this->mainmodel->selectUser($username, $password);
			foreach($result as $row){
				$ty = $row->type;
			}
			if($ty=='Waiter'){
				//print_r('win');
				$this->session->set_userdata('logged','1');
				$this->load->view('staff');
			}elseif ($ty=='Manager') {
				//print_r('won up');
				$this->session->set_userdata('logged','0');
				$this->load->model('user_model');
				$data["fetch_data"]=$this->user_model->fetch_data();      
      			$this->load->view('staff/manager',$data);
			}
			elseif ($ty=='Receptionist') {
				//print_r('huree');
				$this->session->set_userdata('logged','2');
				$this->load->view('AddStaff');
			}
			else{
				$this->session->set_flashdata('error','Invalid username and password');
				$this->login();			
			}


    }

}*/
}