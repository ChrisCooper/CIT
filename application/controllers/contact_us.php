<?php

class Contact_us extends CI_Controller {
       
	public function __construct() {
	      
		parent::__construct();
		$this->load->library('template');
		$this->load->helper('url');
	}
	
	function index() {
		
		//Render sub-views
                $this->template->write_view('header_user_info', 'header_user_info_default');
		
		$this->template->write('title_addition', 'Contact US');
		$this->template->write_view('body', 'contact_us/body');
       
		//Render template
		$this->template->render();
                
                /*
                <link href="css/medialayout.css" rel="stylesheet" type="text/css" />
                <style type="text/css">
                 body {
                      background-image: url(images/CIT-Blank-Background.png);
                      background-repeat: repeat-x;
                }
                */
	}
}

?>