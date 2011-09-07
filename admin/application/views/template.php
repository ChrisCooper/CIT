<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   
   <title>Church In Toronto - <?= $title_addition?></title>
   
   <?= $_styles ?>
   
   <?= $_scripts ?>
   <?= $external_scripts ?>
   
</head>

<body>
   <div id="wrapper">
     
      <div id="header">
          <a href="<?= site_url(""); ?>">Home</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="<?= site_url("contact_us");?>">Contact Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;<?= $header_user_info ?>
      </div>
     
      <div id="logo">
          <a href="<?= site_url(""); ?>"><img src="<?= image_url("CIT-Logo-One-Colour.png"); ?>" width="355" height="120" alt="Church In Toronto" /></a>
      </div>
     
      <div id="navbar">
        <a href="<?=site_url("");?>"> Home </a><a href="<?= site_url("about"); ?>"> About </a><a href="<?= site_url("media"); ?>"> Media </a><a href="<?= site_url("ministries"); ?>"> Ministries </a><a href="<?= site_url("community"); ?>"> Community </a> 
      </div>
      
     
      <?= $menu ?>
     
      <?= $body ?>
      
      <?= $content ?>
     
      <div id="social">
         <div id="newsletter"><a href="" onClick="window.open('newsletter.html','mywindow','width=500,height=370')"><img src="<?= image_url("CIT-Newsletter-SM-BTN.png"); ?>" width="214" height="18" alt="newsletter" /></a></div>
         <div id="blog"><a href="http://www.churchintoronto.blogspot.com"><img src="<?= image_url("CIT-Blog-SM-BTN.png"); ?>" width="115" height="32" alt="blog" /></a></div>
         <div id="flickr"><a href="http://www.flickr.com/photos/62810833@N08/"><img src="<?= image_url("CIT-Flickr-SM-BTN.png"); ?>" width="62" height="21" alt="flickr" /></a></div>
         <div id="vimeo"><a href="http://vimeo.com/join"><img src="<?= image_url("CIT-Vimeo-BTN.png"); ?>" width="72" height="26" alt="vimeo" /></a></div>
         <div id="facebook"><a href="http://www.facebook.com/pages/CITYouth/53076858532"><img src="<?= image_url("CIT-Facebook-BTN.png"); ?>" width="100" height="22" alt="facebook" /></a></div>
      </div>
    
      <div id="footer">
         <div id="minilogo"><a href="<?= site_url(""); ?>"><img src="<?= image_url("CIT-Mini-Logo.png"); ?>" width="126" height="47" alt="minilogo" longdesc="Church In Toronto" /></a></div>
         <div id="sitemap"><a href="<?= site_url(""); ?>">Home</a>  &nbsp;&nbsp;|&nbsp;&nbsp;  <a href="<?= site_url("about"); ?>">About</a> &nbsp;&nbsp;|&nbsp;&nbsp;  <a href="<?= site_url("media"); ?>">Media</a> &nbsp;&nbsp;|&nbsp;&nbsp;  <a href="<?= site_url("ministries"); ?>">Ministries</a> &nbsp;&nbsp;|&nbsp;&nbsp;  <a href="<?= site_url("community"); ?>">Community</a> &nbsp;&nbsp;|&nbsp;&nbsp;  <a href="<?= site_url("about/service_time_location"); ?>">Service Times and Location</a> &nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?= site_url("contact_us"); ?>">  Contact Us</a></div>
         <div id="copy">Copyright 2011 Church In Toronto. All Rights Reserved. This site is powered by <a href="http://codeigniter.com/">CodeIgniter.</a></div>
      </div>
   
   </div>
</body>

</html>
