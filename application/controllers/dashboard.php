<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

	public function __construct(){
		parent::__construct();

		// Load lib conuter
		$this->load->library('counter');
		$this->counter->init();
	}

	public function index()
	{
		$this->load->vars(array('title'=>'Dashboard'));
		//$this->template->set('body', $data);

		$this->db->select('config_online');
		$re = $this->db->get_where('configs', array('id' => 1));
		$row = $re->row();

		$this->template->set('config_online', explode(',', unserialize($row->config_online)));

		$this->template->build('dashboard/index');
	}

	public function config(){
		$this->load->model('dashboard_model', 'dashboard');

		if($this->input->post()) {
			
			$general = array(
				'site_name'			=> $this->input->post('site_name'),
				'company_address'	=> $this->input->post('company_address'),
				'phone'				=> $this->input->post('phone'),
				'seo_k_home'	=> $this->input->post('seo_k_home'),
				'seo_desc_home'				=> $this->input->post('seo_desc_home'),
				//'video_td'			=> $this->input->post('video_td'),
				'company_name'			=> $this->input->post('company_name'),
				'fax'			=> $this->input->post('fax'),
				'hotline'			=> $this->input->post('hotline'),
				'website'			=> $this->input->post('website'),
				'email'			=> $this->input->post('email'),
				'admin_email'			=> $this->input->post('admin_email')
			);
			$social = array(
				'facebook'			=> $this->input->post('facebook'),
				'twitter'			=> $this->input->post('twitter'),
				//'rss'			=> $this->input->post('rss'),
				'youtube'			=> $this->input->post('youtube'),
				'pinterest'			=> $this->input->post('pinterest'),
				'google'			=> $this->input->post('google'),
			);
			
			$data = array(
				'general' => serialize($general),
				'social'	=> serialize($social)
			);

			$result = $this->dashboard->insert_update(1, $data);

			if($result){
				$this->session->set_flashdata('message', 'Changes has been saved successfully!');
				redirect(base_url().'dashboard/config', 'refresh');
			} else {
				$this->session->set_flashdata('error', 'The server is not responding, try again later.');
				redirect(base_url().'dashboard/config', 'refresh');
			}
		}

		$configs = $this->dashboard->get(1, '');

		$this->template->set('general', unserialize($configs->general) );
		$this->template->set('social', unserialize($configs->social) );
		$this->load->vars(array('title'=>'Dashboard | Config'));
		$this->template->build('dashboard/config');
	}

	function config_online(){
		$data = implode(',', $this->input->post('data') );
		$data = serialize($data);

		$this->db->where('id', 1);
		$this->db->set('config_online', $data);
		$this->db->update('configs');

		echo json_encode(array('data' => true));

	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */