<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends Admin_Controller {

	function __construct()
	{
		parent::__construct();	

		$this->load->model('client_model', 'client');	
	}

	// Index function
	public function index(){
		$s_title = 'Khách hàng nói';
		$return_url = current_url();
		$linkAdd = ADMIN_URL.'client_say/create/';

		$resources = $this->client->get_where('', array('id', 'who_say', 'position', 'created_at', 'updated_at', 'published'));

		$this->load->vars(array('title' => $s_title));
		$this->template->set('resources', $resources);
		$this->template->set('return_url', $return_url);
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
				if($this->client->delete('', $id)) {
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
				if($this->client->changeStatus($id, $this->input->post('status'))) {
					echo json_encode(array('status' => true, 'message' => 'Bản tin đã được xóa'));
				} else {
					echo json_encode(array('status' => false, 'message' => 'Yêu cầu của bạn không thành công'));
				}
			}
		}
	}

	// Edit resource
	public function edit($id) {
		$resource = $this->client->get($id, '');
		$return_url = ADMIN_URL.'client_say/index/';

		$data = array();
		$message = '';

		if($this->input->post()) {
			$id = $this->input->post('id') ? $this->input->post('id'): '';

			foreach($_POST as $k => $v) {
				$data[$k] = $v;
			}

			$data['published'] = $this->input->post('published') ? $this->input->post('published'): 0;
		
			$result = $this->client->insert_update($id, $data);

			if($result){
				$this->session->set_flashdata('message', 'Changes has been saved successfully!');
				redirect(ADMIN_URL.'client_say/edit/'.$id, 'refresh');
			} else {
				$this->session->set_flashdata('error', 'The server is not responding, try again later.');
				redirect(ADMIN_URL.'client_say/edit/'.$id, 'refresh');
			}
		}

		$this->load->vars(array('title' => $resource->who_say));
		$this->template->set('resource', $resource);
		$this->template->set('message', $message);
		$this->template->set('return_url', $return_url);
		$this->template->build('manager/edit');
	}

	// Create new resource
	public function create() {
		
		$data = array();
		$message = '';
		$return_url = ADMIN_URL.'client_say/index/';

		if($this->input->post()) {
			
			foreach($_POST as $k => $v) {
				$data[$k] = $v;
			}

			$data['published'] = $this->input->post('published') ? $this->input->post('published'): 0;
			
			// Make sure there is not any record is duplicate
			//$checkDuplicate = $this->resource->get_where(array('alias' => $data['alias']), array('id'));

			// if(count($checkDuplicate)) {
			// 	$this->session->set_flashdata('error', 'This entry has been already in database');
			// 	redirect(ADMIN_URL.'resource/create/?contentType='.$this->input->post('content_type'), 'refresh');	
			// } else {
				$result = $this->client->insert_update('', $data);

				if($result){
					$this->session->set_flashdata('message', 'Changes has been saved successfully!');
					redirect(ADMIN_URL.'client_say/index/', 'refresh');
				} else {
					$this->session->set_flashdata('error', 'The server is not responding, try again later.');
					redirect(ADMIN_URL.'client_say/create/', 'refresh');
				}
			//}
		}

		$this->load->vars(array('title' => 'Tạo mới'));
		$this->template->set('message', $message);
		$this->template->set('return_url', $return_url);
		$this->template->build('manager/edit');
	}


}
