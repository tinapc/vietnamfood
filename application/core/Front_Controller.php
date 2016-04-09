<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front_Controller extends MX_Controller {

	//public $s_lang = '';

	public function __construct(){
		parent::__construct();

		// Language load
		$site_lang = $this->session->userdata('site_lang');

		if($site_lang)
		{
			$this->s_lang = $site_lang;
			$this->lang->load('general', $this->s_lang);
		} else {
			$this->s_lang = 'vi';
			$this->lang->load('general', $this->s_lang);
		}

		// Load lib conuter
		$this->load->library('counter');
		$this->counter->init();

		// Load helper
		$this->load->helper(array('text'));
		$this->load->helper('common');

		// Load model 
		$this->load->model('resource/resource_model', 'resource');
		$this->load->model('dashboard_model', 'configs');
		$this->load->model('partner/partner_model', 'partner');
		$this->load->model('support/support_model', 'support');

		// Get variable using for whole the site
		$configs = $this->configs->get(1, '');
		$this->load->vars(unserialize($configs->general));
		$this->load->vars(unserialize($configs->social));

		// Data for Main nav
		/*$fields = array(
			'id', 'title', 'menu_title', 'alias', 'content_type', 'link_attr', 'external_link', 'icon','image', 'intro'
		);
		$data_nav_introduc = $this->resource->get_where(array('content_type =' => 'introduction', 'published' => 1, 'hide_from_menu' => 0 ), $fields, array('menu_index' => 'asc'));
		$data_nav_cate_news = $this->resource->get_where(array('content_type =' => 'cate_news', 'published' => 1, 'hide_from_menu' => 0 ), $fields, array('menu_index' => 'asc'));
		$data_nav_whychoseeTD = $this->resource->get_where(array('content_type =' => 'whychooseTD', 'published' => 1, 'hide_from_menu' => 0 ), $fields);
		$data_nav_cate_service = $this->resource->get_where(array('content_type =' => 'cate_service', 'published' => 1, 'hide_from_menu' => 0 ), $fields, array('menu_index' => 'asc'));

		$this->load->vars(array('data_nav_introduc' => $data_nav_introduc));
		$this->load->vars(array('data_nav_cate_news' => $data_nav_cate_news));
		$this->load->vars(array('data_nav_cate_service' => $data_nav_cate_service));
		$this->load->vars(array('data_nav_whychoseeTD' => $data_nav_whychoseeTD));

		// Partner
		$partners = $this->partner->get_where(array('published' => 1), '');
		$this->load->vars(array('partners' => $partners));

		//Gallery
		$gallerys = $this->resource->get_where(array('show_gallery' => '1', 'published' => 1 ), array('image', 'intro', 'alias', 'external_link', 'content_type'));
		$this->load->vars(array('gallerys' => $gallerys));*/

		// Support online
		$supports = $this->support->get_where(array('published' => 1), '');
		$this->load->vars(array('supports' => $supports));

		// Setting theme
		$this->template->set_partial('header', 'partial/header');
		$this->template->set_partial('footer', 'partial/footer');
		$this->template->set_partial('right', 'partial/right');
	}

}

/* End of file front_Controller.php */
/* Location: ./application/controllers/front_Controller.php */