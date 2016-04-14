<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends Front_Controller
{
	public function __construct(){
		parent::__construct();

		$this->load->library('pagination');
	}

	public function index()
	{
		$breadcrumb = array(
			'Trang chủ'	=> '/',
			'Sản phẩm' => '',
		);

		$seo = array(
			'seo_keyword'	=> 'Sản phẩm',
			'seo_description'	=> 'Sản phẩm',
			'seo_image'	=>  base_url().'assets/front/images/logo.png'
		);
		$this->load->vars($seo);

		// Get category product
		$this->db->select(array('title', 'title_en', 'intro', 'intro_en', 'image', 'alias', 'id'));
		$this->db->where(array('show_home' => 1, 'published' => 1, 'content_type' => 'cate_product'));
		$this->db->order_by('id', 'desc');
		$cates = $this->db->get('resource')->result();

		$data = array();
		$this->template->title('Sản phẩm');
		$this->template->set(array('breadcrumb' => $breadcrumb, 'cates' => $cates, 's_lang' => $this->s_lang));
		$this->template->build('product/index', $data);
	}

	public function category($slug = null)
	{
		$cate = $this->db->get_where('resource', array('alias' => str_replace('_', '-',$slug)))->row();

		$breadcrumb = array(
			'Trang chủ'	=> '/',
			'Sản phẩm' => '/product/',
			$cate->title	=> ''
		);

		$seo = array(
			'seo_keyword'	=> $cate->long_title,
			'seo_description'	=> $cate->description,
			'seo_image'	=>  base_url().'assets/front/images/logo.png'
		);
		$this->load->vars($seo);

		$qr = $this->db->query("SELECT id FROM resource WHERE parent = " .$cate->id. " AND published = 1");
		$numberOfProduct = $qr->num_rows();

		$perpage = 9;
		$offset = ($this->uri->segment(4) ? $this->uri->segment(4) : 0);

		// Config Pagination
		$config['base_url'] = base_url().'product/category/'. $slug;
		$config['total_rows'] = $numberOfProduct;
		$config['per_page'] = $perpage;
		$config['uri_segment'] = 4;
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
		$products = $this->db->get_where('resource', array('parent' => $cate->id, 'published' => 1), $perpage, $offset)->result();

		$data = array();
		$this->template->title($cate->title);
		$this->template->set(array('breadcrumb' => $breadcrumb, 'products' => $products, 's_lang' => $this->s_lang));
		$this->template->build('product/category', $data);
	}

	public function view($id = null, $slug=null)
	{
		$product = $this->db->get_where('resource', array('id' =>$id))->row();
		$breadcrumb = array(
			'Trang chủ'	=> '/',
			'Sản phẩm' => '/product/',
			$product->title	=> ''
		);

		$seo = array(
			'seo_keyword'	=> $product->long_title,
			'seo_description'	=> $product->description,
			'seo_image'	=>  base_url().'assets/front/images/logo.png'
		);
		$this->load->vars($seo);

		// Update viewer
		$this->db->update('resource', array('viewed' => $product->viewed + 1), array('id' => $id));

		$data = array();
		$data['photo'] = $this->db->get_where('product_image', array('pro_id' => $id))->row();

		// Other products
		$this->db->limit(6);
		$this->db->order_by('id', 'desc');
		$related = $this->db->get_where('resource', array('parent' => $product->parent, 'id !=' => $product->id, 'published' => 1))->result();
		$this->template->title($product->title);
		$this->template->set(array('breadcrumb' => $breadcrumb, 'product' => $product, 'related' => $related, 's_lang' => $this->s_lang));
		$this->template->build('product/view', $data);	
	}
}