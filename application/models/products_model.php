<?php
class Products_model extends CI_Model {

	
	public function __construct()
	{
		//$this->load->database();
	}
	
	public function get_products($SKU = FALSE)
	{
	  
		if ($SKU === FALSE)
		{
			$query = $this->db->get('bc_products',$num, $offset);
			return $query->result_array();
		}
		
		$query = $this->db->get_where('bc_products', array('SKU' => $SKU));
		
		return $query->row_array();
	}
	
	public function all_get_products($num, $offset) {
	
		$query = $this->db->get('bc_products',$num, $offset);
		return $query->result_array();
	}
	
	public function get_product_details()
	{
		$query = $this->db->get('bc_products');
		return $query->result();
	}
	
	public function get_product_by_category($category, $num, $offset)
	{
		//$query = $this->db->query("SELECT * FROM bc_products WHERE Category = ".$this->db->escape($category)." LIMIT 150");
		$query = $this->db->query('SELECT * FROM bc_products WHERE Category = "'.$category.'" LIMIT '.$offset.', '.$num.'');
			return $query->result_array();
	}
	
	public function get_product_category_count($category){
		$query = $this->db->query('SELECT * FROM bc_products WHERE Category = "'.$category.'"');
			return $query->num_rows();
	}
	
	public function get_product_by_sub_category($category, $subcat, $num, $offset)
	{   
		$query = $this->db->query("SELECT * FROM bc_products WHERE Category = ".$this->db->escape($category)." AND SubCategory = ".$this->db->escape($subcat)." LIMIT 150");
			return $query->result_array();
			
	}
	
	public function get_product_by_group($category, $subcat, $group, $num, $offset)
	{
		$query = $this->db->query("SELECT * FROM bc_products WHERE Category = ".$this->db->escape($category)." AND SubCategory = ".$this->db->escape($subcat)." AND ProductGroup = ".$this->db->escape($group)."");
			return $query->result_array();
	}
	
	public function get_product_by_brand($brand, $num, $offset)
	{   
		$query = $this->db->query('SELECT * FROM bc_products WHERE BrandName = "'.$brand.'" LIMIT 150');
			return $query->result_array();
			
	}
    
    public function get_related_products ($category, $subcat, $group)
    {
        $query = $this->db->query("SELECT * FROM bc_products WHERE Category = ".$this->db->escape($category)." AND SubCategory = ".$this->db->escape($subcat)." AND ProductGroup = ".$this->db->escape($group)." ORDER BY RAND() LIMIT 8");
            return $query->result_array();
    }
	
}
