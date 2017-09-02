<?php

class User_model extends CI_Model{
	
	function create_member(){
		$username = $this->input->post('username');

		$new_member_insert_data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name'  => $this->input->post('last_name'),
			'email' 	 => $this->input->post('email'),
			'username'   => $this->input->post('username'),
			'level'		 => $this->input->post('type'),
			'password'   => md5($this->input->post('password'))

			); 

		$insert = $this->db->insert('users', $new_member_insert_data);
		return $insert;
	}

	function fetch_data(){
		$query=$this->db->query("SELECT * FROM users ORDER BY id DESC");
		return $query;
	}

	
	
	function insert_data($data){
		$this->db->insert("users",$data);

	}

}
?>