<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
   Message Player
  </title>
  <style type="text/css">
   body {
	background-color: #E8E8E8;
	margin: 15px;
}
#wrapper {
	height: 135px;
	width: 535px;
	display: block;
}
#wrapper #graphic  {
	height: 100px;
	width: 100px;
	margin-right: 20px;
	clear: right;
	float: left;
}
#wrapper #info {
	font-family: Arial, Helvetica, sans-serif;
	height: 84px;
	width: 300px;
	clear: right;
	float: left;
	background-color: #FFF;
	padding-top: 8px;
	padding-right: 8px;
	padding-bottom: 8px;
	padding-left: 15px;
}
#wrapper #info h1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #F90;
	text-decoration: none;
	margin: 0px;
	padding: 0px;
	line-height: 20px;
}
#wrapper #info h2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #333;
	text-decoration: none;
	margin: 0px;
	padding: 0px;
	font-weight: normal;
}
#wrapper #info p {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	margin: 0px;
	padding: 0px;
}
#wrapper #download {
	height: 100px;
	width: 70px;
	clear: right;
	float: left;
	background-color: #FFF;
}
#wrapper #download a {
	font-family: Arial, Helvetica, sans-serif;
	color: #333;
	text-decoration: none;
	font-size: 10px;
	font-weight: bold;
	display: block;
	height: 17px;
	width: 60px;
	line-height: 15px;
	text-align: center;
	background-color: #CCC;
	margin-top: 75px;
}

#wrapper #media {
	background-color: #666;
	float: left;
	margin-top: 10px;
	width: 520px;
}
#wrapper #download a:hover {
	background-color: #999;
}
  </style>
 </head>
 <body>
<div id="wrapper"> 
 <div id="graphic"> 
  <img src="<?=$series_filename?>" width="100" height="100" /> 
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
   <?=$date_recorded?>
  </p> 
 </div> 
 <div id="download"> 
  <a href="audio/May 1, 2011, Jesus- The Saviour for Everyone and In Every Situation.zip"> 
   Download
  </a> 
 </div> 
 <script type="text/javascript" src="js/jwplayer.js"> 
 </script> 
 <div id="media"> 
  This text will be replaced
 </div> 
 <script type="text/javascript"> 
  jwplayer('media').setup({
  'flashplayer': 'player.swf',
  'duration': '<?=$duration;?>',
  'file': '<?=$filename;?>',
  'autostart': 'true',
  'controlbar': 'bottom',
  'width': '400',
  'height': '24'
});
 </script> 
</div> 
 </body>
</html>