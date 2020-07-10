<?php 
class Nav_model extends CI_Model {

	
	public function __construct()
	{
		//$this->load->database();
	
	}

	public function get_breadcrumbs()
	{
		$query = $this->db->get('products');
			return $query->result();
	}
	
	public function get_left_nav()
	{
		$query = $this->db->query("SELECT DISTINCT Category FROM bc_products ORDER BY Category ASC");
			return $query->result_array();
	}
	
	public function get_category_left_nav($category)
	{
		$query = $this->db->query("SELECT DISTINCT SubCategory FROM bc_products WHERE Category = ".$this->db->escape($category)." ORDER BY SubCategory ASC");
			return $query->result_array();
	}
	//category nav subcategory counter
	public function get_category_left_nav_count($category, $subcat)
	{
		$query = $this->db->query('SELECT * FROM bc_products WHERE Category = "'.$category.'" AND SubCategory = "'.$subcat.'"');
			return $query->num_rows();
	}
	
	
	
	public function get_sub_category_left_nav($category, $subcat)
	{
		$query = $this->db->query("SELECT DISTINCT Category, SubCategory, ProductGroup FROM bc_products WHERE Category =".$this->db->escape($category)." AND SubCategory = ".$this->db->escape($subcat)." ORDER BY ProductGroup ASC");
			return $query->result_array();
	}
	public function get_brand_left_nav($brand)
	{
		$query = $this->db->query('SELECT DISTINCT Category, SubCategory, ProductGroup FROM bc_products WHERE BrandName = "'.$brand.'" ORDER BY SubCategory ASC');
			return $query->result_array();
	}
	
}