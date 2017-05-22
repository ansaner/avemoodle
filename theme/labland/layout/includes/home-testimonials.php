<?php

$hastestimonialsectiontitle = (!empty($PAGE->theme->settings->testimonialsectiontitle));
$hastestimonialsectionintro = (!empty($PAGE->theme->settings->testimonialsectionintro));

$hastestimonial1image = (!empty($PAGE->theme->settings->testimonial1image));
$hastestimonial2image = (!empty($PAGE->theme->settings->testimonial2image));
$hastestimonial3image = (!empty($PAGE->theme->settings->testimonial3image));
$hastestimonial4image = (!empty($PAGE->theme->settings->testimonial4image));
$hastestimonial5image = (!empty($PAGE->theme->settings->testimonial5image));


$hastestimonial1name = (!empty($PAGE->theme->settings->testimonial1name));
$hastestimonial2name = (!empty($PAGE->theme->settings->testimonial2name));
$hastestimonial3name = (!empty($PAGE->theme->settings->testimonial3name));
$hastestimonial4name = (!empty($PAGE->theme->settings->testimonial4name));
$hastestimonial5name = (!empty($PAGE->theme->settings->testimonial5name));


$hastestimonial1meta = (!empty($PAGE->theme->settings->testimonial1meta));
$hastestimonial2meta = (!empty($PAGE->theme->settings->testimonial2meta));
$hastestimonial3meta = (!empty($PAGE->theme->settings->testimonial3meta));
$hastestimonial4meta= (!empty($PAGE->theme->settings->testimonial4meta));
$hastestimonial5meta= (!empty($PAGE->theme->settings->testimonial5meta));


$hastestimonial1highlight= (!empty($PAGE->theme->settings->testimonial1highlight));
$hastestimonial2highlight = (!empty($PAGE->theme->settings->testimonial2highlight));
$hastestimonial3highlight = (!empty($PAGE->theme->settings->testimonial3highlight));
$hastestimonial4highlight= (!empty($PAGE->theme->settings->testimonial4highlight));
$hastestimonial5highlight= (!empty($PAGE->theme->settings->testimonial5highlight));


$hastestimonial1content= (!empty($PAGE->theme->settings->testimonial1content));
$hastestimonial2content = (!empty($PAGE->theme->settings->testimonial2content));
$hastestimonial3content = (!empty($PAGE->theme->settings->testimonial3content));
$hastestimonial4content= (!empty($PAGE->theme->settings->testimonial4content));
$hastestimonial5content= (!empty($PAGE->theme->settings->testimonial5content));



$testimonialsectiontitle = $PAGE->theme->settings->testimonialsectiontitle;
$testimonialsectionintro = $PAGE->theme->settings->testimonialsectionintro;

$testimonial1image = $PAGE->theme->setting_file_url('testimonial1image', 'testimonial1image');
$testimonial2image = $PAGE->theme->setting_file_url('testimonial2image', 'testimonial2image');
$testimonial3image = $PAGE->theme->setting_file_url('testimonial3image', 'testimonial3image');
$testimonial4image = $PAGE->theme->setting_file_url('testimonial4image', 'testimonial4image');
$testimonial5image = $PAGE->theme->setting_file_url('testimonial5image', 'testimonial5image');


$testimonial1highlight = $PAGE->theme->settings->testimonial1highlight;
$testimonial2highlight = $PAGE->theme->settings->testimonial2highlight;
$testimonial3highlight = $PAGE->theme->settings->testimonial3highlight;
$testimonial4highlight = $PAGE->theme->settings->testimonial4highlight;
$testimonial5highlight = $PAGE->theme->settings->testimonial5highlight;


$testimonial1content = $PAGE->theme->settings->testimonial1content;
$testimonial2content = $PAGE->theme->settings->testimonial2content;
$testimonial3content = $PAGE->theme->settings->testimonial3content;
$testimonial4content = $PAGE->theme->settings->testimonial4content;
$testimonial5content = $PAGE->theme->settings->testimonial5content;


$testimonial1name = $PAGE->theme->settings->testimonial1name;
$testimonial2name = $PAGE->theme->settings->testimonial2name;
$testimonial3name = $PAGE->theme->settings->testimonial3name;
$testimonial4name = $PAGE->theme->settings->testimonial4name;
$testimonial5name = $PAGE->theme->settings->testimonial5name;


