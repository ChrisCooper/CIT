<?php

class Welcome extends CI_Controller {
       
	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		
		$this->load->helper(array(
			'url',
			'resource',
			'form',
			'path',
		));
		
                $this->load->database();
	}
	
	function _static_parts() {
	      //Render sub-views
	      $this->template->write_view('header_user_info', 'header_user_info_default');
		
	      $styles = style_tag(style_url('layout.css'));
	      $styles = $styles . style_tag(style_url('admin_layout.css'));
	      $this->template->write('_styles', $styles);
	}
	
	function index()
	{
		$this->_static_parts();
		
		//Render sub-views
		$this->template->write('title_addition', 'Admin - Home');
		
		$this->template->write_view('body', 'body');
		$this->template->write_view('menu', 'menu');
		
		//Render template
		
		$this->template->render();
	}
}

?>