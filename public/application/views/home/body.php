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
       <div id="text"><img src="<?= image_url("CIT-Upcoming-Events.png"); ?>" width="180" height="28" alt="Upcoming Events" /></div>
       <div id="more"><a href="<?= site_url("about/events"); ?>"><img src="<?= image_url("More-btn.png"); ?>" width="58" height="26" alt="morebtn" /></a></div>
    </div>
    <div id="bottom">
 
       <div id="info">
          <div id="icon">
             <a href="#">JUN<br />
             26</a>
          </div>
          <div id="text">
             <h1>Business Meeting</h1>
             <p>The Annual Business Meeting will be held at 7:00PM at 671 Sheppard Ave E</p>
             <h2>7:00PM - 9:00PM</h2>
          </div>
       </div>
 
       <div id="info">
          <div id="icon">
             <a href="#">JUN<br />
             30</a>
          </div>
          <div id="text">
             <h1>CITYOUTH Conference - One Touch</h1>
             <p>One Touch with Jesus can change your life forever. June 30th - July 2nd</p>
             <h2>Registration Starts 2:00PM</h2>
          </div>
       </div>
 
       <div id="info">
          <div id="icon">
             <a href="#">AUG<br />
             2</a>
          </div>
          <div id="text">
             <h1>KIDS Camp</h1>
             <p>Are you ready for the Ultimate Kids Camp. Registration Forms available</p>
             <h2>Everyday 9:00AM - 4:00PM</h2>
          </div>
       </div>
 
       <div id="info">
          <div id="icon">
             <a href="#">AUG<br />
             5</a>
          </div>
          <div id="text">
             <h1>KIDS Night</h1>
             <p>Join us for Games, Snacks, Singing and A Play. Great for Kids Big and small</p>
             <h2>7:00PM-9:00PM</h2>
          </div>
       </div>
    </div>
 </div>