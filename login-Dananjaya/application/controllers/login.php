<?php

class Login extends CI_Controller{

	function index()
	{
		
		$this->load->view('login_form');
		
	}

	function validate_credentials()
	{
		$this->load->model('membership_model');
		$query= $this->membership_model->validate();

		if($query){
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->md5('password'),
				'is_logged_in' => true
				);
			$this->session->set_userdata($data);
			redirect('view');//site/members_area
			//$this->load->view('site');
		}
		else
		{
			$this->index();
		}
	}

	
	function signup()
	{	
		//$this->load->view('includes/header1');
		$this->load->model("user_model");
		$data["fetch_data"]=$this->user_model->fetch_data();
		$this->load->view('signup_from',$data);
		//$this->load->view('signup_from');
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

	function admin()
	{

		$this->load->view('admin');
		$this->load->view('includes/footer');
	}

	
	function users()
	{
		$this->load->model('user_model');

		$data['manager'] = $this->user_model->get_user_detail();
		
		$this->load->view('users');
		
	}
	
	public function inserted(){
		$this->signup();
	}

	function create_menu(){
		$this->load->view('menu');
	}

	function view_order(){
		$this->load->view('order');
	}
	public function ajax_edit($id)
	{
		$data = $this->membership_model->get_by_id($id);



		echo json_encode($data);
	}
	public function member_update()
	{
		$data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
		$this->membership_model->member_update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}
	public function member_delete($id)
	{
		$this->membership_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
?>