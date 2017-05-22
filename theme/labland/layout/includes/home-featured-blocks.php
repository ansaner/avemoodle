<?php

$hasfeaturedsectiontitle = (!empty($PAGE->theme->settings->featuredsectiontitle));
$hasfeaturedsectionintro = (!empty($PAGE->theme->settings->featuredsectionintro));

$hashomeblock1image = (!empty($PAGE->theme->settings->homeblock1image));
$hashomeblock2image = (!empty($PAGE->theme->settings->homeblock2image));
$hashomeblock3image = (!empty($PAGE->theme->settings->homeblock3image));
$hashomeblock4image = (!empty($PAGE->theme->settings->homeblock4image));
$hashomeblock5image = (!empty($PAGE->theme->settings->homeblock5image));
$hashomeblock6image = (!empty($PAGE->theme->settings->homeblock6image));


$hashomeblock1title = (!empty($PAGE->theme->settings->homeblock1title));
$hashomeblock2title = (!empty($PAGE->theme->settings->homeblock2title));
$hashomeblock3title = (!empty($PAGE->theme->settings->homeblock3title));
$hashomeblock4title = (!empty($PAGE->theme->settings->homeblock4title));
$hashomeblock5title = (!empty($PAGE->theme->settings->homeblock5title));
$hashomeblock6title = (!empty($PAGE->theme->settings->homeblock6title));

$hashomeblock1content = (!empty($PAGE->theme->settings->homeblock1content));
$hashomeblock2content = (!empty($PAGE->theme->settings->homeblock2content));
$hashomeblock3content = (!empty($PAGE->theme->settings->homeblock3content));
$hashomeblock4content = (!empty($PAGE->theme->settings->homeblock4content));
$hashomeblock5content = (!empty($PAGE->theme->settings->homeblock5content));
$hashomeblock6content = (!empty($PAGE->theme->settings->homeblock6content));


$hashomeblock1url = (!empty($PAGE->theme->settings->homeblock1url));
$hashomeblock2url = (!empty($PAGE->theme->settings->homeblock2url));
$hashomeblock3url = (!empty($PAGE->theme->settings->homeblock3url));
$hashomeblock4url = (!empty($PAGE->theme->settings->homeblock4url));
$hashomeblock5url = (!empty($PAGE->theme->settings->homeblock5url));
$hashomeblock6url = (!empty($PAGE->theme->settings->homeblock6url));



/* Block settings */

$featuredsectiontitle = $PAGE->theme->settings->featuredsectiontitle;
$featuredsectionintro = $PAGE->theme->settings->featuredsectionintro;

$homeblock1image = $PAGE->theme->setting_file_url('homeblock1image', 'homeblock1image');
$homeblock2image = $PAGE->theme->setting_file_url('homeblock2image', 'homeblock2image');
$homeblock3image = $PAGE->theme->setting_file_url('homeblock3image', 'homeblock3image');
$homeblock4image = $PAGE->theme->setting_file_url('homeblock4image', 'homeblock4image');
$homeblock5image = $PAGE->theme->setting_file_url('homeblock5image', 'homeblock5image');
$homeblock6image = $PAGE->theme->setting_file_url('homeblock6image', 'homeblock6image');


$homeblock1title = $PAGE->theme->settings->homeblock1title;
$homeblock2title = $PAGE->theme->settings->homeblock2title;
$homeblock3title = $PAGE->theme->settings->homeblock3title;
$homeblock4title = $PAGE->theme->settings->homeblock4title;
$homeblock5title = $PAGE->theme->settings->homeblock5title;
$homeblock6title = $PAGE->theme->settings->homeblock6title;


$homeblock1content = $PAGE->theme->settings->homeblock1content;
$homeblock2content = $PAGE->theme->settings->homeblock2content;
$homeblock3content = $PAGE->theme->settings->homeblock3content;
$homeblock4content = $PAGE->theme->settings->homeblock4content;
$homeblock5content = $PAGE->theme->settings->homeblock5content;
$homeblock6content = $PAGE->theme->settings->homeblock6content;



