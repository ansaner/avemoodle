<?php
    
/* Hero slideshow settings */ 
$hasslide1image = (!empty($PAGE->theme->settings->slide1image));
$hasslide1caption = (!empty($PAGE->theme->settings->slide1caption));
$hasslide1cta = (!empty($PAGE->theme->settings->slide1cta));
$hasslide1url = (!empty($PAGE->theme->settings->slide1url));
$hasslide1urlopennew = ($PAGE->theme->settings->slide1urlopennew == 1);
$hasslide2image = (!empty($PAGE->theme->settings->slide2image));
$hasslide2caption = (!empty($PAGE->theme->settings->slide2caption));
$hasslide2cta = (!empty($PAGE->theme->settings->slide2cta));
$hasslide2url = (!empty($PAGE->theme->settings->slide2url));
$hasslide2urlopennew = ($PAGE->theme->settings->slide2urlopennew == 1);
$hasslide3image = (!empty($PAGE->theme->settings->slide3image));
$hasslide3caption = (!empty($PAGE->theme->settings->slide3caption));
$hasslide3cta = (!empty($PAGE->theme->settings->slide3cta));
$hasslide3url = (!empty($PAGE->theme->settings->slide3url));
$hasslide3urlopennew = ($PAGE->theme->settings->slide3urlopennew == 1);
$hasslide4image = (!empty($PAGE->theme->settings->slide4image));
$hasslide4caption = (!empty($PAGE->theme->settings->slide4caption));
$hasslide4cta = (!empty($PAGE->theme->settings->slide4cta));
$hasslide4url = (!empty($PAGE->theme->settings->slide4url));
$hasslide4urlopennew = ($PAGE->theme->settings->slide4urlopennew == 1);


/* Slide1 */
$slide1image = $PAGE->theme->settings->slide1image;
$slide1caption = $PAGE->theme->settings->slide1caption;
$slide1cta = $PAGE->theme->settings->slide1cta;
$slide1url = $PAGE->theme->settings->slide1url;


/* slide2*/
$slide2image = $PAGE->theme->settings->slide2image;
$slide2caption = $PAGE->theme->settings->slide2caption;
$slide2cta = $PAGE->theme->settings->slide2cta;
$slide2url = $PAGE->theme->settings->slide2url;


/* slide3*/
$slide3image = $PAGE->theme->settings->slide3image;
$slide3caption = $PAGE->theme->settings->slide3caption;
$slide3cta = $PAGE->theme->settings->slide3cta;
$slide3url = $PAGE->theme->settings->slide3url;


/* slide4*/
$slide4image = $PAGE->theme->settings->slide4image;
$slide4caption = $PAGE->theme->settings->slide4caption;
$slide4cta = $PAGE->theme->settings->slide4cta;
$slide4url = $PAGE->theme->settings->slide4url;

/* Hero badge Settings */
$hasherobadgecontent = (!empty($PAGE->theme->settings->herobadgecontent));
$hasherobadgeurl = (!empty($PAGE->theme->settings->herobadgeurl));

$herobadgecontent = $PAGE->theme->settings->herobadgecontent;
$herobadgeurl = $PAGE->theme->settings->herobadgeurl;


/* Quick links Settings */
$hasquicklink1icon = (!empty($PAGE->theme->settings->quicklink1icon));
$hasquicklink1title = (!empty($PAGE->theme->settings->quicklink1title));
$hasquicklink1url = (!empty($PAGE->theme->settings->quicklink1url));
$hasquicklink2icon = (!empty($PAGE->theme->settings->quicklink2icon));
$hasquicklink2title = (!empty($PAGE->theme->settings->quicklink2title));
$hasquicklink2url = (!empty($PAGE->theme->settings->quicklink2url));
$hasquicklink3icon = (!empty($PAGE->theme->settings->quicklink3icon));
$hasquicklink3title = (!empty($PAGE->theme->settings->quicklink3title));
$hasquicklink3url = (!empty($PAGE->theme->settings->quicklink3url));
$hasquicklink4icon = (!empty($PAGE->theme->settings->quicklink4icon));
$hasquicklink4title = (!empty($PAGE->theme->settings->quicklink4title));
$hasquicklink4url = (!empty($PAGE->theme->settings->quicklink4url));

