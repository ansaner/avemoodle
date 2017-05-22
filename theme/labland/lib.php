<?php
/*
 * Include the FontAwesome.
 */
function theme_labland_set_fontwww($css) {
    global $CFG, $PAGE;
    if(empty($CFG->themewww)){
        $themewww = $CFG->wwwroot."/theme";
    } else {
        $themewww = $CFG->themewww;
    }
    $tag = '[[setting:fontwww]]';
    
    $theme = theme_config::load('labland');
    if (!empty($theme->settings->bootstrapcdn)) {
    	$css = str_replace($tag, '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/', $css);
    } else {
    	$css = str_replace($tag, $themewww.'/labland/fonts/', $css);
    }
    return $css;
}

/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */
function theme_labland_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    if ($context->contextlevel == CONTEXT_SYSTEM) {
        $theme = theme_config::load('labland');
        if ($filearea === 'logo') {
            return $theme->setting_file_serve('logo', $args, $forcedownload, $options);
        } else if ((substr($filearea, 0, 9) === 'homeblock') && (substr($filearea, 10, 5) === 'image')) {
            return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
        } else if ((substr($filearea, 0, 4) === 'logo') && (substr($filearea, 5, 5) === 'image')) {
            return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);    
        } else if ((substr($filearea, 0, 11) === 'testimonial') && (substr($filearea, 12, 5) === 'image')) {
            return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
        } else if ($filearea === 'iphoneicon') {
            return $theme->setting_file_serve('iphoneicon', $args, $forcedownload, $options);
        } else if ($filearea === 'iphoneretinaicon') {
            return $theme->setting_file_serve('iphoneretinaicon', $args, $forcedownload, $options);
        } else if ($filearea === 'ipadicon') {
            return $theme->setting_file_serve('ipadicon', $args, $forcedownload, $options);
        } else if ($filearea === 'ipadretinaicon') {
            return $theme->setting_file_serve('ipadretinaicon', $args, $forcedownload, $options);
        } else {
            send_file_not_found();
        }
    } else {
        send_file_not_found();
    }
}


/**
 * Adds any custom CSS to the CSS before it is cached.
 *
 * @param string $css The original CSS.
 * @param string $customcss The custom CSS to add.
 * @return string The CSS which now contains our custom CSS.
 */
function theme_labland_process_css($css, $theme) {
 
    // Set the navbar seperator.
    if (!empty($theme->settings->navbarsep)) {
        $navbarsep = $theme->settings->navbarsep;
    } else {
        $navbarsep = '\f105';
    }
    $css = theme_labland_set_navbarsep($css, $navbarsep);
    
    // Set custom CSS.
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = theme_labland_set_customcss($css, $customcss);    

    // Set the font path.

    $css = theme_labland_set_fontwww($css); 
    
    // Set slideshow slide 1 image url
    if (!empty($theme->settings->slide1image)) {
        $slide1image = $theme->settings->slide1image;
    } else {
        $slide1image = null;
    }
    $css = theme_labland_set_slide1url($css, $slide1image);
    
    // Set slideshow slide 2 image url
    if (!empty($theme->settings->slide2image)) {
        $slide2image = $theme->settings->slide2image;
    } else {
        $slide2image = null;
    }
    $css = theme_labland_set_slide2url($css, $slide2image);
    
    // Set slideshow slide 3 image url
    if (!empty($theme->settings->slide3image)) {
        $slide3image = $theme->settings->slide3image;
    } else {
        $slide3image = null;
    }
    $css = theme_labland_set_slide3url($css, $slide3image);
    
    // Set slideshow slide 4 image url
    if (!empty($theme->settings->slide4image)) {
        $slide4image = $theme->settings->slide4image;
    } else {
        $slide4image = null;
    }
    $css = theme_labland_set_slide4url($css, $slide4image);
    
    // Set slideshow slide 5 image url
    if (!empty($theme->settings->slide5image)) {
        $slide5image = $theme->settings->slide5image;
    } else {
        $slide5image = null;
    }
    $css = theme_labland_set_slide5url($css, $slide5image);
    
    // Set slideshow slide 6 image url
    if (!empty($theme->settings->slide6image)) {
        $slide6image = $theme->settings->slide6image;
    } else {
        $slide6image = null;
    }
    $css = theme_labland_set_slide6url($css, $slide6image);
    
    
    // Set carousel item 1 image url
    if (!empty($theme->settings->carouselitem1image)) {
        $carouselitem1image = $theme->settings->carouselitem1image;
    } else {
        $carouselitem1image = null;
    }
    $css = theme_labland_set_carouselitem1url($css, $carouselitem1image);
    
    // Set carousel item 2 image url
    if (!empty($theme->settings->carouselitem2image)) {
        $carouselitem2image = $theme->settings->carouselitem2image;
    } else {
        $carouselitem2image = null;
    }
    $css = theme_labland_set_carouselitem2url($css, $carouselitem2image);
    
    // Set carousel item 3 image url
    if (!empty($theme->settings->carouselitem3image)) {
        $carouselitem3image = $theme->settings->carouselitem3image;
    } else {
        $carouselitem3image = null;
    }
    $css = theme_labland_set_carouselitem3url($css, $carouselitem3image);
    
    // Set carousel item 4 image url
    if (!empty($theme->settings->carouselitem4image)) {
        $carouselitem4image = $theme->settings->carouselitem4image;
    } else {
        $carouselitem4image = null;
    }
    $css = theme_labland_set_carouselitem4url($css, $carouselitem4image);
    
    // Set carousel item 5 image url
    if (!empty($theme->settings->carouselitem5image)) {
        $carouselitem5image = $theme->settings->carouselitem5image;
    } else {
        $carouselitem5image = null;
    }
    $css = theme_labland_set_carouselitem5url($css, $carouselitem5image);
    
    // Set carousel item 6 image url
    if (!empty($theme->settings->carouselitem6image)) {
        $carouselitem6image = $theme->settings->carouselitem6image;
    } else {
        $carouselitem6image = null;
    }
    $css = theme_labland_set_carouselitem6url($css, $carouselitem6image);
    
 
    return $css;
}


