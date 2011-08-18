<?php

class Media extends CI_Controller {
       
	public function __construct() {
	      
		parent::__construct();
		$this->load->library('template');
		$this->load->helper('url');
		$this->load->helper('resource');
	}
	
	function _write_resources() {
	        $styles = style_tag(style_url('medialayout.css'));
		$styles = $styles . '<style type="text/css">
                 body {
                      background-image: url(../images/CIT-Blank-Background.png);
                      background-repeat: repeat-x;
                }</style>';
	        $this->template->write('_styles', $styles);
	}
	
	function index() {
		
		//Render sub-views
                $this->template->write_view('header_user_info', 'header_user_info_default');
		
		$this->template->write('title_addition', 'Media');
		$this->template->write_view('body', 'media/body');
       
		$this->_write_resources();
       
		//Render template
		$this->template->render();
	}
}

?>