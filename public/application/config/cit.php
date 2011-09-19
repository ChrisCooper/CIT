<?php
    //This is where signup mails will be sent to
    $config['cit_newsletter_signup_email'] = 'joshbrinksman@gmail.com';
    
    //This is the address signup emails are sent from.
    //It may have to be from our domain, so if the site moves to churchintoronto.org,
    //this should probably be changed to newsletter@churchintoronto.org
    $config['cit_newsletter_from_email'] = 'newsletter@s371491580.onlinehome.us';


    //Add new entries in here to make additional banner items.
    //e.g.
    //image_url("Community-Ad.png") => site_url('messages'),
    //This means the image "ourdomain.com/images/Community-Ad.png" is displayed,
    //and clicking on it will take the user to "ourdomain.com/messages".
    //Full urls can be used too, e.g.
    //"www.images.com/google_image.png" => "www.google.com",
    $config['homepage_rotator'] = array(
                                        "images/Community-Ad.png" => "",
                                        "images/Kids-Camp-Ad.jpg" => "",
                                        );

?>