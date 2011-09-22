<?php

class Media extends CI_Controller {
       
    public function __construct() {
	      
	parent::__construct();
	$this->load->library('template');
	$this->load->helper(array(
		'url',
		'resource',
		'path',
		'form'
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
		
		$view_info = array();
		$view_info['options'] = $this->_get_search_dropdown_array();
		
                $this->template->write_view('body', 'media/none_body', $view_info);
                $this->template->render();
            }
            
        } else {
            $this->load->library('pagination');

            $config['base_url'] = site_url("media/item/");
            $config['total_rows'] = $this->message->count();
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
	    
	    $view_info['options'] = $this->_get_search_dropdown_array();
        
            $this->template->write_view('body', 'media/body', $view_info);
            
            $this->template->render();
        }
    }
    
    function search($starting_number=0){
	
	if (sizeof($_GET) == 0) {
		redirect('/media/item/', 'refresh');
	}
	
	if ($starting_number < 0){
            redirect('/media/item/', 'refresh');
        }
	
	
	//echo "?" . http_build_query($_GET, '', "&");
	
	//return;
	
	
	$this->_write_resources();
        
        $this->template->write('title_addition', 'Media - Messages');
        
        $messages = $this->message->get_ten_search_results_from_offset($starting_number - 1);
        
        if ($messages === FALSE){
            
            if ($starting_number > 1) {
                redirect('/media/item/', 'refresh');
            } else {
		
		$view_info = array();
		
		$all_series = $this->message_series_model->get_dropdown_info();
            
		$view_info['options'] = $this->_get_search_dropdown_array();
		
                $this->template->write_view('body', 'media/search/none_body', $view_info);
                $this->template->render();
            }
            
        } else {
            $this->load->library('pagination');

            $config['base_url'] = site_url("media/search/");
            $config['total_rows'] = $this->message->count_search_results();
            $config['per_page'] = 10;
            $config['num_links'] = 7;
	    //Add these for jquery GET script
	    $config['full_tag_open'] = '<div id="pagination">';
            $config['full_tag_close'] = '</div>';
        
            $this->pagination->initialize($config);
	    
	    $scripts = '<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>';
	    $scripts .= "<script>window.onload=function(){
	    console.log('going');
	    $('#pagination > a').each(function() {
    var g = window.location.href.slice(window.location.href.indexOf('?'));
    var href = $(this).attr('href');
    $(this).attr('href', href+g);
});
}
</script>";
	    $this->template->write('_scripts', $scripts);
            
            $message_markup = "";
            
            foreach ($messages as $message) {
		$message_series = $this->message->fetch_series_filename_and_title($message->series_id);
                $message->series_filename = $message_series->filename;
                $message->title = $message_series->title . " - " . $message->title;
                $message_markup .= $this->load->view('media/individual_message', $message, true);
            }
            
            $view_info['messages'] = $message_markup;
            $view_info['pagination_links'] = $this->pagination->create_links();
            
	    $view_info['options'] = $this->_get_search_dropdown_array();
	
            $this->template->write_view('body', 'media/body', $view_info);
            
            $this->template->render();
        }
    }
    
    function _get_search_dropdown_array(){
	$all_series = $this->message_series_model->get_dropdown_info();
            
	$array = array();
	    
	foreach ($all_series as $series) {
		$array[$series->id] = $series->title;
        }
	
	$array[''] = 'Any';
	
	return $array;
    }
    
    function listen($message_id) {
	$message = $this->message->get_message_by_id($message_id);
	$message_series = $this->message->fetch_series_filename_and_title($message->series_id);
	$message->series_filename = $message_series->filename;
	$message->series_title = $message_series->title;
	
	$this->load->view('media/listen/all', $message);
    }
}

?>