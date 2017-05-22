<?php

$haslogo1image = (!empty($PAGE->theme->settings->logo1image));
$haslogo2image = (!empty($PAGE->theme->settings->logo2image));
$haslogo3image = (!empty($PAGE->theme->settings->logo3image));
$haslogo4image = (!empty($PAGE->theme->settings->logo4image));
$haslogo5image = (!empty($PAGE->theme->settings->logo5image));
$haslogo6image = (!empty($PAGE->theme->settings->logo6image));

$haslogo1url = (!empty($PAGE->theme->settings->logo1url));
$haslogo2url = (!empty($PAGE->theme->settings->logo2url));
$haslogo3url = (!empty($PAGE->theme->settings->logo3url));
$haslogo4url = (!empty($PAGE->theme->settings->logo4url));
$haslogo5url = (!empty($PAGE->theme->settings->logo5url));
$haslogo6url = (!empty($PAGE->theme->settings->logo6url));

$haslogo1alttext = (!empty($PAGE->theme->settings->logo1alttext));
$haslogo2alttext = (!empty($PAGE->theme->settings->logo2alttext));
$haslogo3alttext = (!empty($PAGE->theme->settings->logo3alttext));
$haslogo4alttext = (!empty($PAGE->theme->settings->logo4alttext));
$haslogo5alttext = (!empty($PAGE->theme->settings->logo5alttext));
$haslogo6alttext = (!empty($PAGE->theme->settings->logo6alttext));

$logo1image = $PAGE->theme->setting_file_url('logo1image', 'logo1image');
$logo2image = $PAGE->theme->setting_file_url('logo2image', 'logo2image');
$logo3image = $PAGE->theme->setting_file_url('logo3image', 'logo3image');
$logo4image = $PAGE->theme->setting_file_url('logo4image', 'logo4image');
$logo5image = $PAGE->theme->setting_file_url('logo5image', 'logo5image');
$logo6image = $PAGE->theme->setting_file_url('logo6image', 'logo6image');

$logo1url = $PAGE->theme->settings->logo1url;
$logo2url = $PAGE->theme->settings->logo2url;
$logo3url = $PAGE->theme->settings->logo3url;
$logo4url = $PAGE->theme->settings->logo4url;
$logo5url = $PAGE->theme->settings->logo5url;
$logo6url = $PAGE->theme->settings->logo6url;

$logo1alttext = $PAGE->theme->settings->logo1alttext;
$logo2alttext = $PAGE->theme->settings->logo2alttext;
$logo3alttext = $PAGE->theme->settings->logo3alttext;
$logo4alttext = $PAGE->theme->settings->logo4alttext;
$logo5alttext = $PAGE->theme->settings->logo5alttext;
$logo6alttext = $PAGE->theme->settings->logo6alttext;

?>

<?php if($PAGE->theme->settings->uselogos ==1) { ?> 
        
<!-- ******Awards Section****** -->         
<section class="awards-section">
        <div class="container">
            <ul class="logos list-inline">
               
                <li class="col-md-2 col-sm-4 col-xs-6">
                <?php if ($haslogo1image) { ?>
                    <?php if($haslogo1url) {?><a href="<?php echo $logo1url ?>" target="_blank"><?php } ?>
                    <img class="img-responsive" src="<?php echo $logo1image ?>"  alt="<?php echo $logo1alttext?>" />
                    <?php if($haslogo1url) {?></a><?php } ?>
                <?php } ?>
                </li>
                
                
                <li class="col-md-2 col-sm-4 col-xs-6">
                <?php if ($haslogo2image) { ?>
                    <?php if($haslogo2url) {?><a href="<?php echo $logo2url ?>" target="_blank"><?php } ?>
                    <img class="img-responsive" src="<?php echo $logo2image ?>"  alt="<?php echo $logo2alttext?>" />
                    <?php if($haslogo2url) {?></a><?php } ?>
                <?php } ?>
                </li>
                
                
                <li class="col-md-2 col-sm-4 col-xs-6 xs-break">
                <?php if ($haslogo3image) { ?>
                    <?php if($haslogo3url) {?><a href="<?php echo $logo3url ?>" target="_blank"><?php } ?>
                    <img class="img-responsive" src="<?php echo $logo3image ?>"  alt="<?php echo $logo3alttext?>" />
                    <?php if($haslogo3url) {?></a><?php } ?>
                <?php } ?>
                </li>
                
                
                <li class="col-md-2 col-sm-4 col-xs-6 sm-break">
                <?php if ($haslogo4image) { ?>
                    <?php if($haslogo4url) {?><a href="<?php echo $logo4url ?>" target="_blank"><?php } ?>
                    <img class="img-responsive" src="<?php echo $logo4image ?>"  alt="<?php echo $logo4alttext?>" />
                    <?php if($haslogo4url) {?></a><?php } ?>
                <?php } ?>
                </li>
                
                
                <li class="col-md-2 col-sm-4 col-xs-6 xs-break">
                <?php if ($haslogo5image) { ?>
                    <?php if($haslogo5url) {?><a href="<?php echo $logo5url ?>" target="_blank"><?php } ?>
                    <img class="img-responsive" src="<?php echo $logo5image ?>"  alt="<?php echo $logo5alttext?>" />
                    <?php if($haslogo5url) {?></a><?php } ?>
                <?php } ?>
                </li>
                
                <li class="col-md-2 col-sm-4 col-xs-6">
                <?php if ($haslogo6image) { ?>
                    <?php if($haslogo6url) {?><a href="<?php echo $logo6url ?>" target="_blank"><?php } ?>
                    <img class="img-responsive" src="<?php echo $logo6image ?>"  alt="<?php echo $logo6alttext?>" />
                    <?php if($haslogo6url) {?></a><?php } ?>
                <?php } ?> 
                </li>  
                
            </ul><!--//logos-->
        </div>
    </section><!--//awards-section-->
<?php }?>