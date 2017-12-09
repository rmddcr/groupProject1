<?php
class Main_model extends CI_Model{

	//insert data to the database name called 'meal_items'
	function insert_data($data,$tablename){
		$this->db->insert($tablename,$data);
	}

	//get data from the db to be shawn in the table
	function fetch_data($item_category){
		//select * form meals
		if($item_category=='meal_cat'){
			$query=$this->db->query("SELECT * FROM meal_cat");
		}
		else if($item_category!='customer'){
			$query=$this->db->query("SELECT * FROM meal_items WHERE meal_item_valid_bit='0' AND meal_item_cat='$item_category'");
		}else{
			//$query=$this->db->query("SELECT * FROM cust_users WHERE cust_valid_bit='0'");
			$query=$this->db->query("SELECT * FROM customer INNER JOIN cust_users ON   customer.cust_id=cust_users.cust_id AND customer.cust_valid_bit='0'");
		}
		return $query;
	}

	//delete the data 
	function delete_data($id,$table){
		// $this->db->query("DELETE  FROM customer WHERE id='$id'");
		if($table!='customer'){
			$this->db->query("UPDATE meal_items SET meal_item_valid_bit='1' WHERE meal_item_id='$id'");
		}else{
			$this->db->query("UPDATE customer SET cust_valid_bit='1' WHERE cust_id='$id'");
		}
		// $this->db->where("id",$id);
		// $this->db->delete("customer");
	
	}

	//get the single data row to be shawn at the update form
	function fetch_single_data($user_id,$page){
		if($page!='customer' ){
			$query=$this->db->query("SELECT * FROM meal_items WHERE meal_item_id='$user_id'");
			
		}else{
			$query=$this->db->query("SELECT * FROM customer INNER JOIN cust_users ON   customer.cust_id=cust_users.cust_id AND customer.cust_id='$user_id' ");
			// $get_email=$this->db->query("SELECT cust_email FROM customer WHERE cust_id='$user_id' ");
			// $q

			// $this->db->select('customer.*, cust_users.cust_password');
			// $this->db->from('customer');
			// $this->db->join('cust_users','customer.cust_email = cust_users.cust_email', 'left');
			// $query = $this->db->get();
		}
		return $query;

	}
	//update the data when update is come from the update form
	function update_data($user_id,$page,$data){
		
		if($page!='customer' and $page!='cust_users'){
			$this->db->where('meal_item_id', $user_id);
			$this->db->update('meal_items', $data);
		}else{
			if($page=='customer'){
				$this->db->where('cust_id',$user_id);
				$this->db->update('customer',$data);
			}else if($page=='cust_users'){
				$this->db->where('cust_id',$user_id);
				$this->db->update('cust_users',$data);
			}
			
		}
	}

	function get_id($customer_email){
		$query=$this->db->query("SELECT cust_id FROM customer WHERE cust_email='$customer_email'");
		// foreach ($query as $row){
		// 	$id = $row->cust_id;
		// }
		// echo $id;
		 return $query;

	}
	function get_cagtegoy($pagename){
		$query=$this->db->query("SELECT * FROM $pagename");
		return $query;
	}

	function delete_category_data($id,$meal_item_category){
		$query=$this->db->query("DELETE FROM $meal_item_category WHERE meal_cat_id='$id';");
	}

	
	
}
?>