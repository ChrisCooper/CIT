<?php

class Home extends CI_Controller {
       
	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->helper('url');
		$this->load->helper('resource');
		$this->load->config('cit');
	}
	
	function _write_resources() {
	        $styles = style_tag(style_url('layout.css'));
		$styles = $styles . style_tag(style_url('home_layout.css'));
		$styles = $styles . style_tag(style_url('rotator_layout.css'));
		$styles = $styles . '<style type="text/css">
                 body {
                      background-image: url(images/CIT-Background.png);
                      background-repeat: repeat-x;
                }</style>';
	        $this->template->write('_styles', $styles);
		
		$scripts = '<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script src="scripts/jquery.bxSlider.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(function(){
  $("#slider1").bxSlider({
    auto: true,
    controls: false,
    autoControls: false,
    pause: 4000,
    mode: "fade",
  });
});
</script>';
		
		$this->template->write('_scripts', $scripts);
	}
	
	function index()
	{
		
		//Render sub-views
		$this->template->write('title_addition', 'Home');
		$this->template->write_view('header_user_info', 'header_user_info_default');
		$view_info = array();
		$view_info['homepage_rotator'] = $this->config->item('homepage_rotator');
		$this->template->write_view('body', 'home/body', $view_info);
		$this->template->write_view('content', 'home/content');
		
		$this->_write_resources();
      
		//Render template
		$this->template->render();
	}
}

?>