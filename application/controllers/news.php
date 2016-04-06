<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends Front_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$content = $this->resource->get_where(array('published' => 1, 'content_type' => 'news_item'),array('id','alias', 'title', 'intro', 'image', 'is_hot', 'link_attr'), array('menu_index' => 'asc'), array('begin' => 0, 'max' => 5));

		$idArr = array();
		foreach($content as $item) {
			$idArr[] = $item->id;
		}

		$isHot = $this->resource->get_where(array('published' => 1, 'content_type' => 'news_item'),array('alias', 'title', 'intro', 'image', 'is_hot', 'link_attr'), array('menu_index' => 'asc'),array('begin' => 0, 'max' => 2));

		// Get other news
		$this->db->where_not_in('id', $idArr);
		$this->db->where(array('published' => 1, 'content_type' => 'news_item'));
		$this->db->select('alias, title, intro, image, link_attr, external_link');
		$this->db->limit(5);
		$this->db->order_by('id', 'desc');
		$otherNews = $this->db->get('resource')->result();

		$seo = array(
			'seo_keyword'	=> 'Tâm Điểm - Tin tức & Sự Kiện',
			'seo_description'	=> 'Tâm Điểm - Tin tức & Sự Kiện',
			'seo_image'	=>  base_url().'assets/front/images/logo.png'
		);
		$this->load->vars($seo);
		
		$this->load->vars(array('title' => 'Tin tức & Sự kiện'));
		$this->template->set('content', $content);
		$this->template->set('isHot', $isHot);
		$this->template->set('otherNews', $otherNews);
		$this->template->build('news/index');
	}

	public function detail(){
		$segment = $this->uri->segment(2);
		$content = $this->resource->get_by(array('alias' => $segment),'');

		// Related entry
		//$this->db->limit(5);
		$this->db->order_by('id', 'desc');
		$related = $this->resource->get_where(array('content_type' => $content->content_type, 'alias !=' => $content->alias, 'parent' => $content->parent, 'published' => 1), '');

		$seo = array(
			'seo_keyword'	=> $content->long_title,
			'seo_description'	=> $content->description,
			'seo_image'	=>  ($content->image !== '') ? $content->image : base_url().'assets/front/images/logo.png'
		);
		$this->load->vars($seo);

		$this->load->vars(array('title' => $content->title));
		$this->template->set('content', $content);
		$this->template->set('related', $related);
		$this->template->build('news/detail');	
	}

	public function category(){
		$aliasCate = $this->uri->segment(2);
		$page = $this->uri->segment(3);
		$cates = $this->resource->get_by(array('alias' => $aliasCate), array('title', 'id', 'long_title', 'description', 'image'));
		// Pagination config
		$this->load->library('pagination');
		$config['base_url'] = base_url().'danh-muc-tin/'.$aliasCate;
		$config['total_rows'] = $this->resource->count_all(array('parent' => $cates->id));
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;
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
		$news = $this->resource->get_where(array('parent' => $cates->id, 'published' => 1), '', array('menu_index' => 'asc'), array('max' => $config['per_page'], 'begin' => $this->uri->segment(3)));

		$seo = array(
			'seo_keyword'	=> $cates->long_title,
			'seo_description'	=> $cates->description,
			'seo_image'	=>  ($cates->image !== '') ? $cates->image : base_url().'assets/front/images/logo.png'
		);
		$this->load->vars($seo);

		$this->load->vars(array('title' => $cates->title));
		$this->template->set('content', $news);
		$this->template->set('pagi', $this->pagination->create_links());
		$this->template->build('news/category');
	}

}

/* End of file news.php */
/* Location: ./application/controllers/news.php */