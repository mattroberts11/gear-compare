<?php
class Category extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('products_model');
		//$this->load->model('nav_model');
	}
	
	public function index()
	{
	
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/products/index/';
		$config['total_rows'] = $this->db->get('bc_products')->num_rows();
		$config['per_page'] = 30; 
		$config['num_links'] = 10;
		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';
			
		$this->pagination->initialize($config);
		
		$data['products'] = $this->products_model->all_get_products($config['per_page'], $this->uri->segment(3));
		
		$data['title'] = 'All Products';
		
		$this->load->view('templates/header', $data);
		$this->load->view('products/index', $data);
		$this->load->view('templates/footer');
	}
