<div id="banner">
    <ul id="slider1" class="demo-wrap">
        <?php
            foreach ($homepage_rotator as $image_url => $link_url) {
                echo '"<li><a href="' . $link_url . '"><img src="' . $image_url . '" width="470" height="294" alt="minilogo" longdesc="Church In Toronto" /></a></li>"';
            }
        ?>
    </ul>
 </div>
 <div id="upevents">
    <div id="top">
       <div id="text"><img src="<?= image_url("CIT-Latest-Message.png"); ?>" width="180" height="28" alt="Latest Message" /></div>
       <div id="more"><a href="<?= site_url("media"); ?>"><img src="<?= image_url("More-btn.png"); ?>" width="58" height="26" alt="morebtn" /></a></div>
    </div>
    <div id="bottom">
      
      	<div id="icon">
            <a href="" onclick="window.open('<?= site_url("media/listen/" . $latest_message->id); ?>','mywindow','width=476,height=245')">
                <img src="<?= site_url("message_series/" . $latest_message->series_filename); ?>" width="275" height="200" alt="Latest Message" />
            </a>
        </div>
      	<div id="text"><h1><?= $latest_message->title;?></h1><?= $latest_message->author;?> - <?= $latest_message->date_recorded;?></div>
 
    </div>
 </div>