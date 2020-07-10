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
				
		//$data['title'] = 'Outdoor Gear Deals and Sales on Gear and Clothing by The North Face, Mountain Hardwear, Arc\' Teryx & Other Top Brands- GearCompare.com';
		
		$this->load->view('templates/header', $data);
		$this->load->view('error_message', $data);
		$this->load->view('templates/footer');
	}
