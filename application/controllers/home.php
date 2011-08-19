<?php

class Home extends CI_Controller {
       
	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->helper('url');
		$this->load->helper('resource');
	}
	
	function _write_resources() {
	        $styles = style_tag(style_url('layout.css'));
		$styles = $styles . style_tag(style_url('home_layout.css'));
		$styles = $styles . '<style type="text/css">
                 body {
                      background-image: url(images/CIT-Background.png);
                      background-repeat: repeat-x;
                }</style>';
	        $this->template->write('_styles', $styles);
	}
	
	function index()
	{
		
		//Render sub-views
		$this->template->write('title_addition', 'Home');
		$this->template->write_view('header_user_info', 'header_user_info_default');
		$this->template->write_view('body', 'home/body');
		$this->template->write_view('content', 'home/content');
		
		$this->_write_resources();
      
		//Render template
		$this->template->render();
	}
}

?>