<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Crud extends CI_Controller{

	function index(){
		$data["title"] = "Meal Menu";
		$this->load->view('crud_view', $data);
	}
	function fetch_user(){
		$this->load->model("crud_model");
		$fetch_data = $this->crud_model->make_datatables();
		$data = array();
		foreach ($fetch_data as $row) {
			$sub_array = array();
			//$sub_array[] = '<img src="'.base_url().'upload/'.$row->image.'"class="img-thumbnail" width="50" height="35"/>';
			$sub_array[] = $row->name;
			$sub_array[] = $row->description;
			$sub_array[] = $row->price;
			$sub_array[] = $row->discount;
			$sub_array[] ='<button type="button" name="update" id="'.$row->id.'"class="btn btn-warning btn-xs ">Update</button>';
			$sub_array[] ='<button type="button" name="delete" id="'.$row->id.'"class="btn btn-danger btn-xs ">Delete</button>';
			$data[] = $sub_array;
		}

		$output = array(
//				"draw" 				=> intval($_POST["draw"]),
				"recordsTotal" 		=> $this->crud_model->get_all_data(),
				"recordsFiltered"	=> $this->crud_model->get_filtered_data(),
				"data"				=> $data
			);
		echo json_encode($output);
	}
}