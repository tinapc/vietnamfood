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

		// Introducton
		$data['introduc'] = $this->resource->get_by(array('id' => 151), array('title', 'title_en', 'intro', 'intro_en', 'alias'));
		// Promotion
		$data['promotion'] = $this->resource->get_by(array('id' => 152), array('title', 'title_en', 'image'));

		$seo = array(
			'seo_keyword'	=> $this->load->get_var('seo_k_home'),
			'seo_description'	=> $this->load->get_var('seo_desc_home'),
			'seo_image'	=>  base_url().'assets/front/images/logo.png'
		);
		$this->load->vars($seo);

		// Get category product
		$this->db->select(array('title', 'title_en', 'intro', 'intro_en', 'image', 'alias', 'id'));
		$this->db->where(array('show_home' => 1, 'published' => 1, 'content_type' => 'cate_product'));
		$this->db->order_by('id', 'desc');
		$cates = $this->db->get('resource')->result();
		
		$this->template->title($this->load->get_var('site_name'));
		$this->template->set(array('s_lang' => $this->s_lang, 'cates' => $cates));
		$this->template->build('welcome_index', $data);
	}

	public function changeLang()
	{
		$l = $this->input->get('l');
		$this->session->set_userdata('site_lang', $l);
		echo json_encode(array('status' => true));
	}

	public function order_email()
	{
		$this->load->library('email');

		$data = array(
			'product_name' => $this->input->post('order_product_name'),
			'fullname'	=> $this->input->post('order_fullname'),
			'phone'	=> $this->input->post('order_phone'),
			'address'	=> $this->input->post('order_address'),
			'email'	=> $this->input->post('order_email'),
			'message'	=> $this->input->post('order_message')
		);

		$this->email->from($data['email'], $data['fullname']);
		$this->email->to($this->load->get_var('admin_email'));
		
		$this->email->subject('Thông tin đặt hàng');
		$this->email->message($this->load->view('order_email', $data, TRUE));
		$this->email->set_alt_message('Thông tin đặt hàng');

		if ($this->email->send())
		{
			echo json_encode(array('status' => true));
		} else {
			echo json_encode(array('status' => false));
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */