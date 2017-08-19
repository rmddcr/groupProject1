<?php

class Login extends CI_Controller{

	function index()
	{
		$this->load->view('includes/header');
		$this->load->view('login_form');
		$this->load->view('includes/footer');
	}

	function validate_candentials()
	{
		$this->load->model('membership_model');
		$query= $this->membership_model->validate();

		if($query){
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
				);
			$this->session->set_userdata($data);
			redirect('Welcome/index');//site/members_area
		}
		else
		{
			$this->index();
		}
	}

	
	function signup()
	{
		$this->load->view('includes/header');
		$this->load->view('signup_from');
		$this->load->view('includes/footer');
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
			$this->load->view('includes/header');
			$this->load->view('signup_from');
			$this->load->view('includes/footer');
		}
		else
		{
			$this->load->model('membership_model');

			if($query=$this->membership_model->create_member())
			{
				$data['account_created'] = 'Your account has been created. <br/><br/> You may be now login.';

				$this->load->view('includes/header');
				$this->load->view('login_form',$data);
				$this->load->view('includes/footer');
			}
			else
			{
				$this->load->view('includes/header');
				$this->load->view('signup_form');
				$this->load->view('includes/footer');
			}
		}

	}

	function check_if_username_exists($requested_username){

		$this->load->model('membership_model');

		$username_available = $this->membership_model->check_if_username_exists($requested_username);

		if($username_available){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function check_if_email_exists($requested_email){

		$this->load->model('membership_model');

		$email_available = $this->membership_model->check_if_email_exists($requested_email);

		if($email_available){
			return TRUE;
		} else {
			return FALSE;
		}
	}
}
?>