<?php
$hascopyright = (empty($PAGE->theme->settings->copyright)) ? false : $PAGE->theme->settings->copyright;
$hasfooterwidget = (empty($PAGE->theme->settings->footerwidget)) ? false : $PAGE->theme->settings->footerwidget;

/* Footer blocks settings */
$hasfooterblocks = (empty($PAGE->theme->settings->enablefooterblocks)) ? false : $PAGE->theme->settings->enablefooterblocks;
$hasfooterblock1 = (empty($PAGE->theme->settings->footerblock1)) ? false : $PAGE->theme->settings->footerblock1;
$hasfooterblock2 = (empty($PAGE->theme->settings->footerblock2)) ? false : $PAGE->theme->settings->footerblock2;
$hasfooterblock3 = (empty($PAGE->theme->settings->footerblock3)) ? false : $PAGE->theme->settings->footerblock3;

$footerblock1 = $PAGE->theme->settings->footerblock1;
$footerblock2 = $PAGE->theme->settings->footerblock2;
$footerblock3 = $PAGE->theme->settings->footerblock3;

$footerwidget = $PAGE->theme->settings->footerwidget;

?>
    
    
    <!-- ******FOOTER****** --> 
    <footer class="site-footer">
        <div class="container">
                <?php if ($hasfooterblocks) {?>
                <div class="row"> 
                    <div class="footer-links">
                        <?php if ($hasfooterblock1) {?>
                        <div class="footer-col col-xs-12 col-sm-4">
                            <?php echo $footerblock1 ?>
                        </div><!--//footer-col-->
                        <?php }?>
                        <?php if ($hasfooterblock2) {?>
                        <div class="footer-col col-xs-12 col-sm-4">
                            <?php echo $footerblock2 ?>
                        </div><!--//footer-col-->
                        <?php }?>
                        <?php if ($hasfooterblock3) {?>
                        <div class="footer-col col-xs-12 col-sm-4">
                            <?php echo $footerblock3 ?>
                        </div><!--//footer-col-->
                        <?php }?>
                    </div><!--//row-->
                </div><!--//row-->
                <?php }?> 
                
                <?php if ($hasfooterwidget) {?>
                <div class="footer-widget"><?php echo $footerwidget ?></div>
                <?php }?> 
                
                <?php require_once('social-media.php'); ?>
                
                <p class="helplink"><?php echo page_doc_link(get_string('moodledocslink')); ?></p>
                
                <div class="text-center moodle-meta-info">
                    <?php echo $OUTPUT->login_info();?>
                    <?php echo $OUTPUT->standard_footer_html();?>
                </div>

                <?php if ($hascopyright) {
                echo '<div class="text-center copyright-container"><small class="copyright">&copy; '.date("Y").' '.$hascopyright.'</small></div>';
                } ?> 
                
            </div>
        </div><!--//container-->
    </footer><!--//footer-->

    
	

