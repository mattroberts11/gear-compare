<?php
class Products extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//$this->output->enable_profiler(TRUE);
		$this->load->model('products_model');
		$this->load->model('nav_model');
		$this->load->model('merchants_model');
		parse_str($_SERVER['QUERY_STRING'],$_GET); 
	}
	
	public function index()
	{
				
		$data['title'] = 'Outdoor Gear Deals and Sales on Gear and Clothing by The North Face, Mountain Hardwear, Arc\' Teryx & Other Top Brands- GearCompare.com';
		
		$this->load->view('templates/header', $data);
		$this->load->view('products/home', $data);
		$this->load->view('templates/footer');
	}
	
	public function all()  
	{	//ALL PRODUCTS
		//$this->output->enable_profiler(TRUE);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/products/index/';
		$config['total_rows'] = $this->db->get('bc_products')->num_rows();
		$config['per_page'] = 30; 
		$config['num_links'] = 10;
		$config['full_tag_open'] = '
<div class="pagination">';
  $config['full_tag_close'] = '</div>
';
			
		$this->pagination->initialize($config);
		
		$data['left_nav'] = $this->nav_model->get_left_nav();
		$data['products'] = $this->products_model->all_get_products($config['per_page'], $this->uri->segment(3));
		
		$data['title'] = 'All Products';
		
		$this->load->view('templates/header', $data);
		$this->load->view('products/index', $data);
		$this->load->view('templates/footer');
	}
	
	public function detail($SKU)
	{
		//$this->output->enable_profiler(TRUE);
		//$data['products'] = $this->products_model->get_products($SKU);
		
		$data['products_item'] = $this->products_model->get_products($SKU);
		$data['merchant'] = $this->merchants_model->get_merchant_by_id($merchid = 2);

		if (empty($data['products_item']))
		{
			show_404();
		}
	
		$data['title'] = $data['products_item']['ProductName']. ' On Sale at GearCompare.com';
		
		$this->load->view('templates/header', $data);
		$this->load->view('products/product_detail', $data);
		$this->load->view('templates/footer');
	}
	
	public function category($category)
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/products/category/index/';
		$config['total_rows'] = $this->db->get('bc_products')->num_rows();
		$config['per_page'] = 45; 
		$config['num_links'] = 8;
		$config['full_tag_open'] = '
<div class="pagination">';
  $config['full_tag_close'] = '</div>
