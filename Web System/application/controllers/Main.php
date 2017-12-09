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
		$data["fetch_data"]=$this->main_model->fetch_data($page);
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
	
	
	
	
	
	public function item(){
		$this->load->model("main_model");
		$item_category=$this->uri->segment(3);
		$data["fetch_data"]=$this->main_model->fetch_data($item_category);
		$data["item_category"]=$item_category;
		//$data["item_category"]=$this->uri->segment(3);
		$this->load->view('food_item',$data);
	}
	
	public function add_category(){
		$this->load->model("main_model");
		$data["fetch_data"]=$this->main_model->fetch_data('meal_cat');
		$this->load->view('food_cat',$data);
	}	
	public function add_cat_to_model(){
		$tablename='meal_cat';
		$this->load->model("main_model");

			//upload the image
			$config['upload_path']='./uploads';
			$config['allowed_types']='*';
			$this->load->library('upload',$config);
			$this->upload->do_upload('file_name');
			$file_name=$this->upload->data();

			$data=array(
						"meal_cat_name" =>$this->input->post("cat_name"),
						"meal_cat_image" =>$file_name['file_name']
						);
			$this->main_model->insert_data($data,$tablename);
			$this->dashboard();
	
	}	

	public function choose_category(){
		$pagename="meal_cat";
		$this->load->model("main_model");
		$data["category"]=$this->main_model->get_cagtegoy($pagename);
		$this->load->view('category',$data);
	}

	public function update_item_form(){
		$this->load->view('update_item_form_view');
	}

	public function insert_item_form(){
		$meal_item_category=$this->uri->segment(3);
		$data=array(
			'item_category'=>$meal_item_category
		);
		

		$this->load->view('insert_item_form_view',$data);
	}

	
	
	
	// form validation for the pizza,burger, rice,appetizer,beverages and desserts
	public function form_validation_food($data){
		//get the current pagename where this data came form
		$item_category=$this->uri->segment(3);
		$tablename='meal_items';
		//validate data
		$this->load->library('form_validation');
		$this->form_validation->set_rules("item_code","Item Code",'required|alpha_numeric');
		$this->form_validation->set_rules("name","Name",'required|alpha');
		$this->form_validation->set_rules("description","Description",'required');
		$this->form_validation->set_rules("item_rating","Item Rating",'numeric');
		$this->form_validation->set_rules("price","Price",'required|decimal');

		//if data is validated, (all the data inserted correctely)
		if($this->form_validation->run()){
			
							
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
				"meal_item_cat" =>$item_category,
				"meal_item_price"    =>$this->input->post("price"),		
				"meal_item_rating" =>$this->input->post("item_rating"),
				'meal_item_picture'=>$file_name['file_name']
				);

			$this->main_model->insert_data($data,$tablename);

			// //after inserted data go back to the page wehre the data was come from with inserted keyword
			// redirect(base_url().'main/'.$pagename.'/inserted');
			$this->item();
		}else{
			$this->item();
		}
	}

	//form validation for the customer/for the insert
	public function form_validation($data){
		$pagename=$this->uri->segment(3);
		if($pagename=='customer'){
			//to insert data i've used one functin in main_model. so here i used a variable called
			// $tablename to insert data to customer.
			

			//validate data passed from customer
			$this->load->library('form_validation');
			$this->form_validation->set_rules("firstname","First Name",'required|alpha');
			$this->form_validation->set_rules("lastname","Lastname Name",'required|alpha');
			$this->form_validation->set_rules("phone","Phone",'required|regex_match[/^[0-9]{10}$/]');
			$this->form_validation->set_rules("email","Email",'required|valid_email');
			$this->form_validation->set_rules("password","Password",'required|min_length[8]');
			$this->form_validation->set_rules("confirm_password","Confirm Password",'required|matches[password]|min_length[8]');

			if($this->form_validation->run()){
				//true
				//upload the image to uploads folder
				$config['upload_path']='./uploads';
				$config['allowed_types']='*';
				$this->load->library('upload',$config);
				$this->upload->do_upload('file_name');
				$file_name=$this->upload->data();
			
				$this->load->model('main_model');
				
				$tablename='customer';
				//make associative array to insert data 
				$cutomer_email =$this->input->post("email");
				$data=array(
					"cust_first_name" =>$this->input->post("firstname"),
					"cust_last_name" =>$this->input->post("lastname"),
					"cust_phone"    =>$this->input->post("phone"),	
					"cust_email"    =>$cutomer_email,	
					"cust_picture" =>$file_name['file_name']
					);
				

				
					$this->main_model->insert_data($data,$tablename);		
					$data["customer_id"]=$this->main_model->get_id($cutomer_email);
					if(isset($data["customer_id"])){
						foreach($data["customer_id"]->result_array()as $row){
							$customer_id= $row['cust_id'];
						}
					}
					
					$imp_data=array(
						"cust_id"    =>$customer_id,		
						"cust_password" =>$this->input->post("password")
						);
					//pass the array to main_model to inert to database
					$imp_data_table="cust_users";
					
					$this->main_model->insert_data($imp_data,$imp_data_table);

					//return to customer view
					redirect(base_url().'main/customer/inserted');
				
			}else{
				//if data in invalid go back to customer page
				$this->customer();
			}
		}

	}


	
	
	//delete data function 
	public function delete_data($page){
		//get the page name where data is come from
		$meal_item_category=$this->uri->segment(3);

		//get the id of the item to be deleted
		$id=$this->uri->segment(4);

		//call the database model 
		$this->load->model('main_model');

		//delete the data
		$this->main_model->delete_category_data($id,$meal_item_category);

		//after deleted data go back to the page where data is come from
		if($meal_item_category=='meal_cat'){
			$this->add_category();
		}
		else if($meal_item_category!='customer'){
			// redirect(base_url().'main/'.$page.'/deleted');
			$this->item();
		}else if($meal_item_category=='customer'){
			redirect(base_url().'main/add_category');
		}
		
	}
	


	//when update is clicked show the data to be updated in the form/ only for food items
	public function update_data(){
		//get the page name where data is come from
		$meal_item_category=$this->uri->segment(3);

		//get the id of the data to be updated
		$user_id = $this->uri->segment(4);

		if($meal_item_category!='customer'){
			$page='meal_items';
		}else{
			$page='customer';
		}
		
		//load the model
		$this->load->model('main_model');
		$second_table="cust_users";
		//get the data to be updated from the db as a array
		$data['user_data']=$this->main_model->fetch_single_data($user_id,$page);
		

		// //get the data which is shawn at the table from the db
		// $data['fetch_data']=$this->main_model->fetch_data($item_category);

		if($meal_item_category!='customer'){
			$this->load->view('update_item_form_view',$data);
		}else{
			$this->load->view('customer',$data);
		}
		//pass all that data into the page where update is called 
		

	}

	//update customer data where data is passed from customer update form 
	public function update_form_data_customer(){
		$page=$this->uri->segment(3);
		$user_id = $this->uri->segment(4);

		$this->load->library('form_validation');
		$this->form_validation->set_rules("firstname","First Name",'required|alpha');
		$this->form_validation->set_rules("lastname","Lastname Name",'required|alpha');
		$this->form_validation->set_rules("phone","Phone",'required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules("email","Email",'required|valid_email');
		$this->form_validation->set_rules("password","Password",'required|min_length[8]');
		$this->form_validation->set_rules("confirm_password","Confirm Password",'required|matches[password]|min_length[8]');

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
					"cust_phone" =>$this->input->post("phone"),
					"cust_email"    =>$this->input->post("email"),
					"cust_picture"=>$file_name['file_name']
					);
				$imp_data=array(	
					"cust_password" =>$newpass
					);
			$other_table="cust_users";
			
			$this->main_model->update_data($user_id,$page,$data);
			$this->main_model->update_data($user_id,$other_table,$imp_data);
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

		$meal_item_category=$this->uri->segment(3);
		$user_id = $this->uri->segment(4);

		//validate data passed from customer
		$this->load->library('form_validation');
		$this->form_validation->set_rules("item_code","Item Code",'required|alpha_numeric');
		$this->form_validation->set_rules("name","Name",'required|alpha');
		$this->form_validation->set_rules("description","Description",'required');
		$this->form_validation->set_rules("item_rating","Item Rating",'numeric');
		$this->form_validation->set_rules("price","Price",'required|decimal');

		if($this->form_validation->run()){

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
				"meal_item_cat" =>$meal_item_category,
				"meal_item_desc" =>$this->input->post("description"),
				"meal_item_price"    =>$this->input->post("price"),			
				"meal_item_rating" =>$this->input->post("item_rating"),
				"meal_item_picture"=>$file_name['file_name']			
				);

			//pass this data to db model to be updated
			$this->main_model->update_data($user_id,$meal_item_category,$data);

			//go gack to where the data is come from
			$this->item();
		}else{
			$this->item();
		}
	}

	

	
}