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
		$cate = $this->db->get_where('resource', array('alias' => str_replace('_', '-',$slug)))->row();

		$breadcrumb = array(
			'Trang chủ'	=> '/',
			'Sản phẩm' => '/product/',
			$cate->title	=> ''
		);

		$data = array();
		$this->template->title($cate->title);
		$this->template->set(array('breadcrumb' => $breadcrumb));
		$this->template->build('product/category', $data);
	}

	public function view($id = null, $slug=null)
	{
		$data = array();

		$this->template->title('Xem san pham');
		$this->template->build('product/view', $data);	
	}
}