<?php
class Main_model extends CI_Model{

	//insert data to the database name called 'meal_items'
	function insert_data($data,$tablename){
		$this->db->insert($tablename,$data);
	}

	//get data from the db to be shawn in the table
	function fetch_data($item_category){
		//select * form meals
		if($item_category!='cust_users'){
			$query=$this->db->query("SELECT * FROM meal_items WHERE meal_item_valid_bit='0' AND meal_item_cat=$item_category");
		}else{
			$query=$this->db->query("SELECT * FROM cust_users WHERE cust_valid_bit='0'");
		}
		return $query;
	}

	//delete the data 
	function delete_data($id,$page){
		// $this->db->query("DELETE  FROM customer WHERE id='$id'");
		if($page!='customer'){
			$this->db->query("UPDATE meal_items SET meal_item_valid_bit='1' WHERE meal_item_id='$id'");
		}else{
			$this->db->query("UPDATE cust_users SET cust_valid_bit='1' WHERE cust_id='$id'");
		}
		// $this->db->where("id",$id);
		// $this->db->delete("customer");
	
	}

	//get the single data row to be shawn at the update form
	function fetch_single_data($user_id,$page){
		if($page!='customer'){
			$query=$this->db->query("SELECT * FROM meal_items WHERE meal_item_id='$user_id'");
			
		}else{
			$query=$this->db->query("SELECT * FROM cust_users WHERE cust_id='$user_id'");
		}
		return $query;

	}
	//update the data when update is come from the update form
	function update_data($user_id,$page,$data){
		
		if($page!='customer'){
			$this->db->where('meal_item_id', $user_id);
			$this->db->update('meal_items', $data);
		}else{
			$this->db->where('cust_id',$user_id);
			$this->db->update('cust_users',$data);
		}
	}


	
}
?>