<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Most_view_product extends Widget {
	function run($status = 1) {
		$this->db->select('id, title, title_en, price, price_promotion');
		$this->db->where(array('content_type' => 'product_item', 'published' => 1));
		$this->db->limit(3);
		$this->db->order_by('viewed', 'desc');
		$data['most_view_products'] = $this->db->get('resource')->result();
		$data['s_lang'] = $this->session->userdata('site_lang') ? $this->session->userdata('site_lang') : 'vi';

		$this->render('most_view_product', $data);
	}
}