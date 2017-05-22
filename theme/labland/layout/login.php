<?php
$hasanalytics = (empty($PAGE->theme->settings->useanalytics)) ? false : $PAGE->theme->settings->useanalytics;
echo $OUTPUT->doctype();
?>
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


    <div id="page" class="container-fluid">
        <div id="page-content" class="row">
                
        	<div id="page-navbar" class="col-md-12 clearfix">
            	<div class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></div>
        		<nav class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></nav>
        	</div>      
        	
            <section id="region-main" class="col-md-12">   
                <div class="region-main-inner">  
                 	
                    <?php
                    echo $OUTPUT->course_content_header();
                    echo $OUTPUT->main_content();
                    echo $OUTPUT->course_content_footer();
                    ?>
                </div><!--//region-main-inner-->
            </section>
            
        </div><!---//page-content-->    	
    </div><!--//#page-->

	<?php require_once(dirname(__FILE__).'/includes/footer.php'); ?>

<?php echo $OUTPUT->standard_end_of_body_html() ?>

</body>
</html>
