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

    /** Tin Khuyen Mai **/
    public function promotion(){
        $this->load->library('pagination');

        $perpage = 6;
        $offset = ($this->uri->segment(2) ? $this->uri->segment(2) : 0);

        $qr = $this->db->query("SELECT id FROM resource WHERE content_type ='job' AND published = 1");
        $numberOfProduct = $qr->num_rows();

        // Config Pagination
        $config['base_url'] = base_url().'promotion-list';
        $config['total_rows'] = $numberOfProduct;
        $config['per_page'] = $perpage;
        $config['uri_segment'] = 2;
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
        $promotions = $this->db->get_where('resource', array('content_type' => 'job', 'published' => 1), $perpage, $offset)->result();

        $breadcrumb = array(
            'Trang chủ'	=> '/',
            'Tin khuyến mãi'	=> '',

        );

        $seo = array(
            'seo_keyword'	=> 'Tin khuyến mãi',
            'seo_description'	=> 'Tin khuyến mãi',
            'seo_image'	=>  base_url().'assets/front/images/logo.png'
        );
        $this->load->vars($seo);

        $this->template->title('Tin khuyến mãi');
        $this->template->set(array('promotions' => $promotions, 's_lang' => $this->s_lang, 'breadcrumb' => $breadcrumb));
        $this->template->build('page/promotion_index');
    }

    public function view_promotion($id = null){

        $promotion = $this->db->get_where('resource', array('id' => $id))->row();

        // Related
        $this->db->limit(5);
        $this->db->order_by('id', 'desc');
        $relateds = $this->db->get_where('resource', array('content_type' => 'job', 'published' => 1, 'id !=' => $promotion->id))->result();

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
        $this->template->build('page/index');
    }


	public function contact(){

		$breadcrumb = array(
			'Trang chủ'	=> '/',
			'Liên hệ'	=> ''
		);

		$this->load->vars(array('title' => 'Liên hệ'));
		$this->template->set(array('breadcrumb' => $breadcrumb));
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

