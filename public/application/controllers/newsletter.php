<?php class Newsletter extends CI_Controller {
       
	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->helper('form');
		$this->load->library('email');
	}
	
	function index() {
        
            /*$form_validation_config = array(
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
            
            if (isset($_POST['submit']) && $this->form_validation->run()){*/
                
                $this->email->from('newsletter@s371491580.onlinehome.us', 'CIT Newsletter');
                $this->email->to('chriscooper1991@gmail.com');
                
                $this->email->subject('CIT Newsletter Signup');
                $this->email->message('Testing the email class.');	

                $this->email->send();

                echo 'sending';
                echo $this->email->print_debugger();
                
            /*} else {
                $view_info = array();
                
                $view_info['upload_errors'] = "";
                
                $temp_series = new Message_series_model;
                
                $all_series = $temp_series->get_dropdown_info();
                
                $view_info['options'] = array();
                
                foreach ($all_series as $series) {
                    $view_info['options'][$series->id] = $series->title;
                }
                
                $this->_render_create_view($view_info);
            }*/
    }
}
?>