$homeblock1url = $PAGE->theme->settings->homeblock1url;
$homeblock2url = $PAGE->theme->settings->homeblock2url;
$homeblock3url = $PAGE->theme->settings->homeblock3url;
$homeblock4url = $PAGE->theme->settings->homeblock4url;
$homeblock5url = $PAGE->theme->settings->homeblock5url;
$homeblock6url = $PAGE->theme->settings->homeblock6url;


$homeblock1hasdata = ($homeblock1image||$homeblock1title||$homeblock1content);
$homeblock2hasdata = ($homeblock2image||$homeblock2title||$homeblock2content);
$homeblock3hasdata = ($homeblock3image||$homeblock3title||$homeblock3content);
$homeblock4hasdata = ($homeblock4image||$homeblock4title||$homeblock4content);
$homeblock5hasdata = ($homeblock5image||$homeblock5title||$homeblock5content);
$homeblock6hasdata = ($homeblock6image||$homeblock6title||$homeblock6content);

?>

<?php if($PAGE->theme->settings->usehomeblocks ==1) {?>
<section id="featured-section" class="featured-section section">
    <div class="container">
        <?php if ($hasfeaturedsectiontitle) { ?>
        <h2 class="section-title"><?php echo $featuredsectiontitle ?></h2>
        <?php } ?>
        <div class="row">
            
            <div class="item col-xs-12 col-sm-4">
                <?php if ($homeblock1hasdata) { ?>
                <div class="item-inner">
                    <div class="thumb-holder">
                        
                        <?php if ($hashomeblock1image) {?>
                        <img class="img-responsive" src="<?php echo $homeblock1image ?>" alt="image">
                        <?php } ?>
                        
                    </div><!--//thumb-holder-->
                    <div class="content-holder">
                        <?php if ($hashomeblock1title) {?>
                        <h4 class="featured-title"><?php echo $homeblock1title ?></h4>
                        <?php } ?>
                        <?php if ($hashomeblock1content) {?>
                        <div class="intro">
                            <?php echo $homeblock1content ?>
                        </div><!--//intro-->
                        <?php } ?>
                    </div><!--//content-holder-->
                    <?php if ($hashomeblock1url) {?>
                    <a class="link" href="<?php echo $homeblock1url ?>" ></a>
                    <?php } ?>
                </div><!--//item-inner-->
                <?php } ?>
            </div><!--//item-->
            
            <div class="item col-xs-12 col-sm-4">
                <?php if ($homeblock2hasdata) { ?>
                <div class="item-inner">
                    <div class="thumb-holder">
                        <?php if($hashomeblock2image) {?>
                        <img class="img-responsive" src="<?php echo $homeblock2image ?>" alt="image">
                        <?php } ?>
                    </div><!--//thumb-holder-->
                    <div class="content-holder">
                        <?php if ($hashomeblock2title) {?>
                        <h4 class="featured-title"><?php echo $homeblock2title ?></h4>
                        <?php } ?>
                        <?php if ($hashomeblock2content) {?>
                        <div class="intro">
                            <?php echo $homeblock2content ?>
                        </div><!--//intro-->
                        <?php } ?>
                    </div><!--//content-holder-->
                    <?php if ($hashomeblock2url) {?>
                    <a class="link" href="<?php echo $homeblock2url ?>" ></a>
                    <?php } ?>
                </div><!--//item-inner-->
                <?php } ?>
            </div><!--//item-->
            
            <div class="item col-xs-12 col-sm-4">
                <?php if ($homeblock3hasdata) { ?>
                <div class="item-inner">
                    <div class="thumb-holder">
                        <?php if($hashomeblock3image) {?>
                        <img class="img-responsive" src="<?php echo $homeblock3image ?>" alt="image">
                        <?php } ?>
                    </div><!--//thumb-holder-->
                    <div class="content-holder">
                        <?php if ($hashomeblock3title) {?>
                        <h4 class="featured-title"><?php echo $homeblock3title ?></h4>
                        <?php } ?>
                        <?php if ($hashomeblock3content) {?>
                        <div class="intro">
                            <?php echo $homeblock3content ?>
                        </div><!--//intro-->
                        <?php } ?>
                    </div><!--//content-holder-->
                    <?php if ($hashomeblock3url) {?>
                    <a class="link" href="<?php echo $homeblock3url ?>" ></a>
                    <?php } ?>
                </div><!--//item-inner-->
                <?php } ?>
            </div><!--//item-->
            
            <div class="item col-xs-12 col-sm-4">
                <?php if ($homeblock4hasdata) { ?>
                <div class="item-inner">
                    <div class="thumb-holder">
                        <?php if($hashomeblock4image) {?>
                        <img class="img-responsive" src="<?php echo $homeblock4image ?>" alt="image">
                        <?php } ?>
                    </div><!--//thumb-holder-->
                    <div class="content-holder">
                        <?php if ($hashomeblock4title) {?>
                        <h4 class="featured-title"><?php echo $homeblock4title ?></h4>
                        <?php } ?>
                        <?php if ($hashomeblock4content) {?>
                        <div class="intro">
                            <?php echo $homeblock4content ?>
                        </div><!--//intro-->
                        <?php } ?>
                    </div><!--//content-holder-->
                    <?php if ($hashomeblock4url) {?>
                    <a class="link" href="<?php echo $homeblock4url ?>" ></a>
                    <?php } ?>
                </div><!--//item-inner-->
                <?php } ?>
            </div><!--//item-->
            
            <div class="item col-xs-12 col-sm-4">
                <?php if ($homeblock5hasdata) { ?>
                <div class="item-inner">
                    <div class="thumb-holder">
                        <?php if($hashomeblock5image) {?>
                        <img class="img-responsive" src="<?php echo $homeblock5image ?>" alt="image">
                        <?php } ?>
                    </div><!--//thumb-holder-->
                    <div class="content-holder">
                        <?php if ($hashomeblock5title) {?>
                        <h4 class="featured-title"><?php echo $homeblock5title ?></h4>
                        <?php } ?>
                        <?php if ($hashomeblock5content) {?>
                        <div class="intro">
                            <?php echo $homeblock5content ?>
                        </div><!--//intro-->
                        <?php } ?>
                    </div><!--//content-holder-->
                    <?php if ($hashomeblock5url) {?>
                    <a class="link" href="<?php echo $homeblock5url ?>" ></a>
                    <?php } ?>
                </div><!--//item-inner-->
                <?php } ?>
            </div><!--//item-->
            
            <div class="item col-xs-12 col-sm-4">
                <?php if ($homeblock6hasdata) { ?>
                <div class="item-inner">
                    <div class="thumb-holder">
                        <?php if($hashomeblock6image) {?>
                        <img class="img-responsive" src="<?php echo $homeblock6image ?>" alt="image">
                        <?php } ?>
                    </div><!--//thumb-holder-->
                    <div class="content-holder">
                        <?php if ($hashomeblock6title) {?>
                        <h4 class="featured-title"><?php echo $homeblock6title ?></h4>
                        <?php } ?>
                        <?php if ($hashomeblock6content) {?>
                        <div class="intro">
                            <?php echo $homeblock6content ?>
                        </div><!--//intro-->
                        <?php } ?>
                    </div><!--//content-holder-->
                    <?php if ($hashomeblock6url) {?>
                    <a class="link" href="<?php echo $homeblock6url ?>" ></a>
                    <?php } ?>
                </div><!--//item-inner-->
                <?php } ?>
            </div><!--//item-->
            
        </div><!--//row-->
    </div><!--//container-->
</section><!--//section-->
<?php } ?>