function theme_labland_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}


function theme_labland_set_navbarsep($css, $navbarsep) {
    $tag = '[[setting:navbarsep]]';
    $replacement = $navbarsep;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}


function theme_labland_set_slide1url($css, $slide1image) {
    $tag = '[[setting:slide1image]]';
    $replacement = $slide1image;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_labland_set_slide2url($css, $slide2image) {
    $tag = '[[setting:slide2image]]';
    $replacement = $slide2image;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_labland_set_slide3url($css, $slide3image) {
    $tag = '[[setting:slide3image]]';
    $replacement = $slide3image;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_labland_set_slide4url($css, $slide4image) {
    $tag = '[[setting:slide4image]]';
    $replacement = $slide4image;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_labland_set_slide5url($css, $slide5image) {
    $tag = '[[setting:slide5image]]';
    $replacement = $slide5image;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_labland_set_slide6url($css, $slide6image) {
    $tag = '[[setting:slide6image]]';
    $replacement = $slide6image;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}


function theme_labland_set_carouselitem1url($css, $carouselitem1image) {
    $tag = '[[setting:carouselitem1image]]';
    $replacement = $carouselitem1image;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_labland_set_carouselitem2url($css, $carouselitem2image) {
    $tag = '[[setting:carouselitem2image]]';
    $replacement = $carouselitem2image;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_labland_set_carouselitem3url($css, $carouselitem3image) {
    $tag = '[[setting:carouselitem3image]]';
    $replacement = $carouselitem3image;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_labland_set_carouselitem4url($css, $carouselitem4image) {
    $tag = '[[setting:carouselitem4image]]';
    $replacement = $carouselitem4image;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_labland_set_carouselitem5url($css, $carouselitem5image) {
    $tag = '[[setting:carouselitem5image]]';
    $replacement = $carouselitem5image;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_labland_set_carouselitem6url($css, $carouselitem6image) {
    $tag = '[[setting:carouselitem6image]]';
    $replacement = $carouselitem6image;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}


function theme_labland_page_init(moodle_page $page) {
    $page->requires->jquery();    
    $page->requires->jquery_plugin('bootstrap', 'theme_labland');
    $page->requires->jquery_plugin('backtotop', 'theme_labland');
    $page->requires->jquery_plugin('hoverdropdown', 'theme_labland');
    $page->requires->jquery_plugin('flexslider', 'theme_labland');
    $page->requires->jquery_plugin('matchheight', 'theme_labland');
    $page->requires->jquery_plugin('placeholder', 'theme_labland');
    $page->requires->jquery_plugin('fitvids', 'theme_labland');
    
}