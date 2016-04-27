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

	public function detail($id){
		$promotion = $this->db->get_where('resource', array('id' => $id))->row();

        // Related
        $this->db->limit(5);
        $this->db->order_by('id', 'desc');
        $relateds = $this->db->get_where('resource', array('content_type' => $promotion->content_type, 'published' => 1, 'id !=' => $promotion->id))->result();

        $breadcrumb = array(
            'Trang chủ'	=> '/',
            'Khuyến mãi'	=> '/promotion-list',
            $promotion->title => ''

        );

        $seo = array(
            'seo_keyword'	=> $promotion->long_title,
            'seo_description'	=> $promotion->description,
            'seo_image'	=>  ($promotion->image !== '') ? $promotion->image : base_url().'assets/front/images/logo.png'
        );
        $this->load->vars($seo);

        $this->template->title($promotion->title);
        $this->template->set(array(
            'content' => $promotion,
            's_lang' => $this->s_lang,
            'breadcrumb' => $breadcrumb,
            'relateds'   => $relateds
        ));
        $this->template->build('news/detail');	
	}

	public function category($type){
		$this->load->library('pagination');

        $perpage = 6;
        $offset = ($this->uri->segment(3) ? $this->uri->segment(3) : 0);

        $qr = $this->db->query("SELECT id FROM resource WHERE content_type ='$type' AND published = 1");
        $numberOfProduct = $qr->num_rows();

        // Config Pagination
        $config['base_url'] = base_url().'news/'. $type;
        $config['total_rows'] = $numberOfProduct;
        $config['per_page'] = $perpage;
        $config['uri_segment'] = 3;
        $config['suffix'] = '.html';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0)">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        //Fetch all product by cate slug
        $this->db->order_by('id', 'desc');
        $promotions = $this->db->get_where('resource', array('content_type' => $type, 'published' => 1), $perpage, $offset)->result();

        switch ($type) {
        	case 'job':
        		$typeText = 'Tin khuyến mãi';
        		break;
        	
        	case 'distributary':
        		$typeText = 'Phân phối';
        		break;

        	case 'culinary':
        		$typeText = 'Góc ẩm thực';
        		break;
        }

        $breadcrumb = array(
            'Trang chủ'	=> '/',
            $typeText	=> '',

        );

        $seo = array(
            'seo_keyword'	=> $typeText,
            'seo_description'	=> $typeText,
            'seo_image'	=>  base_url().'assets/front/images/logo.png'
        );
        $this->load->vars($seo);

        $this->template->title($typeText);
        $this->template->set(array('promotions' => $promotions, 's_lang' => $this->s_lang, 'breadcrumb' => $breadcrumb));
        $this->template->build('news/index');
	}

}

/* End of file news.php */
/* Location: ./application/controllers/news.php */