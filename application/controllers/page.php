<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends Front_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$segment = $this->uri->segment(2);
		$content = $this->resource->get_by(array('alias' => $segment),'');

		// Related entry
		$related = $this->resource->get_where(array('content_type' => $content->content_type, 'alias !=' => $content->alias, 'published' => 1), '');

		$seo = array(
			'seo_keyword'	=> $content->long_title,
			'seo_description'	=> $content->description,
			'seo_image'	=>  ($content->image !== '') ? $content->image : base_url().'assets/front/images/logo.png'
		);
		$this->load->vars($seo);


		$this->load->vars(array('title' => $content->title));
		$this->template->set('content', $content);
		$this->template->set('related', $related);
		$this->template->build('page/index');	
	}

	public function introduction(){
		$content = $this->resource->get_by(array('id' => 151),'');

		$breadcrumb = array(
			'Trang chủ'	=> '/',
			'Giới thiệu'	=> ''
		);


		$seo = array(
			'seo_keyword'	=> $content->long_title,
			'seo_description'	=> $content->description,
			'seo_image'	=>  ($content->image !== '') ? $content->image : base_url().'assets/front/images/logo.png'
		);
		$this->load->vars($seo);

		$this->template->title($content->title);
		$this->template->set(array('content' => $content, 's_lang' => $this->s_lang, 'breadcrumb' => $breadcrumb));
		$this->template->build('page/index');	
	}

	public function promotion(){
		$breadcrumb = array(
			'Trang chủ'	=> '/',
			'Khuyến mãi'	=> ''
		);

		$content = $this->resource->get_by(array('id' => 152),'');

		$seo = array(
			'seo_keyword'	=> $content->long_title,
			'seo_description'	=> $content->description,
			'seo_image'	=>  ($content->image !== '') ? $content->image : base_url().'assets/front/images/logo.png'
		);
		$this->load->vars($seo);

		$this->template->title($content->title);
		$this->template->set(array('content' => $content, 's_lang' => $this->s_lang, 'breadcrumb' => $breadcrumb));
		$this->template->build('page/index');	
	}

	public function quality(){
		$breadcrumb = array(
			'Trang chủ'	=> '/',
			'Chất lượng'	=> ''
		);
		$content = $this->resource->get_by(array('id' => 153),'');

		$seo = array(
			'seo_keyword'	=> $content->long_title,
			'seo_description'	=> $content->description,
			'seo_image'	=>  ($content->image !== '') ? $content->image : base_url().'assets/front/images/logo.png'
		);
		$this->load->vars($seo);

		$this->template->title($content->title);
		$this->template->set(array('content' => $content, 's_lang' => $this->s_lang, 'breadcrumb' => $breadcrumb));
		$this->template->build('page/index');	
	}

	public function distributary(){
		$breadcrumb = array(
			'Trang chủ'	=> '/',
			'Phân phối'	=> ''
		);
		$content = $this->resource->get_by(array('id' => 154),'');

		$seo = array(
			'seo_keyword'	=> $content->long_title,
			'seo_description'	=> $content->description,
			'seo_image'	=>  ($content->image !== '') ? $content->image : base_url().'assets/front/images/logo.png'
		);
		$this->load->vars($seo);

		$this->template->title($content->title);
		$this->template->set(array('content' => $content, 's_lang' => $this->s_lang, 'breadcrumb' => $breadcrumb));
		$this->template->build('page/index');	
	}

	public function career(){
		$breadcrumb = array(
			'Trang chủ'	=> '/',
			'Tuyển dụng'	=> ''
		);
		$content = $this->resource->get_by(array('id' => 155),'');

		$seo = array(
			'seo_keyword'	=> $content->long_title,
			'seo_description'	=> $content->description,
			'seo_image'	=>  ($content->image !== '') ? $content->image : base_url().'assets/front/images/logo.png'
		);
		$this->load->vars($seo);

		$this->template->title($content->title);
		$this->template->set(array('content' => $content, 's_lang' => $this->s_lang, 'breadcrumb' => $breadcrumb));
		$this->template->build('page/index');	
	}


	/*public function job(){
		// Pagination config
		$this->load->library('pagination');
		$config['base_url'] = base_url().'tuyen-dung';
		$config['total_rows'] = $this->resource->count_all(array('content_type' => 'job'));
		$config['per_page'] = 6;
		$config['uri_segment'] = 2;
		$config['suffix'] = '.html'; 
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = 'Prev';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li><a href="javascript:void(0)" style="font-weight:bold; background:#ccc">';
		$config['cur_tag_close'] = '</a></li>';
		$this->pagination->initialize($config); 

		// Cate
		$news = $this->resource->get_where(array('content_type' => 'job', 'published' => 1), '', array('created_at' => 'desc'), array('max' => $config['per_page'], 'begin' => $this->uri->segment(2)));

		$this->load->vars(array('title' =>'Tin tuyển dụng'));
		$this->template->set('content', $news);
		$this->template->set('pagi', $this->pagination->create_links());
		$this->template->build('page/job');
	}*/

	public function contact(){
		$this->load->vars(array('title' => 'Liên hệ'));
		$this->template->build('page/contact');	
	}

	// Search page
	public function search(){

		$k = $this->input->get('k');

		$this->db->like('title', $k, 'after');
		$this->db->or_like('alias', $k, 'after');
		$this->db->or_like('content', $k, 'after');
		$results = $this->db->get('resource')->result();

		$s_title = 'Có '. count($results).' kết quả tìm thấy của từ khóa "'.$k.'"';

		$this->load->vars(array('title' =>'Tìm kiếm'));
		$this->template->set('content', $results);
		$this->template->set('s_title', $s_title );
		$this->template->set('keyword', $k);
		$this->template->build('page/search');
	}

}

/* End of file page.php */
/* Location: ./application/controllers/page.php */

