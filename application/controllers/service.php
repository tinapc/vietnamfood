<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service extends Front_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$segment = $this->uri->segment(2);
		$content = $this->resource->get_where(array('content_type' => 'cate_service', 'published' => 1),'', array('menu_index' => 'asc'));

		$this->load->vars(array('title' => 'Sản phẩm & Dịch vụ'));
		$this->template->set('content', $content);
		$this->template->build('service/index');	
	}

	public function item()
	{
		$segment = $this->uri->segment(2);
		$content = $this->resource->get_by(array('alias' => $segment),'');
		$catepros = $this->resource->get_where(array('content_type' => 'cate_product', 'published' => 1, 'parent' => $content->id),array('id','alias', 'title', 'link_attr', 'external_link','image'), array('menu_index' => 'asc'));

		$seo = array(
			'seo_keyword'	=> $content->long_title,
			'seo_description'	=> $content->description,
			'seo_image'	=>  ($content->image !== '') ? $content->image : base_url().'assets/front/images/logo.png'
		);
		$this->load->vars($seo);

		$this->load->vars(array('title' => $content->title));
		$this->template->set('content', $content);
		$this->template->set('catepros', $catepros);
		$this->template->build('service/item');	
	}

	public function product(){
		$segment = $this->uri->segment(2);
		$content = $this->resource->get_by(array('alias' => $segment),'');

		// Related entry
		$related = $this->resource->get_where(array('content_type' => $content->content_type, 'alias !=' => $content->alias, 'parent' => $content->parent), '', array('menu_index' => 'asc'));

		$seo = array(
			'seo_keyword'	=> $content->long_title,
			'seo_description'	=> $content->description,
			'seo_image'	=>  ($content->image !== '') ? $content->image : base_url().'assets/front/images/logo.png'
		);
		$this->load->vars($seo);
		
		$this->load->vars(array('title' => $content->title));
		$this->template->set('content', $content);
		$this->template->set('related', $related);
		$this->template->build('service/product');	
	}

}

/* End of file service.php */
/* Location: ./application/controllers/service.php */