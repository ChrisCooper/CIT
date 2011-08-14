<?php

class Home extends CI_Controller {
       
	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
	}
	
	function index()
	{
		
		//Render sub-views
		$this->template->write('title_addition', 'Home');
		$this->template->write_view('header_user_info', 'header_user_info_default');
		$this->template->write_view('body', 'home/body');
		$this->template->write_view('content', 'home/content');
      
		//Render template
		$this->template->render();
		
		
		//<link href="css/layout.css" rel="stylesheet" type="text/css" />
	}
}

?>