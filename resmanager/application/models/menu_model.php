<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Menu_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();
 }
 function fetch_menu_data(){
    $query=$this->db->query("SELECT * FROM menu WHERE status=1  ");
    return $query;
  }
  public function add_menu()
 {
  $data= array(
      'category' => $this->input->post('category'),
      'itemname'  => $this->input->post('itemname'),
      'regularprice'    => $this->input->post('regularprice'),
      'largeprice'   => $this->input->post('largeprice'),
  );
  $insert = $this->db->insert('menu',$data);
  return $insert;
 }
}