<?php 

class mainmodel extends CI_Model{
	function can_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('system_user');

		if($query->num_rows()>0){
			return true;
		}
		else{
			return false;
		}
	}
}
?>