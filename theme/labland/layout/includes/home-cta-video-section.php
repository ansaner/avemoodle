<?php

$hasctasectiontitle = (!empty($PAGE->theme->settings->ctasectiontitle));
$hasctasectioncontent = (!empty($PAGE->theme->settings->ctasectioncontent ));
$hasctasectionbuttontext = (!empty($PAGE->theme->settings->ctasectionbuttontext ));
$hasctasectionbuttonurl = (!empty($PAGE->theme->settings->ctasectionbuttonurl ));

$ctasectiontitle = $PAGE->theme->settings->ctasectiontitle;
$ctasectioncontent = $PAGE->theme->settings->ctasectioncontent;
$ctasectionbuttontext = $PAGE->theme->settings->ctasectionbuttontext;
$ctasectionbuttonurl = $PAGE->theme->settings->ctasectionbuttonurl;

$hasvideoid = (!empty($PAGE->theme->settings->videoid ));
$hasvideoid2 = (!empty($PAGE->theme->settings->videoid2 ));

$videoid = $PAGE->theme->settings->videoid;
if ($hasvideoid2) {
   $videoid2 = $PAGE->theme->settings->videoid2; 
}

?>

<?php if($PAGE->theme->settings->usectasection ==1) { ?>        
    
    <!-- ******CTA SECTION****** --> 
    <div class="cta-section">
        <div class="container text-center">
            <div class="cta-section-inner">
                <div class="row">
                    <div class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                        <?php if ($hasctasectiontitle) { ?>
                        <h2 class="cta-title"><?php echo $ctasectiontitle ?></h2>
                        <?php } ?>
                        <?php if ($hasctasectioncontent) { ?>
                        <div class="cta-content">
                            <?php echo $ctasectioncontent ?>
                        </div><!--//cta-content-->
                        <?php } ?>
                        <?php if ($hasctasectionbuttontext) { ?>
                        <a class="btn btn-cta btn-ghost" href="<?php if ($hasctasectionbuttonurl) { ?><?php echo $ctasectionbuttonurl ?><?php } ?>"><?php echo $ctasectionbuttontext ?></a>
                        <?php } ?>
                        
                        <?php //if ($hasvideoid) { ?>
                        <div class="video-container video-container-youtube">
                            <iframe width="560" height="315" src="//www.youtube.com/embed/<?php echo $videoid  ?>" frameborder="0" allowfullscreen></iframe>
                            
                        </div><!--//video-container-->
                        <?php //} ?>
                        
                        <?php if ($hasvideoid2) { ?>
                        <div class="video-container video-container-viemo">
                            <iframe width="560" height="315" src="https://player.vimeo.com/video/<?php echo $videoid2  ?>?color=ffffff&portrait=0"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            
                        </div><!--//video-container-->
                        <?php } ?>
                    </div>
                </div><!--//row-->
            </div><!--//cta-section-inner-->
        </div><!--//container-->
    </div><!--//cta-section--> 
    
<?php }?>