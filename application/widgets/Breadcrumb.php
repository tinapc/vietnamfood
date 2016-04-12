<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Breadcrumb extends Widget {
	function run($breadcrumb) {
		    
	    $data['breadcrumb'] = $breadcrumb;

		$this->render('breadcrumb', $data);
	}
}