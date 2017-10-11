<?php
class Main_model extends CI_Model{
	
	function insert_data($data,$page){
		$this->db->insert($page,$data);
	}

	function fetch_data($page){
		//select * form customer
		
		$query=$this->db->query("SELECT * FROM $page WHERE valid_bit='0'");
		return $query;
	}


	function delete_data($id,$page){
		// $this->db->query("DELETE  FROM customer WHERE id='$id'");
		$this->db->query("UPDATE $page SET valid_bit='1' WHERE id='$id'");
		// $this->db->where("id",$id);
		// $this->db->delete("customer");
	
	}

	function fetch_single_data($user_id,$page){
		//$this->db->where("id",$id);
		$query=$this->db->query("SELECT * FROM $page WHERE id='$user_id'");
		// $query->result_array();
		return $query;

	}
	function update_data($user_id,$page,$data){
		// $firstname=$data['firstname'];
		// $lastname=$data['lastname'];
		// $email=$data['email'];
		// $password=$data['password'];
		// $this->db->query("UPDATE $page SET picture='null',firstname=$firstname,lastname=$lastname,email=$email,password=$password WHERE id='$user_id'");
		$this->db->where('id', $user_id);
		$this->db->update($page, $data);
		
	}


	
}
?>