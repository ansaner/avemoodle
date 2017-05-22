<?php
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

    <?php if ($PAGE->theme->settings->enablesocialfooter ==1 ) { ?>
    <div class="footer-social text-center">
            <ul class="social-icons list-inline">
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
            </ul><!--//social-icons--> 
    </div><!--//footer-social-->
    <?php } ?>

	

