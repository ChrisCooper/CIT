<?php

class Media extends CI_Controller {
       
	public function __construct() {
	      
		parent::__construct();
		$this->load->library('template');
		$this->load->helper(array(
                'url',
                'resource',
                'path',
        ));
        
        $this->load->database();
        
        $this->load->model('message');
        $this->load->model('message_series_model');
	}
	
	function _write_resources() {
	        $styles = style_tag(style_url('layout.css'));
	        $styles = $styles . style_tag(style_url('media_layout.css'));
			$styles = $styles . '<style type="text/css">
                 body {
                      background-image: url(../../images/CIT-Blank-Background.png);
                      background-repeat: repeat-x;
                }</style>';
		$this->template->write_view('header_user_info', 'header_user_info_default');
	        $this->template->write('_styles', $styles);
	}
	
	function index() {
	    redirect('/media/item/0', 'refresh');
	}
	
	function item($starting_number=0) {
        if ($starting_number < 0){
            redirect('/media/item/', 'refresh');
        }
        
        $this->_write_resources();
        
        $this->template->write('title_addition', 'Media - Messages');
        
        $messages = $this->message->get_ten_entries_from_offset($starting_number - 1);
        
        if ($messages === FALSE){
            
            if ($starting_number > 1) {
                redirect('/media/item/', 'refresh');
            } else {
                $this->template->write_view('body', 'media/none_body');
                $this->template->render();
            }
            
        } else {
            $this->load->library('pagination');

            $config['base_url'] = site_url("media/item/");
            $config['total_rows'] = Message::count();
            $config['per_page'] = 10;
            $config['num_links'] = 7;
        
            $this->pagination->initialize($config);
            
            $message_markup = "";
            
            foreach ($messages as $message) {
		$message_series = $this->message->fetch_series_filename_and_title($message->series_id);
                $message->series_filename = $message_series->filename;
                $message->title = $message_series->title . " - " . $message->title;
                $message_markup .= $this->load->view('media/individual_message', $message, true);
            }
            
            $view_info['messages'] = $message_markup;
            $view_info['pagination_links'] = $this->pagination->create_links();
        
            $this->template->write_view('body', 'media/body', $view_info);
            
            $this->template->render();
        }
    }
    
    function listen($message_id) {
	$message = $this->message->get_message_by_id($message_id);
	$message_series = $this->message->fetch_series_filename_and_title($message->series_id);
	$message->series_filename = $message_series->filename;
	$message->series_title = $message_series->title . " - " . $message->title;
	
	$this->load->view('media/listen/all', $message);
    }
}

?>