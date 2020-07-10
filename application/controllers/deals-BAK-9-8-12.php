<?php
class Deals extends CI_Controller {
	
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
				
		$data['title'] = 'Outdoor Gear Deals on The North Face, Mountain Hardwear, Arc\' Teryx & Other Top Brands | GearCompare.com';
		
		//Load the shiny new rssparse
        //$this->load->library('RSSParser', array('url' => 'http://thedeal.gearcompare.com/feed', 'life' => 0));
        //Get six items from the feed
        //$data['feed'] = $this->rssparser->getFeed(6);
        
		$this->load->view('templates/header', $data);
		$this->load->view('products/home', $data);
		$this->load->view('templates/footer');
	}
	
	public function all()  
	{	//ALL PRODUCTS
		//$this->output->enable_profiler(TRUE);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'deals/all/';
		$config['total_rows'] = $this->db->get('bc_products')->num_rows();
		$config['per_page'] = 45; 
		$config['uri_segment'] = '3'; 
		//$config['use_page_numbers'] = TRUE;
		$config['full_tag_open'] = '<div class="pagination">';
  		$config['full_tag_close'] = '</div>';
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['cur_tag_open'] = '<em>';
		$config['cur_tag_close'] = '</em>';
			
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
		
		$this->load->library('pagination');
		
		$config['base_url'] = base_url().'deals/category/'.$this->uri->segment(3);
		$config['total_rows'] = $this->products_model->get_product_category_count($category);
		$config['per_page'] = 45; 
		//$config['num_links'] = 8;
		$config['uri_segment'] = '4'; 
		//$config['use_page_numbers'] = TRUE;
		$config['full_tag_open'] = '<div class="pagination">';
  		$config['full_tag_close'] = '</div>';
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['cur_tag_open'] = '<em>';
		$config['cur_tag_close'] = '</em>';
			
		$this->pagination->initialize($config);
		
		$offset = $this->uri->segment(4);
		if ($offset === FALSE) {
			$offset = 0;
		}else{
			$offset = $this->uri->segment(4);
		}
		
		$data['title'] = ucwords($category). ' On Sale at GearCompare.com';
		$data['left_nav'] = $this->nav_model->get_category_left_nav($category);
		$data['main_cat_nav'] = $this->nav_model->get_left_nav();
		$data['cat'] = $this->products_model->get_product_by_category($category, $config['per_page'], $offset);
		
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
		
				case "bags-bike-cases":
					$subcat = "Bags & Bike Cases";
					break;
				
				case "bike-cleaners-lubricants":
					$subcat = "Bike Cleaners & Lubricants";
					break;
				
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
					
				case "mens-accessories":
					$subcat = "Men's Accessories";
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
				
				case "touring-accessories-racks":
					$subcat = "Touring Accessories & Racks";
					break;
				
				case "wheel-parts-accessories":
					$subcat = "Wheel Parts & Accessories";
					break;
				
				case "wheels-wheelsets":
					$subcat = "Wheels & Wheelsets";
					break;
		}//switch
		
		//$this->load->library('pagination');
		//****FOR PAGINATION TO WORK NEED TO USE SESSION'S FOR EACH SUBCATEGORY
		//$config['base_url'] = base_url().'deals/subcat/'.$this->uri->segment(3).'/'.$this->uri->segment(4);
		//$config['total_rows'] = $this->products_model->get_product_subcat_count($category, $subcategory);
		$config['per_page'] = 45; 
		/*$config['num_links'] = 8;
		$config['uri_segment'] = '5'; 
		$config['use_page_numbers'] = TRUE;
		$config['full_tag_open'] = '<div class="pagination">';
  		$config['full_tag_close'] = '</div>';
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['cur_tag_open'] = '<em>';
		$config['cur_tag_close'] = '</em>';
			
		$this->pagination->initialize($config);*/
		
		$offset = $this->uri->segment(4);
		if ($offset === FALSE) {
			$offset = 0;
		}else{
			$offset = $this->uri->segment(4);
		}
		$data['title'] = ucwords($subcat). ' On Sale at GearCompare.com';
		$data['metaDesc'] = ucwords($subcat). ' On Sale at GearCompare.com';
		$data['left_nav'] = $this->nav_model->get_sub_category_left_nav($category, $subcat);
		$data['main_cat_nav'] = $this->nav_model->get_left_nav();
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
		
				case "bike-cleaners-lubricants":
					$subcat = "Bike Cleaners & Lubricants";
					break;
				
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
					
				case "touring-accessories-racks":
					$subcat = "Touring Accessories & Racks";
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
				
				case "26-mountain-bike-tires":
					$group = "26\" Mountain Bike Tires";
					break;
				
				case "29-mountain-bike-tires":
					$group = "29\" Mountain Bike Tires";
					break;
				
				case "26-mountain-bike-wheels-wheelsets":
					$group = "26\" Mountain Bike Wheels & Wheelsets";
					break;
				
				case "29-mountain-bike-wheels-wheelsets":
					$group = "29\" Mountain Bike Wheels & Wheelsets";
					break;
				
				case "all-mountain-trail-bikes":
                    $group = "All-Mountain & Trail Bikes";
                    break;
                
				case "balaclavas-neck-gaiters":
					$group = "Balaclavas & Neck Gaiters";
					break;
				
				case "bottles-cages":
					$group = "Bottles & Cages";
					break;
				
				case "cleaners-degreasers":
					$group = "Cleaners & Degreasers";
					break;
					
				case "cycling-caps-hats":
					$group = "Cycling Caps & Hats";
					break;
                    
                case "downhill-freeride-bikes":
                    $group = "Downhill & Freeride Bikes";
                    break;
				
				case "headbands-scarves":
					$group = "Headbands & Scarves";
					break;
					
				case "lubricants-grease":
					$group = "Lubricants & Grease";
					break;
				
				case "expedition-packs-5000-cu-in":
					$group = "Expedition Packs (5000+ cu in)";
					break;
				
				case "mens-down-synthetic-pants":
					$group = "Men's Down & Synthetic Pants";
					break;
					
				case "skewers-axles":
					$group = "Skewers & Axles";
					break;
				
				case "ski-boot-bags":
					$group = "Ski & Boot Bags";
					break;
					
				case "slings-messenger-bags":
					$group = "Slings & Messenger Bags";
					break;
			}
		
		$data['title'] = ucwords($group).' On Sale at GearCompare.com';
		$data['left_nav'] = $this->nav_model->get_sub_category_left_nav($category, $subcat);
		$data['main_cat_nav'] = $this->nav_model->get_left_nav();
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
		$brandURI = $this->uri->segment(3);
		switch($brandURI) {
				
				case "arcteryx":
					$brand = "Arc'Teryx";
					break;
				
				case "brooks-range":
					$brand = "Brooks-Range";
					break;
					
				case "bogner-fireice":
					$brand = "Bogner - Fire+Ice";
					break;
					
				case "conformable":
					$brand = "Conform'able";
					break;
				
				case "life-link":
					$brand = "Life-Link";
					break;
				
				case "ocean-earth":
					$brand = "Ocean & Earth";
					break;
				
				case "rhino-rack":
					$brand = "Rhino-Rack";
					break;
				
				case "Therm-a-Rest":
					$brand = "Therm-a-Rest";
					break;
				
				case "wright-mcgill-co":
					$brand = "Wright & McGill Co.";
					break;
					
				case "xcel-hawaii-inc":
					$brand = "XCEL HAWAII, INC";
					break;
					
				case "zero-rh":
					$brand = "Zero RH +";
					break;
			
			}//switch
		
		
		$data['title'] = ucwords($brand).' On Sale at GearCompare.com';
		$data['left_nav'] = $this->nav_model->get_brand_left_nav($brand);
		$data['brand'] = $this->products_model->get_product_by_brand($brand, $config['per_page'], $this->uri->segment(4));
		
		/*if (empty($data['brand']))
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
		}*/
		
		$this->load->view('templates/header', $data);
		$this->load->view('products/product_brand', $data);
		$this->load->view('templates/footer');
		
	}
	
	/*public function searchOLD($search_terms = '') {
	    
        $this->output->enable_profiler(TRUE);
		// If the form has been submitted, rewrite the URL so that the search
        // terms can be passed as a parameter to the action. Note that there
        // are some issues with certain characters here.
        if ($this->input->post('q'))
        {
            redirect('/deals/search/' . $this->input->post('q'));
        }
 
        if ($search_terms)
        {
            // Load the model and perform the search
            $this->load->model('search_model');
            $results = $this->search_model->search($search_terms);
        }
        $data['title'] = 'Search Results';
        $data['main_cat_nav'] = $this->nav_model->get_left_nav();

        $this->load->view('templates/header', $data);
        // Render the view, passing it the necessary data
        $this->load->view('search_results', array(
            'search_terms' => $search_terms,
            'results' => @$results
        ));
        $this->load->view('templates/footer');
       
	}*/
	public function search($search_terms = '') {
	    $search_terms = $_GET['q'];
		
        $this->output->enable_profiler(TRUE);
		 
        if ($search_terms)
        {
            // Load the model and perform the search
            $this->load->model('search_model');
            $results = $this->search_model->search($search_terms);
        }
        $data['title'] = 'Search Results';
        $data['main_cat_nav'] = $this->nav_model->get_left_nav();

        $this->load->view('templates/header', $data);
        // Render the view, passing it the necessary data
        $this->load->view('search_results', array(
            'search_terms' => $search_terms,
            'results' => @$results
        ));
        $this->load->view('templates/footer');
       
	}
