<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends Admin_Controller {

	function __construct()
	{
		parent::__construct();	

		$this->load->model('resource_model', 'resource');	
	}

	// Index function
	public function index(){

		if($_POST) {
			$id = $this->input->post('id');
			$order = $this->input->post('menu_index');
			$count = count($id);
			for ($i=0; $i < $count; $i++) { 
				//echo $id[$i] .' : '. $order[$i].'<br>';
				$this->db->where(array('id' => $id[$i]));
				$this->db->update('resource', array('menu_index' => $order[$i]));
			}
		}

		$contentType = $this->input->get('contentType');
		switch ($contentType) {
			case 'introduction':
				$s_title = 'Giới thiệu';
				$return_url = ADMIN_URL.'resource/index/?contentType=introduction';
				$linkAdd = ADMIN_URL.'resource/create/?contentType=introduction';
				break;
			
			case 'whychooseTD':
				$s_title = 'Tại sao chọn TĐ';
				$return_url = ADMIN_URL.'resource/index/?contentType=whychooseTD';
				$linkAdd = ADMIN_URL.'resource/create/?contentType=whychooseTD';
				break;

			case 'cate_news':
				$s_title = 'Danh mục Tin tức';
				$return_url = ADMIN_URL.'resource/index/?contentType=cate_news';
				$linkAdd = ADMIN_URL.'resource/create/?contentType=cate_news';
				break;
			case 'cate_service':
				$s_title = 'Dịch vụ kinh doanh';
				$return_url = ADMIN_URL.'resource/index/?contentType=cate_service';
				$linkAdd = ADMIN_URL.'resource/create/?contentType=cate_service';
				break;

			case 'faq':
				$s_title = 'Hỏi đáp';
				$return_url = ADMIN_URL.'resource/index/?contentType=faq';
				$linkAdd = ADMIN_URL.'resource/create/?contentType=faq';
				break;

			case 'cate_product':
				$s_title = 'Danh mục sản phẩm';
				$return_url = ADMIN_URL.'resource/index/?contentType=cate_product';
				$linkAdd = ADMIN_URL.'resource/create/?contentType=cate_product';
				break;

			case 'job':
				$s_title = 'Tuyển dụng';
				$return_url = ADMIN_URL.'resource/index/?contentType=job';
				$linkAdd = ADMIN_URL.'resource/create/?contentType=job';
				break;

			case 'guide':
				$s_title = 'Tuyển dụng';
				$return_url = ADMIN_URL.'resource/edit/52/?contentType=guide';
				$linkAdd = ADMIN_URL.'resource/create/?contentType=guide';
				break;
		}


		$hasIntroduction = $this->load->get_var('resoucesIntro');

		if(count($hasIntroduction) > 0) {
			$this->load->vars(array('title' => $s_title));
			$this->template->set('resources', $this->load->get_var('resoucesIntro'));
			$this->template->set('return_url', $return_url);
			$this->template->set('contentType', $contentType);
			$this->template->set('linkAdd', $linkAdd);
			$this->template->build('manager/index');
		} else {
			redirect(ADMIN_URL.'resource/create/?contentType='.$contentType);
		}
	}

	// News manager
	public function news(){

		if($_POST) {
			$id = $this->input->post('id');
			$order = $this->input->post('menu_index');
			$count = count($id);
			for ($i=0; $i < $count; $i++) { 
				//echo $id[$i] .' : '. $order[$i].'<br>';
				$this->db->where(array('id' => $id[$i]));
				$this->db->update('resource', array('menu_index' => $order[$i]));
			}
		}

		$cateNews = $this->uri->segment(4);
		$cateInfo = $this->resource->get($cateNews, array('id' , 'title'));
		$resources = $this->resource->get_where(array('parent' => $cateNews, 'content_type' => 'news_item'), array('id', 'title', 'content_type', 'created_at', 'updated_at', 'published', 'menu_index'));
		
		$s_title = 'Bài viết trong: '. $cateInfo->title;
		$return_url = current_url().'/?contentType=news_item';
		$linkAdd = ADMIN_URL.'resource/create_news/'.$cateNews.'/?contentType=news_item';

		$this->load->vars(array('title' => $s_title));
		$this->template->set('resources', $resources);
		$this->template->set('return_url', $return_url);
		$this->template->set('linkAdd', $linkAdd);
		$this->template->set('contentType', 'news_item');
		$this->template->build('manager/index');
	}

	// News manager
	public function product(){

		if($_POST) {
			$id = $this->input->post('id');
			$order = $this->input->post('menu_index');
			$count = count($id);
			for ($i=0; $i < $count; $i++) { 
				//echo $id[$i] .' : '. $order[$i].'<br>';
				$this->db->where(array('id' => $id[$i]));
				$this->db->update('resource', array('menu_index' => $order[$i]));
			}
		}
		
		$cateNews = $this->uri->segment(4);
		$cateInfo = $this->resource->get($cateNews, array('id' , 'title'));
		$resources = $this->resource->get_where(array('parent' => $cateNews, 'content_type' => 'product_item'), array('id', 'title', 'content_type', 'created_at', 'updated_at', 'published', 'menu_index'));
		
		$s_title = 'Sản phẩm trong: '. $cateInfo->title;
		$return_url = current_url().'/?contentType=product_item';
		$linkAdd = ADMIN_URL.'resource/create_product/'.$cateNews.'/?contentType=product_item';

		$this->load->vars(array('title' => $s_title));
		$this->template->set('resources', $resources);
		$this->template->set('return_url', $return_url);
		$this->template->set('linkAdd', $linkAdd);
		$this->template->set('contentType', 'product_item');
		$this->template->build('manager/index');
	}

	// Delete resource
	public function delete($id) {
		if(!$this->ion_auth->is_admin()) {
			echo json_encode(array('status' => false, 'message' => 'Bạn không có quyền thực hiện chức năng này'));	
		} else {
			if(!$id || $id == '') {
				echo json_encode(array('status' => false, 'message' => 'Yêu cầu của bạn không thành công'));
			} else {
				if($this->resource->delete('', $id)) {
					echo json_encode(array('status' => true, 'message' => 'Bản tin đã được xóa'));
				} else {
					echo json_encode(array('status' => false, 'message' => 'Yêu cầu của bạn không thành công'));
				}
			}
		}
	}

	// Change Status
	// Delete resource
	public function changeStatus($id) {
		if(!$this->ion_auth->is_admin()) {
			echo json_encode(array('status' => false, 'message' => 'Bạn không có quyền thực hiện chức năng này'));	
		} else {
			if(!$id || $id == '') {
				echo json_encode(array('status' => false, 'message' => 'Yêu cầu của bạn không thành công'));
			} else {
				if($this->resource->changeStatus($id, $this->input->post('status'))) {
					echo json_encode(array('status' => true, 'message' => 'Bản tin đã được xóa'));
				} else {
					echo json_encode(array('status' => false, 'message' => 'Yêu cầu của bạn không thành công'));
				}
			}
		}
	}

	// Edit resource
	public function edit($id) {
		$resource = $this->resource->get($id, '');
		if($this->input->get('contentType') == 'news_item') {
			$return_url = ADMIN_URL.'resource/news/'.$resource->parent.'/?contentType='.$this->input->get('contentType');
		} elseif($this->input->get('contentType') == 'product_item') {
			$return_url = ADMIN_URL.'resource/product/'.$resource->parent;
		} elseif($this->input->get('contentType') == 'guide') {
			$return_url = ADMIN_URL.'resource/edit/52/?contentType='.$this->input->get('contentType');
		} elseif($this->input->get('contentType') == 'phone_support') {
			$return_url = ADMIN_URL.'resource/edit/53/?contentType='.$this->input->get('contentType');
		} elseif($this->input->get('contentType') == 'map') {
			$return_url = ADMIN_URL.'resource/edit/54/?contentType='.$this->input->get('contentType');
		} else {
			$return_url = ADMIN_URL.'resource/index/?contentType='.$this->input->get('contentType');
		}

		$data = array();
		$message = '';

		if($this->input->post()) {
			$id = $this->input->post('id') ? $this->input->post('id'): '';

			foreach($_POST as $k => $v) {
				if(!in_array($k, array('image1', 'image2', 'image3', 'image4', 'image5')))
				$data[$k] = $v;
			}

			$data['is_default'] = $this->input->post('is_default') ? $this->input->post('is_default'): 0;
			$data['hide_from_menu'] = $this->input->post('hide_from_menu') ? $this->input->post('hide_from_menu'): 0;
			$data['show_home'] = $this->input->post('show_home') ? $this->input->post('show_home'): 0;
			$data['show_gallery'] = $this->input->post('show_gallery') ? $this->input->post('show_gallery'): 0;
			$data['is_hot'] = $this->input->post('is_hot') ? $this->input->post('is_hot'): 0;
			$data['published'] = $this->input->post('published') ? $this->input->post('published'): 0;
			$data['alias'] = ($this->input->post('alias') !=='') ? $this->input->post('alias'): $this->util->alias($data['title']);
			$data['menu_title'] = ($this->input->post('menu_title') !=='') ? $this->input->post('menu_title'): $data['title'];

			// Make sure there is not any record is duplicate
			$checkDuplicate = $this->resource->get_where(array('alias' => $data['alias'], 'id !=' => $id), array('id'));

			if(count($checkDuplicate)) {
				$this->session->set_flashdata('error', 'This entry has been already in database');
				redirect(ADMIN_URL.'resource/edit/'.$id.'/?contentType='.$this->input->post('content_type'), 'refresh');	
			} else {
				$result = $this->resource->insert_update($id, $data);

				foreach($_POST as $k => $v) {
					if(in_array($k, array('image1', 'image2', 'image3', 'image4', 'image5')))
					$image[$k] = $v;
				}
				$image['pro_id'] = $id;
				//Insert Photo product
				$this->db->delete('product_image', array('pro_id' => $id));
				$this->resource->insert_product_image($image);

				if($result){
					$this->session->set_flashdata('message', 'Changes has been saved successfully!');
					redirect(ADMIN_URL.'resource/edit/'.$id.'/?contentType='.$this->input->post('content_type'), 'refresh');
				} else {
					$this->session->set_flashdata('error', 'The server is not responding, try again later.');
					redirect(ADMIN_URL.'resource/edit/'.$id.'/?contentType='.$this->input->post('content_type'), 'refresh');
				}
			}
		}

		$this->load->vars(array('title' => $resource->title));

		$photos = array();
		if($this->input->get('contentType') == 'product_item'){
			$photos = $this->db->get_where('product_image', array('pro_id' => $id))->row();
		}

		$this->template->set('photo', $photos);
		$this->template->set('resource', $resource);
		$this->template->set('message', $message);
		$this->template->set('return_url', $return_url);

		if ($this->input->get('contentType') == 'product_item') {
			$this->template->build('manager/create_product');	
		} else {
			$this->template->build('manager/edit');
		}
		
	}

	// Create new resource
	public function create() {
		
		$data = array();
		$message = '';
		$return_url = ADMIN_URL.'resource/index/?contentType='.$this->input->get('contentType');

		if($this->input->post()) {
			
			foreach($_POST as $k => $v) {
				$data[$k] = $v;
			}

			$data['is_default'] = $this->input->post('is_default') ? $this->input->post('is_default'): 0;
			$data['hide_from_menu'] = $this->input->post('hide_from_menu') ? $this->input->post('hide_from_menu'): 0;
			$data['show_home'] = $this->input->post('show_home') ? $this->input->post('show_home'): 0;
			$data['show_gallery'] = $this->input->post('show_gallery') ? $this->input->post('show_gallery'): 0;
			$data['is_hot'] = $this->input->post('is_hot') ? $this->input->post('is_hot'): 0;
			$data['published'] = $this->input->post('published') ? $this->input->post('published'): 0;
			$data['content_type'] = $this->input->post('content_type');
			$data['alias'] = ($this->input->post('alias') !=='') ? $this->input->post('alias'): $this->util->alias($data['title']);
			$data['menu_title'] = ($this->input->post('menu_title') !=='') ? $this->input->post('menu_title'): $data['title'];

			// Make sure there is not any record is duplicate
			$checkDuplicate = $this->resource->get_where(array('alias' => $data['alias']), array('id'));

			if(count($checkDuplicate)) {
				$this->session->set_flashdata('error', 'This entry has been already in database');
				redirect(ADMIN_URL.'resource/create/?contentType='.$this->input->post('content_type'), 'refresh');	
			} else {
				$result = $this->resource->insert_update('', $data);

				if($result){
					$this->session->set_flashdata('message', 'Changes has been saved successfully!');
					redirect(ADMIN_URL.'resource/index/?contentType='.$this->input->post('content_type'), 'refresh');
				} else {
					$this->session->set_flashdata('error', 'The server is not responding, try again later.');
					redirect(ADMIN_URL.'resource/create/?contentType='.$this->input->post('content_type'), 'refresh');
				}
			}
		}

		$this->load->vars(array('title' => 'Tạo mới'));
		$this->template->set('message', $message);
		$this->template->set('return_url', $return_url);
		$this->template->build('manager/edit');
	}

	// Create new resource
	public function create_news() {
		
		$data = array();
		$message = '';

		if($this->input->post()) {
			
			foreach($_POST as $k => $v) {
				$data[$k] = $v;
			}

			$data['is_default'] = $this->input->post('is_default') ? $this->input->post('is_default'): 0;
			$data['hide_from_menu'] = $this->input->post('hide_from_menu') ? $this->input->post('hide_from_menu'): 0;
			$data['show_home'] = $this->input->post('show_home') ? $this->input->post('show_home'): 0;
			$data['show_gallery'] = $this->input->post('show_gallery') ? $this->input->post('show_gallery'): 0;
			$data['is_hot'] = $this->input->post('is_hot') ? $this->input->post('is_hot'): 0;
			$data['published'] = $this->input->post('published') ? $this->input->post('published'): 0;
			$data['content_type'] = $this->input->post('content_type');
			$data['alias'] = ($this->input->post('alias') !=='') ? $this->input->post('alias'): $this->util->alias($data['title']);
			$data['menu_title'] = ($this->input->post('menu_title') !=='') ? $this->input->post('menu_title'): $data['title'];

			// Make sure there is not any record is duplicate
			$checkDuplicate = $this->resource->get_where(array('alias' => $data['alias']), array('id'));

			if(count($checkDuplicate)) {
				$this->session->set_flashdata('error', 'This entry has been already in database');
				redirect(ADMIN_URL.'resource/create_news/'.$this->uri->segment(4).'/?contentType='.$this->input->post('content_type'), 'refresh');	
			} else {
				$result = $this->resource->insert_update('', $data);

				if($result){
					$this->session->set_flashdata('message', 'Changes has been saved successfully!');
					redirect(ADMIN_URL.'resource/news/'.$this->uri->segment(4).'/?contentType='.$this->input->post('content_type'), 'refresh');
				} else {
					$this->session->set_flashdata('error', 'The server is not responding, try again later.');
					redirect(ADMIN_URL.'resource/create_news/'.$this->uri->segment(4).'/?contentType='.$this->input->post('content_type'), 'refresh');
				}
			}
		}

		$this->load->vars(array('title' => 'Tạo mới'));
		$this->template->set('message', $message);
		$this->template->build('manager/create_news');
	}

	// Create new resource
	public function create_product() {
		
		$data = array();
		$message = '';

		if($this->input->post()) {
			
			foreach($_POST as $k => $v) {
				if(!in_array($k, array('image1', 'image2', 'image3', 'image4', 'image5')))
				$data[$k] = $v;
			}

			$data['is_default'] = $this->input->post('is_default') ? $this->input->post('is_default'): 0;
			$data['hide_from_menu'] = $this->input->post('hide_from_menu') ? $this->input->post('hide_from_menu'): 0;
			$data['show_home'] = $this->input->post('show_home') ? $this->input->post('show_home'): 0;
			$data['show_gallery'] = $this->input->post('show_gallery') ? $this->input->post('show_gallery'): 0;
			$data['is_hot'] = $this->input->post('is_hot') ? $this->input->post('is_hot'): 0;
			$data['published'] = $this->input->post('published') ? $this->input->post('published'): 0;
			$data['content_type'] = $this->input->post('content_type');
			$data['alias'] = ($this->input->post('alias') !=='') ? $this->input->post('alias'): $this->util->alias($data['title']);
			$data['menu_title'] = ($this->input->post('menu_title') !=='') ? $this->input->post('menu_title'): $data['title'];

			// Make sure there is not any record is duplicate
			$checkDuplicate = $this->resource->get_where(array('alias' => $data['alias']), array('id'));

			if(count($checkDuplicate)) {
				$this->session->set_flashdata('error', 'This entry has been already in database');
				redirect(ADMIN_URL.'resource/create_product/'.$this->uri->segment(4).'/?contentType='.$this->input->post('content_type'), 'refresh');	
			} else {
				$result = $this->resource->insert_update('', $data);

				foreach($_POST as $k => $v) {
					if(in_array($k, array('image1', 'image2', 'image3', 'image4', 'image5')))
					$image[$k] = $v;
				}
				$image['pro_id'] = $this->db->insert_id();

				//Insert Photo product
				$this->resource->insert_product_image($image);

				if($result){
					$this->session->set_flashdata('message', 'Changes has been saved successfully!');
					redirect(ADMIN_URL.'resource/product/'.$this->uri->segment(4).'/?contentType='.$this->input->post('content_type'), 'refresh');
				} else {
					$this->session->set_flashdata('error', 'The server is not responding, try again later.');
					redirect(ADMIN_URL.'resource/create_product/'.$this->uri->segment(4).'/?contentType='.$this->input->post('content_type'), 'refresh');
				}
			}
		}

		$this->load->vars(array('title' => 'Tạo mới sản phẩm'));
		$this->template->set('message', $message);
		$this->template->build('manager/create_product');
	}

}
