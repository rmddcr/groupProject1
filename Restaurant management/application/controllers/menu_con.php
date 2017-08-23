<?php
class Menu_con extends CI_Controller{
	function menu(){
		$this->load->view('menu');
	}

	function create_member()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'Name','trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name','trim|required');
		$this->form_validation->set_rules('email', 'Email Address','trim|required|valid_email|max_length[15]|callback_check_if_email_exists');
		$this->form_validation->set_rules('username', 'Username','trim|required|min_length[4]|callback_check_if_username_exists');
		$this->form_validation->set_rules('password', 'Password','trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password_confirm', 'Password Confirmation','trim|required|matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			
			$this->load->model("user_model");
			$data["fetch_data"]=$this->user_model->fetch_data();
			$this->load->view('signup_from',$data);
			//$this->load->view('signup_from');
		}
		else
		{
			$this->load->model('user_model');

			if($query=$this->user_model->create_member())
			{
				redirect(base_url()."index.php/login/signup");
			}
			else
			{
				$this->load->model("user_model");
				$data["fetch_data"]=$this->user_model->fetch_data();
				$this->load->view('signup_from',$data);
				//$this->load->view('signup_from');
			}
			
		}
	}
}