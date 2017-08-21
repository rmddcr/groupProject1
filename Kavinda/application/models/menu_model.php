<?php

class menu_model extends CI_model {

	public function __construct()
	{
        parent::__construct();
		$this->load->database();
	}

	public function get_menu()
	{
		$query = $this->db->get('foods');
        return $query->result_array();
	}
}




?>