<?php

class Community extends CI_Controller {
       
	public function __construct() {
	      
		parent::__construct();
		$this->load->library('template');
		$this->load->helper('url');
		$this->load->helper('resource');
	}
	
	function _static_parts() {
	      //Render sub-views
	      $this->template->write_view('header_user_info', 'header_user_info_default');
		
	      $styles = style_tag(style_url('layout.css'));
	      $styles = $styles . style_tag(style_url('community_layout.css'));
	      $styles = $styles . '<style type="text/css">
                 body {
                      background-image: url(../images/CIT-Blank-Background.png);
                      background-repeat: repeat-x;
                }</style>';
	      $this->template->write('_styles', $styles);
	}
	
	function index() {
		
		//Render sub-views
		$this->_static_parts();
		
		$this->template->write('title_addition', 'Community - Our Church');
		$this->template->write_view('body', 'community/body');
       
		//Render template
		$this->template->render();
	}
	
	function serve() {
		
		//Render sub-views
		$this->_static_parts();
		
		$this->template->write('title_addition', 'Community - Serve');
		$this->template->write_view('body', 'community/serve/body');
       
		//Render template
		$this->template->render();
	}
	
	function connect() {
		
		//Render sub-views
		$this->_static_parts();
		
		$this->template->write('title_addition', 'Community - Connect');
		$this->template->write_view('body', 'community/connect/body');
       
		//Render template
		$this->template->render();

	}
	
	function pray() {
		
		//Render sub-views
		$this->_static_parts();
		
		$this->template->write('title_addition', 'Community - Pray');
		$this->template->write_view('body', 'community/pray/body');
       
		//Render template
		$this->template->render();

	}
	
	function reach() {
		
		//Render sub-views
		$this->_static_parts();
		
		$this->template->write('title_addition', 'Community - Reach');
		$this->template->write_view('body', 'community/reach/body');
       
		//Render template
		$this->template->render();

	}
}


?>