<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	
	public function index()
	{

		$this->dashboard();
	}


	public function customer(){
		$this->load->model("main_model");
		$page="customer";
		$data["fetch_data"]=$this->main_model->fetch_data($page);
		$this->load->view('customer',$data);
	}


	public function userprofile(){
		$this->load->view('userprofile');
	}
	public function dashboard(){
		$this->load->view('dashboard');
	}

	public function employee(){
		$this->load->model("main_model");
		$page="employee";
		$data["fetch_data"]=$this->main_model->fetch_data($page);
		$this->load->view('employee',$data);
	}
	public function meals(){
		$this->load->model("main_model");
		$page="meals";
		$data["fetch_data"]=$this->main_model->fetch_data($page);
		$this->load->view('meals',$data);

	}
	public function desserts(){
		$this->load->model("main_model");
		$page="desserts";
		$data["fetch_data"]=$this->main_model->fetch_data($page);
		$this->load->view('desserts',$data);

	}
	public function beverages(){
		$this->load->model("main_model");
		$page="beverages";
		$data["fetch_data"]=$this->main_model->fetch_data($page);
		$this->load->view('beverages',$data);
	}



	public function form_validation($data){
		$pagename=$this->uri->segment(3);
		if($pagename=='customer'){
			$this->load->library('form_validation');
			$this->form_validation->set_rules("firstname","First Name",'required');
			$this->form_validation->set_rules("lastname","Lastname Name",'required');
			$this->form_validation->set_rules("email","Email",'required');
			$this->form_validation->set_rules("password","Password",'required|min_length[8]');

			if($this->form_validation->run()){
				//true

				$config['upload_path']='./uploads';
				$config['allowed_types']='*';
				$this->load->library('upload',$config);
				$this->upload->do_upload('file_name');
				$file_name=$this->upload->data();
			
				$this->load->model('main_model');
				

				$data=array(
					"firstname" =>$this->input->post("firstname"),
					"lastname" =>$this->input->post("lastname"),
					"email"    =>$this->input->post("email"),
					"password" =>$this->input->post("password"),
					"picture" =>$file_name['file_name']
					);

				$this->main_model->insert_data($data,$pagename);
				redirect(base_url().'main/inserted');
			}else{
				//false
				$this->customer();
			}
		}else{
			$this->load->view('meals');
		}

	}
	public function file_upload(){
		

	}
	// form validation for meals,beverages and desserts
	public function form_validation_food($data){
		$pagename=$this->uri->segment(3);
		// $pagename='desserts';
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules("name","Name",'required');
		$this->form_validation->set_rules("description","Description",'required');
		$this->form_validation->set_rules("price","Price",'required');
		$this->form_validation->set_rules("discount","Discount",'required');

		if($this->form_validation->run()){
			//true
			//start image upload

				// $config['upload_path']=base_url().'uploads';
				// $config['allowed_types']='jpg|png';
				// $config['max_size'] = '100';
				// $config['max_width'] = '1024';
				// $config['max_height'] = '768';
				// $this->load->library('upload',$config);
				
				// $this->upload->do_upload($this->input->post("file_name"));
				// $file_name=$this->upload->data();

				// $data=array('file_name'=>$file_name['file_name']);
				
						
			//finish image
				$config['upload_path']='./uploads';
				$config['allowed_types']='*';
				$this->load->library('upload',$config);
				$this->upload->do_upload('file_name');
				$file_name=$this->upload->data();
			//finsished image
			
			$this->load->model('main_model');
			$data=array(
				"name" =>$this->input->post("name"),
				"description" =>$this->input->post("description"),
				"price"    =>$this->input->post("price"),
				"discount" =>$this->input->post("discount"),
				'picture'=>$file_name['file_name']
				);

			$this->main_model->insert_data($data,$pagename);
			if($pagename=="desserts"){
				redirect(base_url().'main/desserts/inserted');
			}else if($pagename=="meals"){
				redirect(base_url().'main/meals/inserted');
			}else if($pagename=='beverages'){
				redirect(base_url().'main/beverages/inserted');
			}
			
		}else{
			//false
			redirect(base_url().'main/meals/inserted');
		}
	}


	//form validation employee
	public function form_validation_employee($data){
		$pagename=$this->uri->segment(3);
		if($pagename=='employee'or'userprofile'){
			$this->load->library('form_validation');
			$this->form_validation->set_rules("firstname","First Name",'required');
			$this->form_validation->set_rules("lastname","Lastname Name",'required');
			$this->form_validation->set_rules("email","Email",'required');
			$this->form_validation->set_rules("password","Password",'required|min_length[8]');
			$this->form_validation->set_rules("position","Position",'required');
			$this->form_validation->set_rules("salary_per_hour","Salary Per Hour",'required');
			$this->form_validation->set_rules("description","Description",'required');

			if($this->form_validation->run()){
				//true

				$config['upload_path']='./uploads';
				$config['allowed_types']='*';
				$this->load->library('upload',$config);
				$this->upload->do_upload('file_name');
				$file_name=$this->upload->data();


				$this->load->model('main_model');
				$data=array(
					"firstname" =>$this->input->post("firstname"),
					"lastname" =>$this->input->post("lastname"),
					"email"    =>$this->input->post("email"),
					"password" =>$this->input->post("password"),
					"position" =>$this->input->post("position"),
					"salary_per_hour" =>$this->input->post("salary_per_hour"),
					"description"  =>$this->input->post("description"),
					"picture" =>$file_name['file_name']
					);

				$this->main_model->insert_data($data,'employee');
				if($pagename=='employee'){
					redirect(base_url().'main/employee');
				}else{
					redirect(base_url().'main/userprofile');
				}

			}else{
				//false
				if($pagename=='employee'){
					$this->employee();
				}else{
					$this->userprofile();
				}
			}
		}
	}
	
	public function inserted(){
			$this->customer();
	}


	public function delete_data($page){
		$page=$this->uri->segment(3);
		$id=$this->uri->segment(4);
		$this->load->model('main_model');
		$this->main_model->delete_data($id,$page);
		if($page=='desserts'){
			redirect(base_url().'main/desserts');
		}else if($page=='meals'){
			redirect(base_url().'main/meals');
		}else if($page=='beverages'){
			redirect(base_url().'main/beverages');
		}else if($page=='employee'){
			redirect(base_url().'main/employee');
		}else if($page=='customer'){
			redirect(base_url().'main/customer');
		}
	}
	public function deleted(){
		$this->customer();
	}

	public function update_data(){

		$page=$this->uri->segment(3);
		$user_id = $this->uri->segment(4);
		$this->load->model('main_model');
		$data['user_data']=$this->main_model->fetch_single_data($user_id,$page);
		$data['fetch_data']=$this->main_model->fetch_data($page);
		$this->load->view($page,$data);

	}

	public function update_form_data_customer(){
		$page=$this->uri->segment(3);
		$user_id = $this->uri->segment(4);


			$config['upload_path']='./uploads';
			$config['allowed_types']='*';
			$this->load->library('upload',$config);
			$this->upload->do_upload('file_name');
			$file_name=$this->upload->data();

		$this->load->model('main_model');
				$data=array(
					"firstname" =>$this->input->post("firstname"),
					"lastname" =>$this->input->post("lastname"),
					"email"    =>$this->input->post("email"),
					"password" =>$this->input->post("password"),
					"picture"=>$file_name['file_name']
					);
		$this->main_model->update_data($user_id,$page,$data);
		redirect(base_url().'main/customer/updated');
	}
	public function update_form_data_employee(){
		$page=$this->uri->segment(3);
		$user_id = $this->uri->segment(4);


			$config['upload_path']='./uploads';
			$config['allowed_types']='*';
			$this->load->library('upload',$config);
			$this->upload->do_upload('file_name');
			$file_name=$this->upload->data();


		$this->load->model('main_model');
				$data=array(
					"firstname" =>$this->input->post("firstname"),
					"lastname" =>$this->input->post("lastname"),
					"email"    =>$this->input->post("email"),
					"password" =>$this->input->post("password"),
					"position" =>$this->input->post("position"),
					"salary_per_hour" =>$this->input->post("salary_per_hour"),
					"description"  =>$this->input->post("description"),
					"picture"=>$file_name['file_name']
					);
		$this->main_model->update_data($user_id,$page,$data);
		redirect(base_url().'main/employee/updated');
	}
	public function form_Update_common(){
		$page=$this->uri->segment(3);
		$user_id = $this->uri->segment(4);

				$config['upload_path']='./uploads';
				$config['allowed_types']='*';
				$this->load->library('upload',$config);
				$this->upload->do_upload('file_name');
				$file_name=$this->upload->data();

		$this->load->model('main_model');
				$data=array(
				"name" =>$this->input->post("name"),
				"description" =>$this->input->post("description"),
				"price"    =>$this->input->post("price"),
				"discount" =>$this->input->post("discount"),
				"picture"=>$file_name['file_name']			
				);

		$this->main_model->update_data($user_id,$page,$data);
		redirect(base_url().'main/'.$page.'/updated');
	}

	// file upload
	// public function file_upload(){

	// 	$config['upload_path']='./uploads';
	// 	$config['allowed_types']='*';
	// 	$this->load->library('upload',$config);
	// 	$this->upload->do_upload('file_name');
	// 	$file_name=$this->upload->data();

	// 	$data=array('file_name'=>$file_name['file_name']);
	// 	$this->load->model('mymodel');
	// 	$add=$this->mymodel->File_upload($data);
	// 	if($add){
	// 		redirect(base_url().'desserts');
	// 	}

	// 	$rock=$this->uri->segment(3);
	// 	echo $rock;

	// }

	
}