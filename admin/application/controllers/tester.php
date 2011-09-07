<?php

class Tester extends CI_Controller {
       
	public function __construct() {
		parent::__construct();
		$this->load->library('template');
		
		$this->load->helper(array(
			'url',
			'resource',
			'form',
			'path',
			'filename',
		));
		
                $this->load->database();
                
                $this->load->model('message');
	}
	
	function index() {
	      $mess = new Message;
	      $mess->title = "Happy messag#$@e that is m\$uch l(**^onger than ´ÆÄ©úthe last one";
	      echo $mess->get_and_set_filename();
	}
}
        
?>