<?php

class Message_series extends CI_Controller {
       
    public function __construct() {
        parent::__construct();
        $this->load->library('template');
        
        $this->load->helper(array(
                'url',
                'resource',
                'form',
                'path',
        ));
        
        $this->load->database();
        
        $this->load->model('message_series_model');
    }
    
    function _static_parts() {
        //Render sub-views
        $this->template->write_view('header_user_info', 'header_user_info_default');
          
        $styles = style_tag(style_url('layout.css'));
        $styles .= style_tag(style_url('admin_layout.css'));
        $styles .= '<link rel="stylesheet" href="http://jqueryui.com/themes/base/jquery.ui.all.css">';
        $this->template->write('_styles', $styles);
        
        $this->template->write("external_scripts", "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js'></script>");
        $this->template->write("external_scripts", "<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js'></script>");
        
        $this->template->write_view('menu', 'menu');
    }
    
    function index() {
        redirect('/admin/message_series/item/0', 'refresh');
    }
    
    
    function item($starting_number=0) {
        if ($starting_number < 0){
            redirect('/admin/message_series/item/', 'refresh');
        }
        
        $this->_static_parts();
        
        $this->template->write('title_addition', 'Admin - Message Series');
        
        $message_series = $this->message_series_model->get_ten_entries_from_offset($starting_number - 1);
        
        if ($message_series === FALSE){
            
            if ($starting_number > 1) {
                redirect('/admin/message_series/item/', 'refresh');
            } else {
                $this->template->write_view('body', 'message_series/create/none_body');
                $this->template->render();
            }
            
        } else {
            $this->load->library('pagination');

            $config['base_url'] = site_url("admin/message_series/item/");;
            $config['total_rows'] = Message_series_model::count();
            $config['per_page'] = 10;
            $config['num_links'] = 7;
        
            $this->pagination->initialize($config);
            
            $series_markup = "";
            
            foreach ($message_series as $series) {
                $series_markup .= $this->load->view('message_series/individual_message_series', $series, true);
            }
            
            $view_info['message_series'] = $series_markup;
            $view_info['pagination_links'] = $this->pagination->create_links();
        
            $this->template->write_view('body', 'message_series/body', $view_info);
            
            $this->template->render();
        }
    }
    
    function create_success() {
        $this->_static_parts();
            
        $this->template->write('title_addition', 'Admin - Message Series Created');
    
        $this->template->write_view('body', 'message_series/create_success/body');
        
        $this->template->render();
    }
   
    
    function create(){
        $form_validation_config = array(
            array(
                  'field'   => 'title', 
                  'label'   => 'Title', 
                  'rules'   => 'trim|required|max_length[250]|xss_clean'
            ),
            array(
                  'field'   => 'ministry', 
                  'label'   => 'Ministry', 
                  'rules'   => 'trim|max_length[250]|xss_clean'
            ),
        );
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules($form_validation_config);
        
        if (isset($_POST['submit']) && $this->form_validation->run()){
            $this->_perform_file_upload_validation();
        } else {
            $view_info = array();
            $view_info['upload_errors'] = "";
            $this->_render_create_view($view_info);
        }
    }
    
    function confirm_deletion() {
        $this->_static_parts();
        
        $this->template->write('title_addition', 'Admin - Confirm Message Series Deletion');
    
        $view_info['id'] = $this->input->post('id');
        $this->template->write_view('body', 'message_series/confirm_deletion/body', $view_info);
        
        $this->template->render();
    }
    
    function delete() {
        $success = Message_series_model::delete_model_by_id($this->input->post('id'));
        redirect('/admin/message_series/deletion_success/', 'refresh');
    }
    
    function deletion_success() {
        $this->_static_parts();
            
        $this->template->write('title_addition', 'Admin - Message Series Deleted');
    
        $this->template->write_view('body', 'message_series/deletion_success/body');
        
        $this->template->render();
    }

    function _perform_file_upload_validation(){
        $message_series = new Message_series_model;
        $message_series->title = $this->input->post('title');
        $message_series->ministry = $this->input->post('ministry');
        
        $config['upload_path'] = set_realpath('../message_series/');
        $config['allowed_types'] = 'png';
        $config['max_size']	= '100';
	$config['max_width']  = '100';
	$config['max_height']  = '100';
        $config['file_name'] = $message_series->get_and_set_filename();

        $this->load->library('upload', $config);
        
        $was_uploaded = $this->upload->do_upload();
        $upload_error = $this->upload->display_errors();
        if ($was_uploaded){
            $message_series->insert_self();
            redirect('/admin/message_series/create_success/', 'refresh');
        } else {
            $view_info = array();
            $view_info['upload_errors'] = $upload_error;
            $this->_render_create_view($view_info);
        }
    }
    
    function _render_create_view($view_info) {
        $this->_static_parts();
        $this->template->write('title_addition', 'Admin - New Message Series');
        $this->template->write_view('body', 'message_series/create/body', $view_info);
        
        $this->template->render();
    }
    
}

?>