/* quicklink1 */
$quicklink1icon = $PAGE->theme->settings->quicklink1icon;
$quicklink1title = $PAGE->theme->settings->quicklink1title;
$quicklink1url = $PAGE->theme->settings->quicklink1url;
$hasquicklink1urlopennew = ($PAGE->theme->settings->quicklink1urlopennew == 1);

/* quicklink2 */
$quicklink2icon = $PAGE->theme->settings->quicklink2icon;
$quicklink2title = $PAGE->theme->settings->quicklink2title;
$quicklink2url = $PAGE->theme->settings->quicklink2url;
$hasquicklink2urlopennew = ($PAGE->theme->settings->quicklink2urlopennew == 1);

/* quicklink3 */
$quicklink3icon = $PAGE->theme->settings->quicklink3icon;
$quicklink3title = $PAGE->theme->settings->quicklink3title;
$quicklink3url = $PAGE->theme->settings->quicklink3url;
$hasquicklink3urlopennew = ($PAGE->theme->settings->quicklink3urlopennew == 1);

/* quicklink4 */
$quicklink4icon = $PAGE->theme->settings->quicklink4icon;
$quicklink4title = $PAGE->theme->settings->quicklink4title;
$quicklink4url = $PAGE->theme->settings->quicklink4url;
$hasquicklink4urlopennew = ($PAGE->theme->settings->quicklink4urlopennew == 1);

/* Contact Settings */
/* Phone */
$hasphone = (!empty($PAGE->theme->settings->phone));
$phone = $PAGE->theme->settings->phone;
/* Email */
$hasemail = (!empty($PAGE->theme->settings->email));
$email = $PAGE->theme->settings->email;


/* Social Media Settings */
$hastwitter     = (!empty($PAGE->theme->settings->twitter));
$hasfacebook    = (!empty($PAGE->theme->settings->facebook));
$hasgoogleplus  = (!empty($PAGE->theme->settings->googleplus));
$haslinkedin    = (!empty($PAGE->theme->settings->linkedin));
$hasyoutube     = (!empty($PAGE->theme->settings->youtube));
$hasvimeo       = (!empty($PAGE->theme->settings->vimeo));
$hasflickr      = (!empty($PAGE->theme->settings->flickr));
$haspinterest   = (!empty($PAGE->theme->settings->pinterest));
$hasinstagram   = (!empty($PAGE->theme->settings->instagram));
$hasskype       = (!empty($PAGE->theme->settings->skype));
$hasrss         = (!empty($PAGE->theme->settings->rss));

$twitter = $PAGE->theme->settings->twitter;
$facebook = $PAGE->theme->settings->facebook;
$googleplus = $PAGE->theme->settings->googleplus;
$linkedin = $PAGE->theme->settings->linkedin;
$youtube = $PAGE->theme->settings->youtube;
$vimeo = $PAGE->theme->settings->vimeo;
$flickr = $PAGE->theme->settings->flickr;
$pinterest = $PAGE->theme->settings->pinterest;
$instagram = $PAGE->theme->settings->instagram;
$skype = $PAGE->theme->settings->skype;
$rss = $PAGE->theme->settings->rss;


?>

