<?php
$hasleftsidebar = (empty($PAGE->theme->settings->layout)) ? false : $PAGE->theme->settings->layout;
$hasanalytics = (empty($PAGE->theme->settings->useanalytics)) ? false : $PAGE->theme->settings->useanalytics;


echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Moodle Theme by 3rd Wave Media | elearning.3rdwavemedia.com" />
    <?php require_once(dirname(__FILE__).'/includes/iosicons.php'); ?>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i|Source+Serif+Pro:400,600,700&amp;subset=latin-ext" rel="stylesheet">
    <?php require_once(dirname(__FILE__).'/includes/glyphicons.php'); ?>
    <?php echo $OUTPUT->standard_head_html() ?>
    <?php /*
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    */ ?>
    
    <?php if ($hasanalytics) { ?>
    <!-- Start Google Analytics -->
    <?php require_once(dirname(__FILE__).'/includes/analytics.php'); ?>
    <!-- End Google Analytics -->
    <?php } ?>    
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>


    <?php require_once(dirname(__FILE__).'/includes/header.php'); ?>
    

    <div id="page"> 
        
        <?php require_once(dirname(__FILE__).'/includes/home-hero-slideshow.php');?>     
        
        <?php require_once(dirname(__FILE__).'/includes/alerts.php');?>
        
        <?php require_once(dirname(__FILE__).'/includes/home-news.php');?>
        <?php require_once(dirname(__FILE__).'/includes/home-featured-blocks.php');?> 

        
        <?php require_once(dirname(__FILE__).'/includes/home-testimonials.php');?>
        <?php require_once(dirname(__FILE__).'/includes/home-logos.php'); ?>  
        <?php require_once(dirname(__FILE__).'/includes/home-cta-video-section.php');?> 
               
        
        <?php if (!isloggedin()) { ?>
        
            <div class="page-wrapper page-wrapper-notloggedin">
                <div class="container">
                    <div id="page-content" class="row">
                          
                        <div id="region-main" class="col-md-8 col-sm-12 col-xs-12 col-md-offset-2">                     	
                            <?php
                            echo $OUTPUT->course_content_header();
                            echo $OUTPUT->main_content();
                            echo $OUTPUT->course_content_footer();
                            ?>
                        </div>
                                            
                    </div><!---//page-content-->
                </div><!--//container-->
            </div><!--page-wrapper-->
            
        <?php } else { ?>     
        
        <div class="page-wrapper page-wrapper-loggedin">
            <div class="container">    
                <div id="page-content" class="row">
                    <?php /*
                    <div id="page-navbar" class=" col-md-12 clearfix">
                    	<div class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></div>
                    	<nav class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></nav>
                	</div>
                	*/ ?>
                   <?php if ($hasleftsidebar) { ?>
                    <div id="region-main" class="col-md-9 col-sm-12 col-xs-12 pull-right">
                    <?php } else { ?>
                    <div id="region-main" class="col-md-9 col-sm-12 col-xs-12">
                    <?php } ?>
        
                        <?php
                        echo $OUTPUT->course_content_header();
                        echo $OUTPUT->main_content();
                        echo $OUTPUT->course_content_footer();
                        ?>
                        
                    </div>
                    <?php if ($hasleftsidebar) { ?>
                    <?php echo $OUTPUT->blocks('side-pre', 'col-md-3 col-sm-12 col-xs-12 pull-left'); ?>
                    <?php } else { ?>
                    <?php echo $OUTPUT->blocks('side-pre', 'col-md-3 col-sm-12 col-xs-12 pull-right'); ?>
                    <?php } ?>
                </div><!--//page-content-->            
            </div><!--//container-->        
        </div><!--page-wrapper-->
        
        <?php } ?>
    	
    </div><!--//#page-->
    
    <?php require_once(dirname(__FILE__).'/includes/footer.php'); ?>


<?php echo $OUTPUT->standard_end_of_body_html() ?>

<!-- Frontpage Javascript -->
<script>
    jQuery(document).ready(function($) { 
        
        /* ======= Header Background Slideshow - Flexslider ======= */    
        /* Ref: https://github.com/woothemes/FlexSlider/wiki/FlexSlider-Properties */
    
        $('.hero-slider').flexslider({
            animation: "fade",
            //directionNav: false, //remove the default direction-nav - https://github.com/woothemes/FlexSlider/wiki/FlexSlider-Properties
            //controlNav: false, //remove the default control-nav
            slideshowSpeed: 8000,
            start: function(){
                 $(this).find('.slide').css("display", "block"); //prevent flash of the images
            },
        });   
        /* ======= jQuery Responsive equal heights plugin ======= */
        
         $('#featured-section .item .content-holder').matchHeight();

    
    });
</script>

</body>
</html>
