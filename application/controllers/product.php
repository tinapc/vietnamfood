<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends Front_Controller
{
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{

	}

	public function category($slug = null)
	{
		$data = array();
		$this->template->build('product/category', $data);
	}

	public function view($id = null, $slug=null)
	{
		$data = array();
		$this->template->build('product/view', $data);	
	}
}