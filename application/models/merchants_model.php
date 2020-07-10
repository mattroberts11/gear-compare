<?php
class Merchants_model extends CI_Model {

	
	public function __construct()
	{
		//$this->load->database();
		//$prodid = 0;
	
	}
	
	public function get_merchant_by_id($merchid)
	{
		$query = $this->db->get_where('merchants',array('merchid' => $merchid));
		return $query->result_array();
	}
}