<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends Front_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		// Load model resource
		$this->load->model('resource/resource_model', 'resource');

		// Data for Main nav
		$fields = array(
			'id', 'title', 'menu_title', 'alias', 'content_type', 'link_attr', 'external_link', 'icon'
		);
		//$data['data_nav_cate_service'] = $this->resource->get_where(array('content_type =' => 'cate_service', 'published' => 1 ), $fields);

		// Introducton
		$data['introduc'] = $this->resource->get_by(array('content_type' => 'introduction', 'is_default' => 1, 'published' => 1), array('title', 'intro', 'alias'));

		$seo = array(
			'seo_keyword'	=> $this->load->get_var('seo_k_home'),
			'seo_description'	=> $this->load->get_var('seo_desc_home'),
			'seo_image'	=>  base_url().'assets/front/images/logo.png'
		);
		$this->load->vars($seo);
		
		$this->load->vars(array('title' => $this->load->get_var('site_name')));
		$this->template->build('welcome_index', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */