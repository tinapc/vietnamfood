<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_page extends Admin_Controller {

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
		$s_title = 'Quản lý trang';
		$return_url = base_url().'m_page';
		$linkAdd = base_url().'m_page/create/?contentType=page';
		
		$resources = array();
		$resources = $this->resource->get_where(array('content_type' => 'page'), array('id', 'title', 'content_type', 'created_at', 'updated_at', 'published', 'menu_index'));

		$this->load->vars(array('title' => $s_title));
		$this->template->set('return_url', $return_url);
		$this->template->set(array('contentType' => 'page', 'resources' => $resources));
		$this->template->set('linkAdd', $linkAdd);
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
		$return_url = base_url() .'m_page/index/?contentType='.$this->input->get('contentType');
		$data = array();
		$message = '';

		if($this->input->post()) {
			$id = $this->input->post('id') ? $this->input->post('id'): '';

			foreach($_POST as $k => $v) {
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
				redirect(base_url() .'m_page/edit/'.$id.'/?contentType='.$this->input->post('content_type'), 'refresh');	
			} else {
				$result = $this->resource->insert_update($id, $data);

				if($result){
					$this->session->set_flashdata('message', 'Changes has been saved successfully!');
					redirect(base_url() .'m_page/edit/'.$id.'/?contentType='.$this->input->post('content_type'), 'refresh');
				} else {
					$this->session->set_flashdata('error', 'The server is not responding, try again later.');
					redirect(base_url() .'m_page/edit/'.$id.'/?contentType='.$this->input->post('content_type'), 'refresh');
				}
			}
		}

		$this->load->vars(array('title' => $resource->title));
		$this->template->set('resource', $resource);
		$this->template->set('message', $message);
		$this->template->set('return_url', $return_url);
		$this->template->build('manager/edit');
	}

	// Create new resource
	public function create() {
		
		$data = array();
		$message = '';
		$return_url = base_url().'m_page/index/?contentType='.$this->input->get('contentType');

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
					redirect(base_url().'m_page/index/?contentType='.$this->input->post('content_type'), 'refresh');
				} else {
					$this->session->set_flashdata('error', 'The server is not responding, try again later.');
					redirect(base_url().'m_page/create/?contentType='.$this->input->post('content_type'), 'refresh');
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
