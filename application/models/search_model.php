<?php 

class Search_model extends CI_Model 
{

	
	public function __construct()
	{
		//$this->load->database();
	}
	
	public function search($terms)
	{
	   //$cleanTerms = $this->security->xss_clean($terms);
		// Execute our SQL statement and return the result
        $sql = "SELECT *
                    FROM bc_products
                    WHERE MATCH (BrandName, ProductName, LongDescription, ShortDescription, Category, SubCategory, ProductGroup, Keywords) AGAINST (?) > 0 LIMIT 100";
        $query = $this->db->query($sql, array($terms, $terms));
        return $query->result();
	}
    
}