';
			
		$this->pagination->initialize($config);
		
		$category = $this->uri->segment(3);
		
		if(isset($category)){
			
			switch($category) {
				
				case "hiking-camping-gear":
					$category = "Hiking & Camping Gear";
					break;
					
				case "kids":
					$category = "Kids'";
					break;
						
				case "mens-clothing":
					$category = "Men's Clothing";
					break;
					
				case "trail-run":
					$category = "Trail Run";
					break;
					
				case "womens-clothing":
					$category = "Women's Clothing";
					break;
			
			}//switch
		}//if
		
		$data['title'] = ucwords($category). ' On Sale at GearCompare.com';
		$data['left_nav'] = $this->nav_model->get_category_left_nav($category);
		$data['main_cat_nav'] = $this->nav_model->get_left_nav();
		$data['cat'] = $this->products_model->get_product_by_category($category, $config['per_page'], $category = $this->uri->segment(4));
		
		if (empty($data['cat']))
		{
			$message = '
					<div id="body">
					
					<p style="text-align:center"><img src="/images/gc_logoTransBG2.png" width="200"/></p>
					<h2>Dang...we messed up!</h2>
					  <p>The page you are looking has been moved because we\'re trying to make the site better and faster for you.</p>
					  <p>We\'d love for you to continue enjoying yourself so go back here:</p>
					  <code><a href="http://www.gearcompare.com">GearCompare.com Home</a></code>
					  <p>If you are exploring GearCompare.com for the very first time, welcome and please do come back as we are updating the site to make it better almost daily!  If your a returning user you know we love you!</p><p>  Thanks for stopping by:  Matt R. (Head Nerdy Outdoor Guy with Computer Skills that likes dogs) </p><p><a href="http://www.facebook.com/gearcomparedeals.com">Like Us On Facebook</a>.</p>
					</div>';
				
				show_error($message);
		}
		
		$this->load->view('templates/header', $data);
		$this->load->view('products/product_category', $data);
		$this->load->view('templates/footer');
		
	}
	
	public function subcat($subcat)
	{
		//$this->output->enable_profiler(TRUE);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/products/subcat/index/';
		$config['total_rows'] = $this->db->get('bc_products')->num_rows();
		$config['per_page'] = 45; 
		$config['num_links'] = 8;
		$config['full_tag_open'] = '
<div class="pagination">';
  $config['full_tag_close'] = '</div>
';
			
		$this->pagination->initialize($config);
		
		$category = $this->uri->segment(3);
		//clean up category for query
		if(isset($category)){
			
			switch($category) {
				
				case "hiking-camping-gear":
					$category = "Hiking & Camping Gear";
					break;
					
				case "kids":
					$category = "Kids'";
					break;
						
				case "mens-clothing":
					$category = "Men's Clothing";
					break;
					
				case "trail-run":
					$category = "Trail Run";
					break;
					
				case "womens-clothing":
					$category = "Women's Clothing";
					break;
			
			}//switch
		}//if
			
		$subcat = $_GET['subcat'];
		$subcatURI = $this->uri->segment(4);
		
		switch($subcatURI) {
				
				case "bike-electronics-lighting":
					$subcat = "Bike Electronics & Lighting";
					break;
				
				case "bike-helmets-protection":
					$subcat = "Bike Helmets & Protection";
					break;
				
				case "bike-pumps-inflation":
					$subcat = "Bike Pumps & Inflation";
					break;
					
				case "handlebars-stems":
					$subcat = "Handlebars & Stems";
					break;
				
				case "nutrition-body-care":
					$subcat = "Nutrition & Body Care";
					break;
					
				case "saddles-seatposts":
					$subcat = "Saddles & Seatposts";
					break;
					
				case "tires-tubes":
					$subcat = "Tires & Tubes";
					break;
				
				case "wheel-parts-accessories":
					$subcat = "Wheel Parts & Accessories";
					break;
				
				case "wheels-wheelsets":
					$subcat = "Wheels & Wheelsets";
					break;
		}//switch
		
		$data['title'] = ucwords($subcat). ' On Sale at GearCompare.com';
		
		$data['left_nav'] = $this->nav_model->get_sub_category_left_nav($category, $subcat);
		
		$data['subcat'] = $this->products_model->get_product_by_sub_category($category, $subcat, $config['per_page'], $category = $this->uri->segment(4));
					
			if (empty($data['subcat']))
			{
				
				$message = '
					<div id="body">
					
					<p style="text-align:center"><img src="/images/gc_logoTransBG2.png" width="200"/></p>
					<h2>Dang...we messed up!</h2>
					  <p>The page you are looking has been moved because we\'re trying to make the site better and faster for you.</p>
					  <p>We\'d love for you to continue enjoying yourself so go back here:</p>
					  <code><a href="http://www.gearcompare.com">GearCompare.com Home</a></code>
					  <p>If you are exploring GearCompare.com for the very first time, welcome and please do come back as we are updating the site to make it better almost daily!  If your a returning user you know we love you!</p><p>  Thanks for stopping by:  Matt R. (Head Nerdy Outdoor Guy with Computer Skills that likes dogs) </p><p><a href="http://www.facebook.com/gearcomparedeals.com">Like Us On Facebook</a>.</p>
					</div>';
				
				show_error($message);
			}
		
		$this->load->view('templates/header', $data);
		$this->load->view('products/product_sub_category', $data);
		$this->load->view('templates/footer');
		
	}

	public function group($group)
	{
		//$this->output->enable_profiler(TRUE);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/products/subcat/index/';
		$config['total_rows'] = $this->db->get('bc_products')->num_rows();
		$config['per_page'] = 45; 
		$config['num_links'] = 8;
		$config['full_tag_open'] = '
<div class="pagination">';
  $config['full_tag_close'] = '</div>
';
			
		$this->pagination->initialize($config);
		
		$category = $this->uri->segment(3);
		//clean up category for query
		if(isset($category)){
			
			switch($category) {
				
				case "hiking-camping-gear":
					$category = "Hiking & Camping Gear";
					break;
					
				case "kids":
					$category = "Kids'";
					break;
						
				case "mens-clothing":
					$category = "Men's Clothing";
					break;
					
				case "trail-run":
					$category = "Trail Run";
					break;
					
				case "womens-clothing":
					$category = "Women's Clothing";
					break;
			
			}//switch
		}//if
		
		$subcat = $_GET['subcat'];
		$subcatURI = $this->uri->segment(4);
		
		switch($subcatURI) {
				
				case "bike-electronics-lighting":
					$subcat = "Bike Electronics & Lighting";
					break;
				
				case "bike-helmets-protection":
					$subcat = "Bike Helmets & Protection";
					break;
				
				case "bike-pumps-inflation":
					$subcat = "Bike Pumps & Inflation";
					break;
					
				case "handlebars-stems":
					$subcat = "Handlebars & Stems";
					break;
				
				case "nutrition-body-care":
					$subcat = "Nutrition & Body Care";
					break;
					
				case "saddles-seatposts":
					$subcat = "Saddles & Seatposts";
					break;
					
				case "tires-tubes":
					$subcat = "Tires & Tubes";
					break;
				
				case "wheel-parts-accessories":
					$subcat = "Wheel Parts & Accessories";
					break;
				
				case "wheels-wheelsets":
					$subcat = "Wheels & Wheelsets";
					break;
					
				
		}//switch
		
		$groupURI = $this->uri->segment(5);		
		$group = $_GET['group'];
		switch($groupURI) {
				
				case "expedition-packs-5000-cu-in":
					$group = "Expedition Packs (5000+ cu in)";
					break;
				
				case "mens-down-synthetic-pants":
					$group = "Men's Down & Synthetic Pants";
					break;
			}
		
		$data['title'] = ucwords($group).' On Sale at GearCompare.com';
		$data['left_nav'] = $this->nav_model->get_sub_category_left_nav($category, $subcat);
		
		$data['group'] = $this->products_model->get_product_by_group($category, $subcat, $group, $config['per_page'], $category = $this->uri->segment(4));
		 
		
		
			
		if (empty($data['group']))
		{
			$message = '
					<div id="body">
					
					<p style="text-align:center"><img src="/images/gc_logoTransBG2.png" width="200"/></p>
					<h2>Dang...we messed up!</h2>
					  <p>The page you are looking has been moved because we\'re trying to make the site better and faster for you.</p>
					  <p>We\'d love for you to continue enjoying yourself so go back here:</p>
					  <code><a href="http://www.gearcompare.com">GearCompare.com Home</a></code>
					  <p>If you are exploring GearCompare.com for the very first time, welcome and please do come back as we are updating the site to make it better almost daily!  If your a returning user you know we love you!</p><p>  Thanks for stopping by:  Matt R. (Head Nerdy Outdoor Guy with Computer Skills that likes dogs) </p><p><a href="http://www.facebook.com/gearcomparedeals.com">Like Us On Facebook</a>.</p>
					</div>';
				
				show_error($message);
		}
		$this->load->view('templates/header', $data);
		$this->load->view('products/product_group', $data);
		$this->load->view('templates/footer');
		
	}

	public function brand($brand)
	{
		//$this->output->enable_profiler(TRUE);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/products/subcat/index/';
		$config['total_rows'] = $this->db->get('bc_products')->num_rows();
		$config['per_page'] = 45; 
		$config['num_links'] = 8;
		$config['full_tag_open'] = '
<div class="pagination">';
  $config['full_tag_close'] = '</div>
';
			
		$this->pagination->initialize($config);
		
		$brand = str_replace('-',' ', $this->uri->segment(3));
		
		switch($brand) {
				
				case "arcteryx":
					$brand = "Arc'Teryx";
					break;
				
				case "ocean-earth":
					$brand = "Ocean & Earth";
					break;
					
				case "xcel-hawaii-inc":
					$brand = "XCEL HAWAII, INC";
					break;
			
			}//switch
		
		
		$data['title'] = ucwords($brand).' On Sale at GearCompare.com';
		$data['left_nav'] = $this->nav_model->get_brand_left_nav($brand);
		$data['brand'] = $this->products_model->get_product_by_brand($brand, $config['per_page'], $this->uri->segment(4));
		
		if (empty($data['brand']))
		{
		$message = '
					<div id="body">
					
					<p style="text-align:center"><img src="/images/gc_logoTransBG2.png" width="200"/></p>
					<h2>Dang...we messed up!</h2>
					  <p>The page you are looking has been moved because we\'re trying to make the site better and faster for you.</p>
					  <p>We\'d love for you to continue enjoying yourself so go back here:</p>
					  <code><a href="http://www.gearcompare.com">GearCompare.com Home</a></code>
					  <p>If you are exploring GearCompare.com for the very first time, welcome and please do come back as we are updating the site to make it better almost daily!  If your a returning user you know we love you!</p><p>  Thanks for stopping by:  Matt R. (Head Nerdy Outdoor Guy with Computer Skills that likes dogs) </p><p><a href="http://www.facebook.com/gearcomparedeals.com">Like Us On Facebook</a>.</p>
					</div>';
				
				show_error($message);
		}
		
		$this->load->view('templates/header', $data);
		$this->load->view('products/product_brand', $data);
		$this->load->view('templates/footer');
		
	}
//===================TO DO=================================//		
	public function allbrands()
	{
		$this->load->view('templates/header', $data);
		$this->load->view('products/product_group', $data);
		$this->load->view('templates/footer');
		
	}
	



} 