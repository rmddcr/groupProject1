<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	
	public function index()
	{
		//show the dashboard when loged at first
		$this->dashboard();
	}


	//view customer data
	public function customer(){
		$this->load->model("main_model");
		$page="customer";
		$tablename='cust_users';
		$data["fetch_data"]=$this->main_model->fetch_data($tablename);
		$this->load->view('customer',$data);
	}

	//view user profile
	public function userprofile(){
		$this->load->view('userprofile');
	}
	//view dashboard
	public function dashboard(){
		$this->load->view('dashboard');
	}

	// public function employee(){
	// 	$this->load->model("main_model");
	// 	$page="employee";
	// 	$data["fetch_data"]=$this->main_model->fetch_data($page);
	// 	$this->load->view('employee',$data);
	// }
	
	//view dessert page
	public function desserts(){
		$this->load->model("main_model");
		$item_category='7';
		$data["fetch_data"]=$this->main_model->fetch_data($item_category);
		$this->load->view('desserts',$data);
	}
	
	//view burger page
	public function burger(){
		$this->load->model("main_model");
		$item_category='2';
		$data["fetch_data"]=$this->main_model->fetch_data($item_category);
		$this->load->view('burger',$data);
	}

	//view pizza page
	public function pizza(){
		$this->load->model("main_model");
		$item_category='3';
		$data["fetch_data"]=$this->main_model->fetch_data($item_category);
		$this->load->view('pizza',$data);
	}

	//view rice page
	public function rice(){
		$this->load->model("main_model");
		$item_category='4';
		$data["fetch_data"]=$this->main_model->fetch_data($item_category);
		$this->load->view('rice',$data);
	}

	//view appetizer page
	public function appetizer(){
		$this->load->model("main_model");
		$item_category='5';
		$data["fetch_data"]=$this->main_model->fetch_data($item_category);
		$this->load->view('appetizer',$data);
	}

	//view beverage page
	public function beverages(){
		$this->load->model("main_model");
		$item_category='6';
		$data["fetch_data"]=$this->main_model->fetch_data($item_category);
		$this->load->view('beverages',$data);
	}



	
	
	// form validation for the pizza,burger, rice,appetizer,beverages and desserts
	public function form_validation_food($data){
		//get the current pagename where this data came form
		$pagename=$this->uri->segment(3);
		$tablename='meal_items';
		//validate data
		$this->load->library('form_validation');
		$this->form_validation->set_rules("item_code","Item Code",'required');
		$this->form_validation->set_rules("name","Name",'required');
		$this->form_validation->set_rules("item_category","Item Category",'required');
		$this->form_validation->set_rules("description","Description",'required');
		$this->form_validation->set_rules("price","Price",'required');
		
		//if data is validated, (all the data inserted correctely)
		if($this->form_validation->run()==TRUE){
			
						
			//upload the image
				$config['upload_path']='./uploads';
				$config['allowed_types']='*';
				$this->load->library('upload',$config);
				$this->upload->do_upload('file_name');
				$file_name=$this->upload->data();
			//finsished image
			

			//store the data in the database
			$this->load->model('main_model');
			$data=array(
				"meal_item_code" =>$this->input->post("item_code"),
				"meal_item_name" =>$this->input->post("name"),
				"meal_item_desc" =>$this->input->post("description"),
				"meal_item_cat" =>$this->input->post("item_category"),
				"meal_item_price"    =>$this->input->post("price"),
				
				"meal_item_rating" =>$this->input->post("item_rating"),
				'meal_item_picture'=>$file_name['file_name']
				);

			$this->main_model->insert_data($data,$tablename);

			//after inserted data go back to the page wehre the data was come from with inserted keyword
			redirect(base_url().'main/'.$pagename.'/inserted');
			
		}else{
			/*if there is any error with the data go back to the page where data was come from using 
				above implemented functions
			*/
			if($pagename=="desserts"){
				$this->desserts();
			}else if($pagename=="burger"){
				$this->burger();
			}else if($pagename=="pizza"){
				$this->pizza();
			}else if($pagename=="rice"){
				$this->rice();
			}else if($pagename=="appetizer"){
				$this->appetizer();
			}else if($pagename=="beverages"){
				$this->beverages();
			}
			
		}
	}

	//form validation for the customer/for the insert
	public function form_validation($data){
		$pagename=$this->uri->segment(3);
		if($pagename=='customer'){
			//to insert data i've used one functin in main_model. so here i used a variable called
			// $tablename to insert data to customer.
			$tablename='cust_users';

			//validate data passed from customer
			$this->load->library('form_validation');
			$this->form_validation->set_rules("firstname","First Name",'required');
			$this->form_validation->set_rules("lastname","Lastname Name",'required');
			$this->form_validation->set_rules("email","Email",'required');
			$this->form_validation->set_rules("password","Password",'required|min_length[8]');

			if($this->form_validation->run()){
				//true
				//upload the image to uploads folder
				$config['upload_path']='./uploads';
				$config['allowed_types']='*';
				$this->load->library('upload',$config);
				$this->upload->do_upload('file_name');
				$file_name=$this->upload->data();
			
				$this->load->model('main_model');
				
				//make associative array to insert data 
				$data=array(
					"cust_first_name" =>$this->input->post("firstname"),
					"cust_last_name" =>$this->input->post("lastname"),
					"cust_email"    =>$this->input->post("email"),
					"cust_password" =>$this->input->post("password"),
					"cust_picture" =>$file_name['file_name']
					);

				//pass the array to main_model to inert to database
				$this->main_model->insert_data($data,$tablename);

				//return to customer view
				redirect(base_url().'main/customer/inserted');
			}else{
				//if data in invalid go back to customer page
				$this->customer();
			}
		}

	}


	//form validation employee
	// public function form_validation_employee($data){
	// 	$pagename=$this->uri->segment(3);
	// 	if($pagename=='employee'or'userprofile'){
	// 		$this->load->library('form_validation');
	// 		$this->form_validation->set_rules("firstname","First Name",'required');
	// 		$this->form_validation->set_rules("lastname","Lastname Name",'required');
	// 		$this->form_validation->set_rules("email","Email",'required');
	// 		$this->form_validation->set_rules("password","Password",'required|min_length[8]');
	// 		$this->form_validation->set_rules("position","Position",'required');
	// 		$this->form_validation->set_rules("salary_per_hour","Salary Per Hour",'required');
	// 		$this->form_validation->set_rules("description","Description",'required');

	// 		if($this->form_validation->run()){
	// 			//true

	// 			$config['upload_path']='./uploads';
	// 			$config['allowed_types']='*';
	// 			$this->load->library('upload',$config);
	// 			$this->upload->do_upload('file_name');
	// 			$file_name=$this->upload->data();


	// 			$this->load->model('main_model');
	// 			$data=array(
	// 				"firstname" =>$this->input->post("firstname"),
	// 				"lastname" =>$this->input->post("lastname"),
	// 				"email"    =>$this->input->post("email"),
	// 				"password" =>$this->input->post("password"),
	// 				"position" =>$this->input->post("position"),
	// 				"salary_per_hour" =>$this->input->post("salary_per_hour"),
	// 				"description"  =>$this->input->post("description"),
	// 				"picture" =>$file_name['file_name']
	// 				);

	// 			$this->main_model->insert_data($data,'employee');
	// 			if($pagename=='employee'){
	// 				redirect(base_url().'main/employee');
	// 			}else{
	// 				redirect(base_url().'main/userprofile');
	// 			}

	// 		}else{
	// 			//false
	// 			if($pagename=='employee'){
	// 				$this->employee();
	// 			}else{
	// 				$this->userprofile();
	// 			}
	// 		}
	// 	}
	// }
	
	
	//delete data function 
	public function delete_data($page){
		//get the page name where data is come from
		$page=$this->uri->segment(3);

		//get the id of the item to be deleted
		$id=$this->uri->segment(4);

		//call the database model 
		$this->load->model('main_model');

		//delete the data
		$this->main_model->delete_data($id,$page);

		//after deleted data go back to the page where data is come from
		redirect(base_url().'main/'.$page.'/deleted');
	}
	


	//when update is clicked show the data to be updated in the form/ only for food items
	public function update_data(){
		//get the page name where data is come from
		$page=$this->uri->segment(3);

		//get the id of the data to be updated
		$user_id = $this->uri->segment(4);

		//get the $item_category variable according to page 
		// we need that variable to be known b/c in our db we use that number to identify page name. 
		if($page=="burger"){
			$item_category='2';
		}else if($page=="pizza"){
			$item_category='3';
		}else if($page=="rice"){
			$item_category='4';
		}else if($page=="appetizer"){
			$item_category='5';
		}else if($page=="beverages"){
			 $item_category='6';
			
		}else if($page=="desserts"){
			$item_category='7';
		}else{
			$item_category='cust_users';
		}

		//load the model
		$this->load->model('main_model');

		//get the data to be updated from the db as a array
		$data['user_data']=$this->main_model->fetch_single_data($user_id,$page);

		//get the data which is shawn at the table from the db
		$data['fetch_data']=$this->main_model->fetch_data($item_category);

		//pass all that data into the page where update is called 
		$this->load->view($page,$data);

	}

	//update customer data where data is passed from customer update form 
	public function update_form_data_customer(){
		$page=$this->uri->segment(3);
		$user_id = $this->uri->segment(4);

		$this->load->library('form_validation');
		$this->form_validation->set_rules("firstname","First Name",'required');
		$this->form_validation->set_rules("lastname","Lastname Name",'required');
		$this->form_validation->set_rules("email","Email",'required');
		$this->form_validation->set_rules("password","Password",'required|min_length[8]');

		if($this->form_validation->run()){

			$config['upload_path']='./uploads';
			$config['allowed_types']='*';
			$this->load->library('upload',$config);
			$this->upload->do_upload('file_name');
			$file_name=$this->upload->data();

			$this->load->model('main_model');
				$newpass=md5($this->input->post("password"));
				$data=array(
					"cust_first_name" =>$this->input->post("firstname"),
					"cust_last_name" =>$this->input->post("lastname"),
					"cust_email"    =>$this->input->post("email"),
					"cust_password" =>$newpass,
					"cust_picture"=>$file_name['file_name']
					);
			$this->main_model->update_data($user_id,$page,$data);
			redirect(base_url().'main/customer/updated');
		}else{
			$this->customer();
		}


	}
	// public function update_form_data_employee(){
	// 	$page=$this->uri->segment(3);
	// 	$user_id = $this->uri->segment(4);


	// 		$config['upload_path']='./uploads';
	// 		$config['allowed_types']='*';
	// 		$this->load->library('upload',$config);
	// 		$this->upload->do_upload('file_name');
	// 		$file_name=$this->upload->data();


	// 	$this->load->model('main_model');
	// 			$data=array(
	// 				"firstname" =>$this->input->post("firstname"),
	// 				"lastname" =>$this->input->post("lastname"),
	// 				"email"    =>$this->input->post("email"),
	// 				"password" =>$this->input->post("password"),
	// 				"position" =>$this->input->post("position"),
	// 				"salary_per_hour" =>$this->input->post("salary_per_hour"),
	// 				"description"  =>$this->input->post("description"),
	// 				"picture"=>$file_name['file_name']
	// 				);
	// 	$this->main_model->update_data($user_id,$page,$data);
	// 	redirect(base_url().'main/employee/updated');
	// }


	/*when update butten is pressed from the update form do the changes in the db and update it./only for food items */
	public function form_Update_common(){

		$page=$this->uri->segment(3);
		$user_id = $this->uri->segment(4);

				//upload the image in to uploads folder
				$config['upload_path']='./uploads';
				$config['allowed_types']='*';
				$this->load->library('upload',$config);
				$this->upload->do_upload('file_name');
				$file_name=$this->upload->data();

		$this->load->model('main_model');

		// get the data from the update form and store it in a array
				$data=array(
				"meal_item_code" =>$this->input->post("item_code"),
				"meal_item_name" =>$this->input->post("name"),
				"meal_item_cat" =>$this->input->post("item_category"),
				"meal_item_desc" =>$this->input->post("description"),
				"meal_item_price"    =>$this->input->post("price"),
				
				"meal_item_rating" =>$this->input->post("item_rating"),
				"meal_item_picture"=>$file_name['file_name']			
				);

		//pass this data to db model to be updated
		$this->main_model->update_data($user_id,$page,$data);

		//go gack to where the data is come from
		redirect(base_url().'main/'.$page.'/updated');
	}

	

	
}