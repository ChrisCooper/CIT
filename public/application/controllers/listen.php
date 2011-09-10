<?php

class Listen extends CI_Controller {
       
    public function __construct() {
        parent::__construct();
        
        $this->load->helper(array(
                'url',
                'resource',
                'file',
                'path',
        ));
        
        $this->load->database();
    }
    
    function index() {
        redirect('/media/', 'refresh');
    }
    
    function play($filename) {
        
        $view_info = array();        
        $view_info['filename'] = set_realpath("../messages/") . "test_message.mp3";
        $view_info['title'] = "Test Message";
        $view_info['author'] = "Chris";
        $view_info['date_recorded'] = "August 14th, 2011";
        $view_info['duration'] = "32:57";
        $view_info['series_filename'] = set_realpath("../images/") . "test_series.png";
        $view_info['series_title'] = "test series";
            
		$this->load->view('listen/full_view', $view_info);
    }
}

?>