<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
   <?=$series_title;?>
  </title>
  <link href="<?=style_url('listen_layout.css');?>" title="myAU Theme" rel="stylesheet" type="text/css" />
 </head>
 <body>
  <div id="wrapper">
   <div id="graphic">
    <img src="<?=site_url("message_series/" . $series_filename);?>" width="100" height="100" alt="" />
   </div>
   <div id="info">
    <h1>
     <?=$series_title;?>
    </h1>
    <h2>
     <?=$title;?>
    </h2>
    <p>
     &nbsp;
    </p>
    <p>
     <?=$author;?>
     <br />
     <?=$date_recorded;?>
    </p>
   </div>
   <!--<div id="download">
    <a href="audio/May 1, 2011, Jesus- The Saviour for Everyone and In Every Situation.zip">
     Download
    </a>
   </div> -->
   <div id="media">
    <iframe src="<?=site_url('messages/' . $filename);?>" width="440" height="100"></iframe>
   </div>
  </div>
 </body>
</html>
