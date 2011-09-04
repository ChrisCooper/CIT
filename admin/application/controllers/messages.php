<?php

class Messages extends CI_Controller {
       
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
		$this->template->write('title_addition', 'Admin');
	
		$this->template->write_view('body', 'admin/body');
      
		//Render template
		
		$this->template->render();
	}
	
	function do_upload_message()
	{
		$config['upload_path'] = set_realpath('messages/');
		$config['allowed_types'] = 'mp3|wav';
		$config['max_size'] = '40000';
		$config['file_name'] = 

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->template->write_view('body', 'admin/upload_message/body', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->template->write_view('body', 'admin/upload_message_success/body', $data);
		}
		//Render template
		$this->template->render();
		echo $config['upload_path'];
	}
}

?>