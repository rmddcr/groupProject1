<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('gen_model');
    }

	public function index()
	{
		$this->load->view('admin');
	}

	public function remove_users(){
	    $this->load->view('remove_users');
    }

    public function addmeals(){
        $data['meals'] = $this->gen_model->getData($tablename='meals');
        $this->load->view('addmealsandoffers',$data);
    }

    public function desserts(){
        $this->load->view('desserts');
    }

    public function beverages(){
        $this->load->view('beverages');
    }

    public function employee(){
        $this->load->view('employee');
    }

    public function login(){
        $this->load->view('login');
    }

    public function addmeal(){
//        var_dump($_POST);
        $code = $_POST['code'];
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        $cat = $_POST['cat'];
//        $code = $_POST['code'];

        $data_arr['meal_code'] = $code;
        $data_arr['meal_name'] = $name;
        $data_arr['meal_desc'] = $desc;
        $data_arr['meal_price'] = $price;
        $data_arr['meal_cat'] = $cat;

        $this->gen_model->insertData($tablename="meals", $data_arr);

        redirect('/admin/addmeals');
    }
}
