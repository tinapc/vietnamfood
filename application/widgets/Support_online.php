<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Support_online extends Widget {
	function run($status = 1) {
		$data = array();
		$data['s_lang'] = $this->session->userdata('site_lang') ? $this->session->userdata('site_lang') : 'vi';
		$this->render('support_online', $data);
	}
}