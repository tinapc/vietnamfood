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
		$content = $this->resource->get_by(array('is_default' => 1, 'content_type' => 'introduction'),'');

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

	public function whychooseTD(){
		$content = $this->resource->get_where(array('published' => 1, 'content_type' => 'whychooseTD'),'');

		$this->load->vars(array('title' => 'Tại sao chọn TrungDung Media'));
		$this->template->set('content', $content);
		$this->template->build('page/whychooseTD');	
	}

	public function client_say(){
		$content = $this->db->get_where('client_say', array('published' => 1))->result();

		$this->load->vars(array('title' => 'Khách hàng nói về chúng tôi'));
		$this->template->set('content', $content);
		$this->template->build('page/client_say');	
	}

	public function faq(){
		$content = $this->resource->get_where(array('published' => 1, 'content_type' => 'faq'),array('title', 'content'));

		$this->load->vars(array('title' => 'Hỏi đáp'));
		$this->template->set('content', $content);
		$this->template->build('page/faq');	
	}

	public function job(){
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
	}

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

