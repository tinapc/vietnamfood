<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends MX_Controller {

	public function __construct()
	{
		parent::__construct();

		// Make sure the User was loggned
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}

		// Setting for admin themes
		define('ADMIN_ASSETS', base_url().'assets/admin/');
		define('ADMIN_CSS', '../assets/admin/css/');
		define('ADMIN_IMG', '../assets/admin/images');
		define('ADMIN_JS', '../assets/admin/js/');
		define('ADMIN_URL', base_url().'manager/');


		// Resources
		$this->load->model('resource/resource_model', 'resource');
		$_getContentType = $this->input->get('contentType');

		$prepare['resoucesIntro'] = $this->resource->get_where(array('content_type' => $_getContentType), array('id', 'title', 'content_type', 'created_at', 'updated_at', 'published', 'parent', 'menu_index'));

		// Category News
		$prepare['resoucesCateNews'] = $this->resource->get_where(array('content_type' => 'cate_news'), array('id', 'title', 'content_type', 'created_at', 'updated_at', 'published', 'menu_index'));

		// Services Category
		$prepare['resoucesCateServices'] = $this->resource->get_where(array('content_type' => 'cate_service'), array('id', 'title', 'content_type', 'created_at', 'updated_at', 'published', 'menu_index'));

		// Services Category
		$prepare['resoucesCateProducts'] = $this->resource->get_where(array('content_type' => 'cate_product'), array('id', 'title', 'content_type', 'created_at', 'updated_at', 'published', 'parent' , 'menu_index'));

		$this->load->vars($prepare);

		$this->template->set_theme('admin');
		$this->template->set_partial('header', 'partial/header');
        $this->template->set_partial('footer', 'partial/footer');
        $this->template->set_partial('menu_left', 'partial/menu_left');
        $this->template->set_partial('breadcrum', 'partial/breadcrum');
	}

}

/* End of file admin_controller.php */
/* Location: ./application/core/admin_controller.php */