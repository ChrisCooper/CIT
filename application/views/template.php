<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>Church In Toronto - <?= $title_addition?></title>
   <link href="css/layout.css" rel="stylesheet" type="text/css" />
   <style type="text/css">
      body {
              background-image: url(images/CIT-Background.png);
              background-repeat: repeat-x;
      }
   </style>
   <script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
   <script type="text/javascript" src="swfobject.js"></script>
   <script type="text/javascript">
      var flashvars = {};
      var params = {};
      params.scale = "noscale";
      params.salign = "tl";
      params.wmode = "transparent";
      params.allowfullscreen = "true";
      var attributes = {};
      swfobject.embedSWF("BannerRotatorFX.swf", "BannerRotatorFXDiv", "600", "260", "9.0.0", false, flashvars, params, attributes);
   </script>
</head>

<body>
   <div id="wrapper">
     
      <div id="header">
          <a href="index.html">Home</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="contactus.html">Contact Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;<?= $header_user_info ?>
      </div>
     
      <div id="logo">
          <a href="index.html"><img src="images/CIT-Logo-One-Colour.png" width="355" height="120" alt="Church In Toronto" /></a>
      </div>
     
      <div id="navbar">
        <a href="index.html"> Home </a><a href="about.html"> About </a><a href="media.html"> Media </a><a href="ministries.html"> Ministries </a><a href="community.html"> Community </a> 
      </div>
     
      <?= $body ?>
     
      
      <?= $content ?>
     
      <div id="social">
         <div id="newsletter"><a href="" onClick="window.open('newsletter.html','mywindow','width=500,height=370')"><img src="images/CIT-Newsletter-SM-BTN.png" width="214" height="18" alt="newsletter" /></a></div>
         <div id="blog"><a href="http://www.churchintoronto.blogspot.com"><img src="images/CIT-Blog-SM-BTN.png" width="115" height="32" alt="blog" /></a></div>
         <div id="flickr"><a href="http://www.flickr.com/photos/62810833@N08/"><img src="images/CIT-Flickr-SM-BTN.png" width="62" height="21" alt="flickr" /></a></div>
         <div id="vimeo"><a href="http://vimeo.com/join"><img src="images/CIT-Vimeo-BTN.png" width="72" height="26" alt="vimeo" /></a></div>
         <div id="facebook"><a href="http://www.facebook.com/pages/CITYouth/53076858532"><img src="images/CIT-Facebook-BTN.png" width="100" height="22" alt="facebook" /></a></div>
      </div>
    
      <div id="footer">
         <div id="minilogo"><a href="index.html"><img src="images/CIT-Mini-Logo.png" width="126" height="47" alt="minilogo" longdesc="Church In Toronto" /></a></div>
         <div id="sitemap"><a href="index.html">Home</a>  &nbsp;&nbsp;|&nbsp;&nbsp;  <a href="about.html">About</a> &nbsp;&nbsp;|&nbsp;&nbsp;  <a href="media.html">Media</a> &nbsp;&nbsp;|&nbsp;&nbsp;  <a href="ministries.html">Ministries</a> &nbsp;&nbsp;|&nbsp;&nbsp;  <a href="community.html">Community</a> &nbsp;&nbsp;|&nbsp;&nbsp;  <a href="service-location.html">Service Times and Location</a> &nbsp;&nbsp;|&nbsp;&nbsp;<a href="contactus.html">  Contact Us</a></div>
         <div id="copy">Copyright 2011 Church In Toronto. All Rights Reserved.</div>
      </div>
   
   </div>
</body>

</html>
