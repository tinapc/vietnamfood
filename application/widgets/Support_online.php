<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Support_online extends Widget {
	function run($status = 1) {
		$this->db->where(array('published' => 1, 'subPage' => 0));
	    $this->db->order_by('order', 'asc');
	    
	    $data = array();
	    //$data['banners'] = $this->db->get('bigbanner')->result();

		$this->render('support_online', $data);
	}
}