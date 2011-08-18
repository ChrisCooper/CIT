<?php

class Community extends CI_Controller {
       
	public function __construct() {
	      
		parent::__construct();
		$this->load->library('template');
		$this->load->helper('url');
	}
	
	function _static_parts() {
	      //Render sub-views
	      $this->template->write_view('header_user_info', 'header_user_info_default');
		
	      /*<link href="css/communitylayout.css" rel="stylesheet" type="text/css" />
		<style type="text/css">
			body {
				background-image: url(images/CIT-Blank-Background.png);
				background-repeat: repeat-x;
			}
		</style>*/
	      
	}
	
	function index() {
		
		//Render sub-views
		$this->_static_parts();
		
		$this->template->write('title_addition', 'Community - Our Church');
		$this->template->write_view('body', 'community/body');
       
		//Render template
		$this->template->render();
	}
	
	function serve() {
		
		//Render sub-views
		$this->_static_parts();
		
		$this->template->write('title_addition', 'Community - Serve');
		$this->template->write_view('body', 'community/serve/body');
       
		//Render template
		$this->template->render();
	}
	
	function connect() {
		
		//Render sub-views
		$this->_static_parts();
		
		$this->template->write('title_addition', 'Community - Connect');
		$this->template->write_view('body', 'community/connect/body');
       
		//Render template
		$this->template->render();
		
		/*<script type="text/javascript">
			<!--
		     function MM_swapImgRestore() { //v3.0
		       var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
		     }
		     function MM_preloadImages() { //v3.0
		       var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
			 var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
			 if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
		     }
		     
		     function MM_findObj(n, d) { //v4.01
		       var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
			 d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
		       if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
		       for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
		       if(!x && d.getElementById) x=d.getElementById(n); return x;
		     }
		     
		     function MM_swapImage() { //v3.0
		       var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
			if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
		     }
		     //-->
		</script>*/
	}
}


?>