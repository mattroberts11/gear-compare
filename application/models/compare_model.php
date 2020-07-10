<?php
class Compare_model extends CI_Model {

    
    public function __construct()
    {
        //$this->load->database();
    }
    
    public function compare_altrec($brand, $prodName)
    {   
        $query = $this->db->query('SELECT * FROM altrec_products WHERE BrandName = "'.$brand.'" 
        AND MATCH ProductName 
        AGAINST ("'.$prodName.'" IN BOOLEAN MODE) > 4.80 LIMIT 3');
    
        return $query->result_array();    
    }
    
    public function compare_altrec_outlet($brand, $prodName)
    {   
        $query = $this->db->query('SELECT * FROM altrec_outlet_products WHERE BrandName = "'.$brand.'" 
        AND MATCH ProductName 
        AGAINST ("'.$prodName.'" IN BOOLEAN MODE) > 4.80 LIMIT 3');
    
        return $query->result_array();    
    }
    
    public function compare_campsaver($brand, $prodName)
    {   
        $query = $this->db->query('SELECT * FROM altrec_outlet_products WHERE BrandName = "'.$brand.'" 
        AND MATCH ProductName 
        AGAINST ("'.$prodName.'" IN BOOLEAN MODE) > 4.80 LIMIT 3');
    
        return $query->result_array();    
    }
    
    public function compare_dept_of_goods($brand, $prodName)
    {   
        $query = $this->db->query('SELECT * FROM dept_of_goods_products WHERE BrandName = "'.$brand.'" 
        AND MATCH ProductName 
        AGAINST ("'.$prodName.'" IN BOOLEAN MODE) > 4.80 LIMIT 3');
    
        return $query->result_array();    
    }
    
    public function compare_moosejaw($brand, $prodName)
    {   
        $query = $this->db->query('SELECT * FROM moosejaw_products WHERE BrandName = "'.$brand.'" 
        AND MATCH ProductName 
        AGAINST ("'.$prodName.'" IN BOOLEAN MODE) > 4.80 LIMIT 3');
    
        return $query->result_array();    
    }
    
    public function compare_patagonia($brand, $prodName)
    {   
        $query = $this->db->query('SELECT * FROM patagonia_products WHERE BrandName = "'.$brand.'" 
        AND MATCH ProductName 
        AGAINST ("'.$prodName.'" IN BOOLEAN MODE) > 4.80 LIMIT 3');
    
        return $query->result_array();    
    }
    
    public function compare_quicksilver($brand, $prodName)
    {   
        $query = $this->db->query('SELECT * FROM quicksilver_products WHERE BrandName = "'.$brand.'" 
        AND MATCH ProductName 
        AGAINST ("'.$prodName.'" IN BOOLEAN MODE) > 4.80 LIMIT 3');
    
        return $query->result_array();    
    }
    
    public function compare_rei($brand, $prodName)
    {   
        $query = $this->db->query('SELECT * FROM rei_products WHERE BrandName = "'.$brand.'" 
        AND MATCH ProductName 
        AGAINST ("'.$prodName.'" IN BOOLEAN MODE) > 4.80 LIMIT 3');
    
        return $query->result_array();    
    }
    
    
}