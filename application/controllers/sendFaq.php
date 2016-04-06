<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SendFaq extends CI_Controller {

	public function index()
	{
		$data = array(
			'name'	=> $this->input->post('qname'),
			'email'	=> $this->input->post('qemail'),
			'phone'	=> $this->input->post('qphone'),
			'mess'	=> $this->input->post('qmess'),
			'created_at' => time(),
			'status' => 0
		);

		$this->db->insert('send_faq', $data);

		// $config['protocol'] = 'smtp';
		// $config['smtp_host'] = 'mail.tamdiem.com.vn';
		// $config['smtp_user'] = 'tamdiemweb';
		// $config['smtp_pass'] = 'akf$ATHA89ap';

		$this->load->library('email');
		$this->email->from('Tâm Điểm Communications', 'info@tamdiem.com.vn');
		$this->email->to($data['email']); 
		//$this->email->cc('another@another-example.com'); 
		//$this->email->bcc('them@their-example.com'); 

		$this->email->subject('Thông báo - Tâm Điểm Communications');
		$this->email->message('Câu hỏi của bạn đã được gởi. Chúng tôi sẽ trả lời bạn trong thời gian sớm nhất.');	

		$this->email->send();

		echo json_encode(array('status' => true));	
	}

}

/* End of file sendFaq.php */
/* Location: ./application/controllers/sendFaq.php */