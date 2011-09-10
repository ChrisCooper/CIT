<?php

class Messages extends CI_Controller {
       
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
        
        $this->load->model('message');
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
        $this->template->write("external_scripts", '<script> $(function() {$( "#datepicker" ).datepicker();}); </script>');
        
        
        
        $this->template->write_view('menu', 'menu');
    }
    
    function index() {
        redirect('/admin/messages/item/0', 'refresh');
    }
    
    
    function item($starting_number=0) {
        if ($starting_number < 0){
            redirect('/admin/messages/item/', 'refresh');
        }
        
        $this->_static_parts();
        
        $this->template->write('title_addition', 'Admin - Messages');
        
        $messages = $this->message->get_ten_entries_from_offset($starting_number - 1);
        
        if ($messages === FALSE){
            
            if ($starting_number > 1) {
                redirect('/admin/messages/item/', 'refresh');
            } else {
                $this->template->write_view('body', 'messages/create/none_body');
                $this->template->render();
            }
            
        } else {
            $this->load->library('pagination');

            $config['base_url'] = site_url("admin/messages/item/");;
            $config['total_rows'] = Message::count();
            $config['per_page'] = 10;
            $config['num_links'] = 7;
        
            $this->pagination->initialize($config);
            
            $message_markup = "";
            
            foreach ($messages as $message) {
                $message_markup .= $this->load->view('messages/individual_message', $message, true);
            }
            
            $view_info['messages'] = $message_markup;
            $view_info['pagination_links'] = $this->pagination->create_links();
        
            $this->template->write_view('body', 'messages/body', $view_info);
            
            $this->template->render();
        }
    }
    
    function create_success() {
        $this->_static_parts();
            
        $this->template->write('title_addition', 'Admin - Message Created');
    
        $this->template->write_view('body', 'messages/create_success/body');
        
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
                  'field'   => 'author', 
                  'label'   => 'Author', 
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

    function _perform_file_upload_validation(){
        $message = new Message;
        $message->title = $this->input->post('title');
        $message->author = $this->input->post('author');
        $message->date_recorded = time();
        
        $config['upload_path'] = set_realpath('../messages/');
        $config['allowed_types'] = 'mp3';
        $config['max_size'] = '40000';
        $config['file_name'] = $message->get_and_set_filename();

        $this->load->library('upload', $config);
        
        $was_uploaded = $this->upload->do_upload();
        $upload_error = $this->upload->display_errors();
        if ($was_uploaded){
            $message->insert_self();
            redirect('/admin/messages/create_success/', 'refresh');
        } else {
            $view_info = array();
            $view_info['upload_errors'] = $upload_error;
            $this->_render_create_view($view_info);
        }
    }
    
    function confirm_deletion() {
        $this->_static_parts();
        
        $this->template->write('title_addition', 'Admin - Confirm Message Deletion');
    
        $view_info['id'] = $this->input->post('id');
        $this->template->write_view('body', 'messages/confirm_deletion/body', $view_info);
        
        $this->template->render();
    }
    
    function delete() {
        $success = Message::delete_model_by_id($this->input->post('id'));
        redirect('/admin/messages/deletion_success/', 'refresh');
    }
    
    function deletion_success() {
        $this->_static_parts();
            
        $this->template->write('title_addition', 'Admin - Message Deleted');
    
        $this->template->write_view('body', 'messages/deletion_success/body');
        
        $this->template->render();
    }
    
    function _render_create_view($view_info) {
        $this->_static_parts();
        $this->template->write('title_addition', 'Admin - New Message');
        $this->template->write_view('body', 'messages/create/body', $view_info);
        
        $this->template->render();
    }
}

?>