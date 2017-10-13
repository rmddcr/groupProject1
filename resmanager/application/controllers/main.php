<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	public function login(){
		if($this->session->userdata('logged') == 1){
			redirect(base_url().'user');
		}
		else{
			$this->load->view('login');	
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
			echo '<label><a href="'.base_url().'main/logout">Logout</a></label>';
		
	}
	function logout()  
      {  
           if($this->session->userdata('logged') == 1){
				$this->session->unset_userdata('logged');
           		//$this->session->unset_userdata('username');
           		$this->session->sess_destroy();  
           		redirect(base_url().'main/login');
			}
			else{
				$this->load->view('login');	
			}  
      } 
}