<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Widget extends MX_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function general_main_nav()
	{
		$data['data_nav_introduc'] = $this->load->get_var('data_nav_introduc');
		$data['data_nav_cate_news'] = $this->load->get_var('data_nav_cate_news');
		$data['data_nav_cate_service'] = $this->load->get_var('data_nav_cate_service');
		$data['data_nav_whychoseeTD'] = $this->load->get_var('data_nav_whychoseeTD');

		//print_r($data['data_nav']);

		$this->load->view('widget/general_main_nav', $data);	
	}

	public function partner(){
		$data['partners'] = $this->load->get_var('partners');
		$data['total'] = count($data['partners']);
		$this->load->view('widget/partner', $data);
	}

	public function support(){
		$data['supports'] = $this->load->get_var('supports');
		$this->load->view('widget/support', $data);
	}

}

/* End of file widget.php */
/* Location: ./application/controllers/widget.php */