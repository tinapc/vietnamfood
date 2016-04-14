<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front_Controller extends MX_Controller {

	public $s_lang = '';

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

		// Support online
		$supports = $this->support->get_where(array('published' => 1), '');
		$this->load->vars(array('supports' => $supports));

		// Setting theme
		$this->template->set_partial('header', 'partial/header');
		$this->template->set_partial('footer', 'partial/footer');
		//$this->template->set_partial('right', 'partial/right');
	}

}

/* End of file front_Controller.php */
/* Location: ./application/controllers/front_Controller.php */