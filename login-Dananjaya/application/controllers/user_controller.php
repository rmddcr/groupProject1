<?php 

	class User_controller extends CI_Controller{

		public function customer_function(){
			$this->load->view('includes/header1');
			$this->load->model("user_model");
			$data["fetch_data"]=$this->user_model->fetch_data();
			$this->load->view('signup_from',$data);
			//$this->load->view('footer');
		}


		public function form_validation(){
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
			$this->load->model('user_model');

			if($query=$this->user_model->create_member())
			{
				//$data['account_created'] = 'Your account has been created.<br/><br/> You may be now login.';

				/*$this->load->view('includes/header');
				$this->load->view('login_form',$data);
				$this->load->view('includes/footer');*/
				//$this->load->view('site');
				redirect(base_url()."user_controller/inserted");
			}
			else
			{
				$this->load->view('includes/header');
				$this->load->view('signup_from');
				$this->load->view('includes/footer');
			}
		}
		}
	

	public function inserted(){
			$this->customer_function();
		}
	public function site(){
			$this->load->view('site');
		}
}
?>