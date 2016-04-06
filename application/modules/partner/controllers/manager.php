<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends Admin_Controller {

	function __construct()
	{
		parent::__construct();	

		$this->load->model('partner_model', 'partner');	
	}

	// Index function
	public function index(){
		$s_title = 'Đối tác';
		$return_url = current_url();
		$linkAdd = ADMIN_URL.'partner/create/';

		$resources = $this->partner->get_where('', '');

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
				if($this->partner->delete('', $id)) {
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
				if($this->partner->changeStatus($id, $this->input->post('status'))) {
					echo json_encode(array('status' => true, 'message' => 'Bản tin đã được xóa'));
				} else {
					echo json_encode(array('status' => false, 'message' => 'Yêu cầu của bạn không thành công'));
				}
			}
		}
	}

	// Edit resource
	public function edit($id) {
		$resource = $this->partner->get($id, '');
		$return_url = ADMIN_URL.'partner';

		$data = array();
		$message = '';

		if($this->input->post()) {
			$id = $this->input->post('id') ? $this->input->post('id'): '';

			foreach($_POST as $k => $v) {
				$data[$k] = $v;
			}

			$data['published'] = $this->input->post('published') ? $this->input->post('published'): 0;
		
			$result = $this->partner->insert_update($id, $data);

			if($result){
				$this->session->set_flashdata('message', 'Changes has been saved successfully!');
				redirect(ADMIN_URL.'partner/edit/'.$id, 'refresh');
			} else {
				$this->session->set_flashdata('error', 'The server is not responding, try again later.');
				redirect(ADMIN_URL.'partner/edit/'.$id, 'refresh');
			}
		}

		$this->load->vars(array('title' => $resource->company_name));
		$this->template->set('resource', $resource);
		$this->template->set('message', $message);
		$this->template->set('return_url', $return_url);
		$this->template->build('manager/edit');
	}

	// Create new resource
	public function create() {
		
		$data = array();
		$message = '';
		$return_url = ADMIN_URL.'partner';

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
				$result = $this->partner->insert_update('', $data);

				if($result){
					$this->session->set_flashdata('message', 'Changes has been saved successfully!');
					redirect(ADMIN_URL.'partner', 'refresh');
				} else {
					$this->session->set_flashdata('error', 'The server is not responding, try again later.');
					redirect(ADMIN_URL.'partner/create/', 'refresh');
				}
			//}
		}

		$this->load->vars(array('title' => 'Tạo mới'));
		$this->template->set('message', $message);
		$this->template->set('return_url', $return_url);
		$this->template->build('manager/edit');
	}


}
