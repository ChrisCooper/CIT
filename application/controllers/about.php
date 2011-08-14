<?php

class About extends CI_Controller {
       
	public function __construct() {
	      
		parent::__construct();
		$this->load->library('template');
	}
	
	function _static_parts() {
	      //Render sub-views
	      $this->template->write_view('header_user_info', 'header_user_info_default');
	      $this->template->write_view('menu', 'about/menu');
		
	      //<link href="css/aboutlayout.css" rel="stylesheet" type="text/css" />
	}
	
	function index() {
		
		//Render sub-views
		$this->_static_parts();
		
		$this->template->write('title_addition', 'About - Our Church');
		$this->template->write_view('body', 'about/body');
       
		//Render template
		$this->template->render();
	}
	
	function what_we_believe() {
		
		//Render sub-views
		$this->_static_parts();
		
		$this->template->write('title_addition', 'About - What We Believe');
		$this->template->write_view('body', 'about/what_we_believe/body');
       
		//Render template
		$this->template->render();
	}
	
	function events() {
		
		//Render sub-views
		$this->_static_parts();
		
		$this->template->write('title_addition', 'About - Events');
		$this->template->write_view('body', 'about/events/body');
       
		//Render template
		$this->template->render();
	}
	
	function service_time_location() {
		
		//Render sub-views
		$this->_static_parts();
		
		$this->template->write('title_addition', 'About - Service Time & Location');
		$this->template->write_view('body', 'about/service_time_location/body');
       
		//Render template
		$this->template->render();
	}
	
	function staff_elders() {
		
		//Render sub-views
		$this->_static_parts();
		
		$this->template->write('title_addition', 'About - Staff & Elders');
		$this->template->write_view('body', 'about/staff_elders/body');
       
		//Render template
		$this->template->render();
	}
}

?>