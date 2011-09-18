<?php class Newsletter extends CI_Controller {
       
    public function __construct()
    {
            parent::__construct();
            $this->load->library('template');
            $this->load->library('email');
            $this->config->load('cit');
            $this->load->helper(array(
                'url',
                'resource',
                'form',
                'path',
        ));
    }
    
    function index() {
    
        $form_validation_config = array(
            array(
                  'field'   => 'name',
                  'label'   => 'Name',
                  'rules'   => 'trim|max_length[250]|xss_clean'
            ),
            array(
                  'field'   => 'email',
                  'label'   => 'Email',
                  'rules'   => 'trim|required|valid_email|max_length[250]|xss_clean'
            ),
        );
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules($form_validation_config);
        
        if (isset($_POST['submit']) && $this->form_validation->run()){
            
            $this->email->from('newsletter@s371491580.onlinehome.us', 'CIT Newsletter');
            $this->email->to($this->config->item('cit_newsletter_signup_email'));
            
            $this->email->subject('CIT Newsletter Signup');
            $message = $this->input->post('name') . "\n" . $this->input->post('email');
            $this->email->message($message);

            $this->email->send();
            
            redirect('/newsletter/success', 'refresh');
        } else {
            $this->load->view('newsletter/create');
        }
    }
    
    function success() {
        $this->load->view('newsletter/success');
    }
}
?>