//===================TO DO=================================//		
	public function allbrands()
	{
		$this->load->view('templates/header', $data);
		$this->load->view('products/product_group', $data);
		$this->load->view('templates/footer');
		
	}
	
    public function backcountry(){
        
        $data['main_cat_nav'] = $this->nav_model->get_left_nav();
        $data['title'] = 'Backcountry.com Coupons, Sales and Deals of the Day';
        
        $this->load->view('templates/header', $data);
        $this->load->view('stores/stores_backcountry', $data);
        $this->load->view('templates/footer');
    }

    public function altrec(){
        
        $data['main_cat_nav'] = $this->nav_model->get_left_nav();
        $data['title'] = 'Altrec.com Coupons, Sales and Deals of the Day';
        
        $this->load->view('templates/header', $data);
        $this->load->view('stores/stores_altrec', $data);
        $this->load->view('templates/footer');
    }
    
    public function rei(){
        
        $data['main_cat_nav'] = $this->nav_model->get_left_nav();
        $data['title'] = 'REI Coupons, Sales and Deals of the Day';
        
        $this->load->view('templates/header', $data);
        $this->load->view('stores/stores_rei', $data);
        $this->load->view('templates/footer');
    }
    
    public function campsaver(){
        
        $data['main_cat_nav'] = $this->nav_model->get_left_nav();
        $data['title'] = 'Campsaver.com Coupons, Sales and Deals of the Day';
        
        $this->load->view('templates/header', $data);
        $this->load->view('stores/stores_campsaver', $data);
        $this->load->view('templates/footer');
    }
    
    public function moosejaw(){
        
        $data['main_cat_nav'] = $this->nav_model->get_left_nav();
        $data['title'] = 'Moosejaw.com Coupons, Sales and Deals of the Day';
        
        $this->load->view('templates/header', $data);
        $this->load->view('stores/stores_moosejaw', $data);
        $this->load->view('templates/footer');
    }
    
    public function quiksilver(){
        
        $data['main_cat_nav'] = $this->nav_model->get_left_nav();
        $data['title'] = 'Quiksilver Coupons, Sales and Deals of the Day';
        
        $this->load->view('templates/header', $data);
        $this->load->view('stores/stores_quiksilver', $data);
        $this->load->view('templates/footer');
    }
    public function patagonia(){
        
        $data['main_cat_nav'] = $this->nav_model->get_left_nav();
        $data['title'] = 'Patagonia Coupons, Sales and Deals of the Day';
        
        $this->load->view('templates/header', $data);
        $this->load->view('stores/stores_patagonia', $data);
        $this->load->view('templates/footer');
    }

} 