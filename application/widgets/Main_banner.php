<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main_banner extends Widget {
	function run($status = 1) {
		$this->db->where(array('published' => 1, 'subPage' => 0));
	    $this->db->order_by('order', 'asc');
	    
	    $data['banners'] = $this->db->get('bigbanner')->result();

		$this->render('main_banner', $data);
	}
}