$testimonial1meta = $PAGE->theme->settings->testimonial1meta;
$testimonial2meta = $PAGE->theme->settings->testimonial2meta;
$testimonial3meta = $PAGE->theme->settings->testimonial3meta;
$testimonial4meta = $PAGE->theme->settings->testimonial4meta;
$testimonial5meta = $PAGE->theme->settings->testimonial5meta;


$testimonial1hasdata = ($testimonial1image||$testimonial1highlight||$testimonial1content||$testimonial1content||$testimonial1name||$testimonial1meta);

$testimonial2hasdata = ($testimonial2image||$testimonial2highlight||$testimonial2content||$testimonial2content||$testimonial2name||$testimonial2meta);

$testimonial3hasdata = ($testimonial3image||$testimonial3highlight||$testimonial3content||$testimonial3content||$testimonial3name||$testimonial3meta);

$testimonial4hasdata = ($testimonial4image||$testimonial4highlight||$testimonial4content||$testimonial4content||$testimonial4name||$testimonial4meta);

$testimonial5hasdata = ($testimonial5image||$testimonial5highlight||$testimonial5content||$testimonial5content||$testimonial5name||$testimonial5meta);


?>


<?php if($PAGE->theme->settings->usetestimonials ==1) { ?> 
 
    <section class="reviews-section">
        <div class="container text-center">           
            <div id="reviews-carousel" class="reviews-carousel carousel slide" data-ride="carousel">
                <!--//wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php if ($hastestimonial1content) {?>
                    <div class="item active">
                        <?php if ($hastestimonial1highlight) {?>
                        <h3 class="review-title"><i class="fa fa-quote-left"></i><?php echo $testimonial1highlight ?><i class="fa fa-quote-right hidden-xs"></i></h3>
                        <?php } ?>
                        <blockquote class="review center-block">
                            <p><?php echo $testimonial1content ?></p>
                        </blockquote><!--//review-->
                        <div class="source">
                            <?php if ($hastestimonial1name) {?>
                            <div class="name"><?php echo $testimonial1name ?></div>
                            <?php } ?>
                            <?php if ($hastestimonial1meta) {?>
                            <div class="title"><?php echo $testimonial1meta ?></div>
                            <?php } ?>
                        </div><!--//source-->    
                    </div><!--//item-->
                    <?php } ?>
                    
                    <?php if ($hastestimonial2content) {?>
                    <div class="item">
                        <?php if ($hastestimonial2highlight) {?>
                        <h3 class="review-title"><i class="fa fa-quote-left"></i><?php echo $testimonial2highlight ?><i class="fa fa-quote-right hidden-xs"></i></h3>
                        <?php } ?>
                        <blockquote class="review center-block">
                            <p><?php echo $testimonial2content ?></p>
                        </blockquote><!--//review-->
                        <div class="source">
                            <?php if ($hastestimonial2name) {?>
                            <div class="name"><?php echo $testimonial2name ?></div>
                            <?php } ?>
                            <?php if ($hastestimonial2meta) {?>
                            <div class="title"><?php echo $testimonial2meta ?></div>
                            <?php } ?>
                        </div><!--//source-->    
                    </div><!--//item-->
                    <?php } ?>
                    
                    <?php if ($hastestimonial3content) {?>
                    <div class="item">
                        <?php if ($hastestimonial3highlight) {?>
                        <h3 class="review-title"><i class="fa fa-quote-left"></i><?php echo $testimonial3highlight ?><i class="fa fa-quote-right hidden-xs"></i></h3>
                        <?php } ?>
                        <blockquote class="review center-block">
                            <p><?php echo $testimonial3content ?></p>
                        </blockquote><!--//review-->
                        <div class="source">
                            <?php if ($hastestimonial3name) {?>
                            <div class="name"><?php echo $testimonial3name ?></div>
                            <?php } ?>
                            <?php if ($hastestimonial3meta) {?>
                            <div class="title"><?php echo $testimonial3meta ?></div>
                            <?php } ?>
                        </div><!--//source-->    
                    </div><!--//item-->
                    <?php } ?>
                    
                    <?php if ($hastestimonial4content) {?>
                    <div class="item">
                        <?php if ($hastestimonial4highlight) {?>
                        <h3 class="review-title"><i class="fa fa-quote-left"></i><?php echo $testimonial4highlight ?><i class="fa fa-quote-right hidden-xs"></i></h3>
                        <?php } ?>
                        <blockquote class="review center-block">
                            <p><?php echo $testimonial4content ?></p>
                        </blockquote><!--//review-->
                        <div class="source">
                            <?php if ($hastestimonial4name) {?>
                            <div class="name"><?php echo $testimonial4name ?></div>
                            <?php } ?>
                            <?php if ($hastestimonial4meta) {?>
                            <div class="title"><?php echo $testimonial4meta ?></div>
                            <?php } ?>
                        </div><!--//source-->    
                    </div><!--//item-->
                    <?php } ?>
                    
                    <?php if ($hastestimonial5content) {?>
                    <div class="item">
                        <?php if ($hastestimonial5highlight) {?>
                        <h3 class="review-title"><i class="fa fa-quote-left"></i><?php echo $testimonial5highlight ?><i class="fa fa-quote-right hidden-xs"></i></h3>
                        <?php } ?>
                        <blockquote class="review center-block">
                            <p><?php echo $testimonial5content ?></p>
                        </blockquote><!--//review-->
                        <div class="source">
                            <?php if ($hastestimonial5name) {?>
                            <div class="name"><?php echo $testimonial5name ?></div>
                            <?php } ?>
                            <?php if ($hastestimonial5meta) {?>
                            <div class="title"><?php echo $testimonial5meta ?></div>
                            <?php } ?>
                        </div><!--//source-->    
                    </div><!--//item-->
                    <?php } ?>
                    
                </div><!--//carousel-inner-->
                
                <?php if($PAGE->theme->settings->usetestimonialsprofileimage ==1) { ?> 
                <!--//Indicators-->
                <ol class="carousel-indicators">
                    <?php if ($testimonial1hasdata) {?>
                    <li class="active" data-target="#reviews-carousel" data-slide-to="0">
                        <?php if ($hastestimonial1image) {?>
                        <img class="img-responsive" src="<?php echo $testimonial1image ?>" alt="<?php echo $testimonial1name ?>">
                        <?php } else {?>
                        <img class="img-rounded img-circle" src="<?php echo $OUTPUT->pix_url('images/default-profile', 'theme'); ?>"  alt="<?php echo $testimonial1name ?>" />
                        <?php } ?> 
                    </li>
                    <?php } ?> 
                    
                    <?php if ($testimonial2hasdata) {?>
                    <li data-target="#reviews-carousel" data-slide-to="1">
                        <?php if ($hastestimonial2image) {?>
                        <img class="img-responsive" src="<?php echo $testimonial2image ?>" alt="<?php echo $testimonial2name ?>">
                        <?php } else {?>
                        <img class="img-rounded img-circle" src="<?php echo $OUTPUT->pix_url('images/default-profile', 'theme'); ?>"  alt="<?php echo $testimonial2name ?>" />
                        <?php } ?> 
                    </li>
                    <?php } ?>
                    
                    
                    <?php if ($testimonial3hasdata) {?>
                    <li data-target="#reviews-carousel" data-slide-to="2">
                        <?php if ($hastestimonial3image) {?>
                        <img class="img-responsive" src="<?php echo $testimonial3image ?>" alt="<?php echo $testimonial3name ?>">
                        <?php } else {?>
                        <img class="img-rounded img-circle" src="<?php echo $OUTPUT->pix_url('images/default-profile', 'theme'); ?>"  alt="<?php echo $testimonial3name ?>" />
                        <?php } ?> 
                    </li>
                    <?php } ?>
                    
                    <?php if ($testimonial4hasdata) {?>
                    <li data-target="#reviews-carousel" data-slide-to="3">
                        <?php if ($hastestimonial4image) {?>
                        <img class="img-responsive" src="<?php echo $testimonial4image ?>" alt="<?php echo $testimonial4name ?>">
                        <?php } else {?>
                        <img class="img-rounded img-circle" src="<?php echo $OUTPUT->pix_url('images/default-profile', 'theme'); ?>"  alt="<?php echo $testimonial4name ?>" />
                        <?php } ?> 
                    </li>
                    <?php } ?>
                    
                    <?php if ($testimonial5hasdata) {?>
                    <li data-target="#reviews-carousel" data-slide-to="4">
                        <?php if ($hastestimonial5image) {?>
                        <img class="img-responsive" src="<?php echo $testimonial5image ?>" alt="<?php echo $testimonial5name ?>">
                        <?php } else {?>
                        <img class="img-rounded img-circle" src="<?php echo $OUTPUT->pix_url('images/default-profile', 'theme'); ?>"  alt="<?php echo $testimonial5name ?>" />
                        <?php } ?> 
                    </li>
                    <?php } ?>
                
                    
                </ol><!--//carousel-indicators-->
                <?php } ?>
                
            </div>
            
        </div><!--//container-->
    </section><!--//reviews-section-->
    
<?php } ?>