<?php if ($PAGE->theme->settings->useslideshow == 1) { ?>   

    <section class="promo-section section section-on-bg">
        <div class="hero-slider-wrapper">
            <div class="flexslider hero-slider">
                <ul class="slides">
                    <?php if ($hasslide1image) { ?>
                    <li class="slide slide-1">
                        <div class="container">
                            <?php if ($slide1caption) { ?>
                            <div class="slide-box">
                                <div class="slide-box-inner">
                                    <div class="text"><?php echo $slide1caption ?></div>
                                    <?php if ($hasslide1cta) { ?>
                                    <a class="more-link" href="<?php echo $slide1url ?>" <?php if ($hasslide1urlopennew) {?>target="_blank"<?php } ?>><?php echo $slide1cta ?></a>
                                    <?php } ?>
                                </div><!--//slide-box-inner-->
                            </div><!--//slide-box-->
                            <?php } ?>
                        </div>
                    </li>
                    <?php } ?>
                    <?php if ($hasslide2image) { ?>
                    <li class="slide slide-2">
                        <div class="container">
                            <?php if ($slide2caption) { ?>
                            <div class="slide-box">
                                <div class="slide-box-inner">
                                    <div class="text"><?php echo $slide2caption ?></div>
                                    <?php if ($hasslide2cta) { ?>
                                    <a class="more-link" href="<?php echo $slide2url ?>" <?php if ($hasslide2urlopennew) {?>target="_blank"<?php } ?>><?php echo $slide2cta ?></a>
                                    <?php } ?>
                                </div><!--//slide-box-inner-->
                            </div><!--//slide-box-->
                            <?php } ?>
                        </div>
                    </li>
                    <?php } ?>
                    <?php if ($hasslide3image) { ?>
                    <li class="slide slide-3">
                        <div class="container">
                            <?php if ($slide3caption) { ?>
                            <div class="slide-box">
                                <div class="slide-box-inner">
                                    <div class="text"><?php echo $slide3caption ?></div>
                                    <?php if ($hasslide3cta) { ?>
                                    <a class="more-link" href="<?php echo $slide3url ?>" <?php if ($hasslide3urlopennew) {?>target="_blank"<?php } ?>><?php echo $slide3cta ?></a>
                                    <?php } ?>
                                </div><!--//slide-box-inner-->
                            </div><!--//slide-box-->
                            <?php } ?>
                        </div>
                    </li>
                    <?php } ?>
                    <?php if ($hasslide4image) { ?>
                    <li class="slide slide-4">
                        <div class="container">
                            <?php if ($slide4caption) { ?>
                            <div class="slide-box">
                                <div class="slide-box-inner">
                                    <div class="text"><?php echo $slide4caption ?></div>
                                    <?php if ($hasslide4cta) { ?>
                                    <a class="more-link" href="<?php echo $slide4url ?>" <?php if ($hasslide4urlopennew) {?>target="_blank"<?php } ?>><?php echo $slide4cta ?></a>
                                    <?php } ?>
                                </div><!--//slide-box-inner-->
                            </div><!--//slide-box-->
                            <?php } ?>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div><!--//hero-slider-wrapper--> 
        
        <div class="hero-overlay">
            <div class="container-fluid">
                <?php if ($PAGE->theme->settings->enableupperoverlay ==1 ) { ?>
                <div class="overlay-upper">
                    <div class="container">
                        <div class="contact-info pull-left">
                            <?php if ($hasphone) { ?>
                            <div class="item"><i class="fa fa-phone" aria-hidden="true"></i><?php echo $phone ?></div>
                            <?php } ?>
                            <?php if ($hasemail) { ?>
                            <div class="item"><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></div>
                            <?php } ?>
                        </div><!--//contact-info-->
                        <?php if ($PAGE->theme->settings->enablesocial ==1 ) { ?>
                        <ul class="social-media list-inline pull-right">
                            <?php if ($hastwitter) { ?>
                            <li><a href="<?php echo $twitter ?>"  target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <?php } ?>
                            <?php if ($hasfacebook) { ?>
                            <li><a href="<?php echo $facebook ?>"  target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <?php } ?>
                            <?php if ($hasgoogleplus) { ?>
                            <li><a href="<?php echo $googleplus ?>"  target="_blank"><i class="fa fa-google-plus"></i></a></li> 
                            <?php } ?>
                            <?php if ($haslinkedin) { ?>
                            <li><a href="<?php echo $linkedin ?>"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <?php } ?>
                            <?php if ($hasskype) { ?>
                            <li><a href="<?php echo 'skype:'.$skype.'?call' ?>"  target="_blank"><i class="fa fa-skype"></i></a></li>
                            <?php } ?>
                            <?php if ($hasyoutube) { ?>
                            <li><a href="<?php echo $youtube ?>"  target="_blank"><i class="fa fa-youtube"></i></a></li>
                            <?php } ?>
                            <?php if ($hasvimeo) { ?>
                            <li><a href="<?php echo $vimeo ?>"  target="_blank"><i class="fa fa-vimeo"></i></a></li>
                            <?php } ?>
                            <?php if ($hasflickr) { ?>
                            <li><a href="<?php echo $flickr ?>"  target="_blank"><i class="fa fa-flickr"></i></a></li>
                            <?php } ?>
                            <?php if ($hasinstagram) { ?>
                            <li><a href="<?php echo $instagram ?>"  target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <?php } ?>
                            <?php if ($haspinterest) { ?>
                            <li><a href="<?php echo $pinterest ?>"  target="_blank"><i class="fa fa-pinterest"></i></a></li>
                            <?php } ?>
                            <?php if ($hasrss) { ?>   
                            <li class="row-end"><a href="<?php echo $rss ?>"  target="_blank"><i class="fa fa-rss"></i></a></li>   
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </div><!--//container-->
                </div><!--//overlay-upper-->
                <?php } ?>
                
                <?php if ($PAGE->theme->settings->enableloweroverlay == 1) { ?>  
                <div class="overlay-lower">
                    <div class="container">
                        <div class="links">
                            <?php if ($hasquicklink1title) { ?>
                            <div class="link"><a href="<?php echo $quicklink1url ?>" title="<?php echo $quicklink1title ?>"  <?php if ($hasquicklink1urlopennew) {?>target="_blank"<?php } ?> > 
                                <?php if ($hasquicklink1icon) { ?>
                                <i class="fa <?php echo $quicklink1icon ?> link-icon" aria-hidden="true"></i>
                                <?php } ?>
                                <span class="link-text"><?php echo $quicklink1title ?></span></a></div>
                            <?php } ?>
                            
                            <?php if ($hasquicklink2title) { ?>
                            <div class="link"><a href="<?php echo $quicklink2url ?>" title="<?php echo $quicklink2title ?>" <?php if ($hasquicklink2urlopennew) {?>target="_blank"<?php } ?>> 
                                <?php if ($hasquicklink2icon) { ?>
                                <i class="fa <?php echo $quicklink2icon ?> link-icon" aria-hidden="true"></i>
                                <?php } ?>
                                <span class="link-text"><?php echo $quicklink2title ?></span></a></div>
                            <?php } ?>
                            
                            <?php if ($hasquicklink3title) { ?>
                            <div class="link"><a href="<?php echo $quicklink3url ?>" title="<?php echo $quicklink3title ?>" <?php if ($hasquicklink3urlopennew) {?>target="_blank"<?php } ?>> 
                                <?php if ($hasquicklink3icon) { ?>
                                <i class="fa <?php echo $quicklink3icon ?> link-icon" aria-hidden="true"></i>
                                <?php } ?>
                                <span class="link-text"><?php echo $quicklink3title ?></span></a></div>
                            <?php } ?>
                            
                            <?php if ($hasquicklink4title) { ?>
                            <div class="link"><a href="<?php echo $quicklink4url ?>" title="<?php echo $quicklink4title ?>" <?php if ($hasquicklink4urlopennew) {?>target="_blank"<?php } ?>> 
                                <?php if ($hasquicklink4icon) { ?>
                                <i class="fa <?php echo $quicklink4icon ?> link-icon" aria-hidden="true"></i>
                                <?php } ?>
                                <span class="link-text"><?php echo $quicklink4title ?></span></a></div>
                            <?php } ?>
                        </div>
                    </div><!--//container-->
                </div><!--//overlay-lower-->
                <?php } ?>
            </div>
        </div><!--//hero-overlay-->
        
        <?php if ($hasherobadgecontent) { ?> 
        <div class="hero-badge">
            <div class="badge-content">
                <?php echo $herobadgecontent ?>
                <?php if ($hasherobadgeurl) { ?> 
                <a href="<?php echo $herobadgeurl ?>" class="link-mask"></a>
                <?php } ?>
            </div><!--//bagde-content-->
        </div><!--//hero-badge-->
        <?php } ?>
        
    </section><!--//promo-section-->
 
<?php } ?>