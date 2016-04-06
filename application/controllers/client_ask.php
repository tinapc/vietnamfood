<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_ask extends Admin_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$faqs = $this->db->get('send_faq')->result();
		
		$s_title = 'Khách hàng hỏi';
		$return_url = current_url();
		$linkAdd = '';

		$this->load->vars(array('title' => $s_title));
		$this->template->set('resources', $faqs);
		$this->template->set('return_url', $return_url);
		$this->template->set('linkAdd', $linkAdd);
		$this->template->set('contentType', '');
		$this->template->build('client_ask/index');	
	}

	// Delete resource
	public function delete($id) {
		if(!$this->ion_auth->is_admin()) {
			echo json_encode(array('status' => false, 'message' => 'Bạn không có quyền thực hiện chức năng này'));	
		} else {
			if(!$id || $id == '') {
				echo json_encode(array('status' => false, 'message' => 'Yêu cầu của bạn không thành công'));
			} else {
				if($this->db->delete('send_faq', array('id' => $id))) {
					echo json_encode(array('status' => true, 'message' => 'Bản tin đã được xóa'));
				} else {
					echo json_encode(array('status' => false, 'message' => 'Yêu cầu của bạn không thành công'));
				}
			}
		}
	}

	public function view($id) {
		$this->db->update('send_faq', array('status' => 1), array('id' => $id));
		$faq = $this->db->get_where('send_faq', array('id' => $id))->row();

		$s_title = 'Khách hàng hỏi';
		$return_url = base_url().'client_ask/index/';
		$linkAdd = '';

		$this->load->vars(array('title' => $s_title));
		$this->template->set('resources', $faq);
		$this->template->set('return_url', $return_url);
		$this->template->set('linkAdd', $linkAdd);
		$this->template->set('contentType', '');
		$this->template->build('client_ask/view');
	}

}

/* End of file client_ask.php */
/* Location: ./application/controllers/client_ask.php */