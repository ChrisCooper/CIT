<?php

class Site extends CI_Controller {
       
	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
	}
	
	function index()
	{
		$this->template->render();
	}
}

?>