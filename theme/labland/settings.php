<?php
$settings = null;

defined('MOODLE_INTERNAL') || die;
    
	$ADMIN->add('themes', new admin_category('theme_labland', 'Labland'));

	// "genericsettings" settingpage
	$temp = new admin_settingpage('theme_labland_generic',  get_string('geneticsettings', 'theme_labland'));
	
    // Logo file setting.   
    $name = 'theme_labland/logo';
    $title = get_string('logo','theme_labland');
    $description = get_string('logodesc', 'theme_labland');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);  
    
    // Site Tagline Settings
    $name = 'theme_labland/sitetagline';
    $title = get_string('sitetagline','theme_labland');
    $description = get_string('sitetaglinedesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Header widget setting
    $name = 'theme_labland/headerwidget';
    $title = get_string('headerwidget','theme_labland');
    $description = get_string('headerwidgetdesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Layout - sidebar position.
    $name = 'theme_labland/layout';
    $title = get_string('layout', 'theme_labland');
    $description = get_string('layoutdesc', 'theme_labland');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Include FontAwesome from Bootstrapcdn
    $name = 'theme_labland/bootstrapcdn';
    $title = get_string('bootstrapcdn', 'theme_labland');
    $description = get_string('bootstrapcdndesc', 'theme_labland');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Navbar Seperator.
    $name = 'theme_labland/navbarsep';
    $title = get_string('navbarsep' , 'theme_labland');
    $description = get_string('navbarsepdesc', 'theme_labland');
    $nav_thinbracket = get_string('nav_thinbracket', 'theme_labland');
    $nav_doublebracket = get_string('nav_doublebracket', 'theme_labland');
    $nav_thickbracket = get_string('nav_thickbracket', 'theme_labland');
    $nav_slash = get_string('nav_slash', 'theme_labland');
    $nav_pipe = get_string('nav_pipe', 'theme_labland');
    $dontdisplay = get_string('dontdisplay', 'theme_labland');
    $default = '/';
    $choices = array('\f105'=>$nav_thinbracket, '/'=>$nav_slash, '\f101'=>$nav_doublebracket, '\f054'=>$nav_thickbracket, '|'=>$nav_pipe);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    
    // Theme Color Switcher
    $name = 'theme_labland/colorswitcher';
    $title = get_string('colorswitcher', 'theme_labland');
    $description = get_string('colorswitcherdesc', 'theme_labland');
    $default = '1';
    $choices = array(
        '1' => 'Aqua',
        '2' => 'Ocean',
        '3' => 'Navy',
        '4' => 'Green',
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Theme Color scheme static content.
    
    $themecolors = '<ul class="settings-theme-colors list-unstyled list-inline">
	 <li class="item">
	    <span class="item-inner">
    	    <span class="color-block" style="background:#68c2bd"></span>
    	    <br>
    	    <span class="color-name">Aqua</span>
	    </span>
	 </li>
	 <li class="item">
	    <span class="item-inner">
    	   <span class="color-block" style="background:#61B3EA"></span>
    	   <br>
    	   <span class="color-name">Ocean</span>
        </span>
	 </li>
	 <li class="item">
	    <span class="item-inner">
    	   <span class="color-block" style="background:#2b7e99"></span>
    	   <br>
    	   <span class="color-name">Navy</span>
        </span>
	 </li>
	 <li class="item">
	   <span class="item-inner">
    	   <span class="color-block" style="background:#51A852"></span>
    	   <br>
    	   <span class="color-name">Green</span>
        </span>
	 </li> 
</ul>';
    $temp->add(new admin_setting_heading('theme_labland_switcherheading', '', $themecolors));

    
    // Copyright setting.
    $name = 'theme_labland/copyright';
    $title = get_string('copyright', 'theme_labland');
    $description = get_string('copyrightdesc', 'theme_labland');
    $default = '3rd Wave Media';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    // Custom CSS file.
    $name = 'theme_labland/customcss';
    $title = get_string('customcss', 'theme_labland');
    $description = get_string('customcssdesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    $ADMIN->add('theme_labland', $temp);
    
    
    /* Custom Menu Settings */
    $temp = new admin_settingpage('theme_labland_custommenu', get_string('custommenuheading', 'theme_labland'));
	            
    //Description for mycourse
    $name = 'theme_labland/mycoursesinfo';
    $heading = get_string('mycoursesinfo', 'theme_labland');
    $information = get_string('mycoursesinfodesc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Toggle courses display in custommenu.
    $name = 'theme_labland/displaymycourses';
    $title = get_string('displaymycourses', 'theme_labland');
    $description = get_string('displaymycoursesdesc', 'theme_labland');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Set wording for dropdown course list
    
	$name = 'theme_labland/mycoursetitle';
	$title = get_string('mycoursetitle','theme_labland');
	$description = get_string('mycoursetitledesc', 'theme_labland');
	$default = 'course';
	$choices = array(
		'course' => get_string('mycourses', 'theme_labland'),
		'lesson' => get_string('mylessons', 'theme_labland'),
		'class' => get_string('myclasses', 'theme_labland'),
		'module' => get_string('mymodules', 'theme_labland'),
		'Unit' => get_string('myunits', 'theme_labland'),
	);
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);
    
    $ADMIN->add('theme_labland', $temp);
    
    
    
    /* Footer Settings */
	$temp = new admin_settingpage('theme_labland_footerblocks', get_string('footerblocksheading', 'theme_labland'));
	$temp->add(new admin_setting_heading('theme_labland_footerblocks', get_string('footerblocksheadingsub', 'theme_labland'),
            format_text(get_string('footerblocksdesc' , 'theme_labland'), FORMAT_MARKDOWN)));           
	
	//Enable Footer Blocks.
    $name = 'theme_labland/enablefooterblocks';
    $title = get_string('enablefooterblocks', 'theme_labland');
    $description = get_string('enablefooterblocksdesc', 'theme_labland');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	//Footer Block One.
	$name = 'theme_labland/footerblock1';
    $title = get_string('footerblock1', 'theme_labland');
    $description = get_string('footerblock1desc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //Footer Block Two.
	$name = 'theme_labland/footerblock2';
    $title = get_string('footerblock2', 'theme_labland');
    $description = get_string('footerblock2desc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //Footer Block Three.
	$name = 'theme_labland/footerblock3';
    $title = get_string('footerblock3', 'theme_labland');
    $description = get_string('footerblock3desc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    // Description for footer widget setting
    $name = 'theme_labland/footerwidgetinfo';
    $heading = get_string('footerwidgetinfo', 'theme_labland');
    $information = get_string('footerwidgetdesc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    
    // Footer widget setting.
    $name = 'theme_labland/footerwidget';
    $title = get_string('footerwidget', 'theme_labland');
    $description = get_string('footerwidgetdesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Description for footer social media
    $name = 'theme_labland/footersocialmediainfo';
    $heading = get_string('footersocialmediainfo', 'theme_labland');
    $information = get_string('footersocialmediadesc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Enable footer social media 
    $name = 'theme_labland/enablesocialfooter';
    $title = get_string('enablefootersocial', 'theme_labland');
    $description = get_string('enablefootersocialdesc', 'theme_labland');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
        
    $ADMIN->add('theme_labland', $temp);

 
    /* Frontpage Hero Slideshow Settings */
    $temp = new admin_settingpage('theme_labland_slideshow', get_string('slideshowheading', 'theme_labland'));
    $temp->add(new admin_setting_heading('theme_labland_slideshow', get_string('slideshowheadingsub', 'theme_labland'),
            format_text(get_string('slideshowdesc' , 'theme_labland'), FORMAT_MARKDOWN)));
    
    // Enable Slideshow.    
    $name = 'theme_labland/useslideshow';
    $title = get_string('useslideshow', 'theme_labland');
    $description = get_string('useslideshowdesc', 'theme_labland');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    

    /* Slide 1 */
     
    // Description for Slide One
    $name = 'theme_labland/slide1info';
    $heading = get_string('slide1', 'theme_labland');
    $information = get_string('slideinfodesc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // ImageURL.
    $name = 'theme_labland/slide1image';
    $title = get_string('slideimage', 'theme_labland');
    $description = get_string('slideimagedesc', 'theme_labland');
    $default = 'http://dummyimage.com/1200x720/666/ccc.png';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $temp->add($setting);

    // Caption.
    $name = 'theme_labland/slide1caption';
    $title = get_string('slidecaption', 'theme_labland');
    $description = get_string('slidecaptiondesc', 'theme_labland');
    $default = 'Slide 1 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada, erat bibendum gravida varius, lectus massa vehicula nibh, et dapibus nisl dui ac neque.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA
    $name = 'theme_labland/slide1cta';
    $title = get_string('slidecta', 'theme_labland');
    $description = get_string('slidectadesc', 'theme_labland');
    $default = 'Link 1 Text';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA URL.
    $name = 'theme_labland/slide1url';
    $title = get_string('slideurl', 'theme_labland');
    $description = get_string('slideurldesc', 'theme_labland');
    $default = '#link1';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // CTA URL open in new window    
    $name = 'theme_labland/slide1urlopennew';
    $title = get_string('opennew', 'theme_labland');
    $description = get_string('opennewdesc', 'theme_labland');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /* Slide 2 */
     
    // Description for Slide Two
    $name = 'theme_labland/slide2info';
    $heading = get_string('slide2', 'theme_labland');
    $information = get_string('slideinfodesc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // ImageURL.
    $name = 'theme_labland/slide2image';
    $title = get_string('slideimage', 'theme_labland');
    $description = get_string('slideimagedesc', 'theme_labland');
    $default = 'http://dummyimage.com/1200x720/666/ccc.png';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $temp->add($setting);

    // Caption.
    $name = 'theme_labland/slide2caption';
    $title = get_string('slidecaption', 'theme_labland');
    $description = get_string('slidecaptiondesc', 'theme_labland');
    $default = 'Slide 2 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada, erat bibendum gravida varius, lectus massa vehicula nibh, et dapibus nisl dui ac neque.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA
    $name = 'theme_labland/slide2cta';
    $title = get_string('slidecta', 'theme_labland');
    $description = get_string('slidectadesc', 'theme_labland');
    $default = 'Link 2 Text';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA URL.
    $name = 'theme_labland/slide2url';
    $title = get_string('slideurl', 'theme_labland');
    $description = get_string('slideurldesc', 'theme_labland');
    $default = '#link2';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // CTA URL open in new window    
    $name = 'theme_labland/slide2urlopennew';
    $title = get_string('opennew', 'theme_labland');
    $description = get_string('opennewdesc', 'theme_labland');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Slide 3 */
     
    // Description for Slide Three
    $name = 'theme_labland/slide3info';
    $heading = get_string('slide3', 'theme_labland');
    $information = get_string('slideinfodesc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // ImageURL.
    $name = 'theme_labland/slide3image';
    $title = get_string('slideimage', 'theme_labland');
    $description = get_string('slideimagedesc', 'theme_labland');
    $default = 'http://dummyimage.com/1200x720/666/ccc.png';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $temp->add($setting);

    // Caption.
    $name = 'theme_labland/slide3caption';
    $title = get_string('slidecaption', 'theme_labland');
    $description = get_string('slidecaptiondesc', 'theme_labland');
    $default = 'Slide 3 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada, erat bibendum gravida varius, lectus massa vehicula nibh, et dapibus nisl dui ac neque.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA
    $name = 'theme_labland/slide3cta';
    $title = get_string('slidecta', 'theme_labland');
    $description = get_string('slidectadesc', 'theme_labland');
    $default = 'Link 3 Text';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA URL.
    $name = 'theme_labland/slide3url';
    $title = get_string('slideurl', 'theme_labland');
    $description = get_string('slideurldesc', 'theme_labland');
    $default = '#link3';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // CTA URL open in new window    
    $name = 'theme_labland/slide3urlopennew';
    $title = get_string('opennew', 'theme_labland');
    $description = get_string('opennewdesc', 'theme_labland');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Slide 4 */
     
    // Description for Slide Four
    $name = 'theme_labland/slide4info';
    $heading = get_string('slide4', 'theme_labland');
    $information = get_string('slideinfodesc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    // ImageURL.
    $name = 'theme_labland/slide4image';
    $title = get_string('slideimage', 'theme_labland');
    $description = get_string('slideimagedesc', 'theme_labland');
    $default = 'http://dummyimage.com/1200x720/666/ccc.png';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $temp->add($setting);

    // Caption.
    $name = 'theme_labland/slide4caption';
    $title = get_string('slidecaption', 'theme_labland');
    $description = get_string('slidecaptiondesc', 'theme_labland');
    $default = 'Slide 4 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada, erat bibendum gravida varius, lectus massa vehicula nibh, et dapibus nisl dui ac neque.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA
    $name = 'theme_labland/slide4cta';
    $title = get_string('slidecta', 'theme_labland');
    $description = get_string('slidectadesc', 'theme_labland');
    $default = 'Link 4 Text';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // CTA URL.
    $name = 'theme_labland/slide4url';
    $title = get_string('slideurl', 'theme_labland');
    $description = get_string('slideurldesc', 'theme_labland');
    $default = '#link4';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // CTA URL open in new window    
    $name = 'theme_labland/slide4urlopennew';
    $title = get_string('opennew', 'theme_labland');
    $description = get_string('opennewdesc', 'theme_labland');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Hero Badge */
    
    // Description for Hero Badge
    $name = 'theme_labland/herobadgeinfo';
    $heading = get_string('herobadgeinfo', 'theme_labland');
    $information = get_string('herobadgeinfodesc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Hero Badge Content
    $name = 'theme_labland/herobadgecontent';
    $title = get_string('herobadgecontent', 'theme_labland');
    $description = get_string('herobadgecontentdesc', 'theme_labland');
    $default = '<div class="upper">Badge</div><div class="lower">Promo</div>';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Hero Badge CTA URL.
    $name = 'theme_labland/herobadgeurl';
    $title = get_string('herobadgeurl', 'theme_labland');
    $description = get_string('herobadgeurldesc', 'theme_labland');
    $default = '#link';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    

    /* Hero Upper Overlay  */
    
    // Description for Hero Upper Overlay
    $name = 'theme_labland/upperoverlayinfo';
    $heading = get_string('upperoverlayinfo', 'theme_labland');
    $information = get_string('upperoverlayinfodesc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Enable Hero Upper Overlay    
    $name = 'theme_labland/enableupperoverlay';
    $title = get_string('enableupperoverlay', 'theme_labland');
    $description = get_string('enableupperoverlaydesc', 'theme_labland');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Phone number settings
    $name = 'theme_labland/phone';
    $title = get_string('phone','theme_labland');
    $description = get_string('phonedesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Email settings
    $name = 'theme_labland/email';
    $title = get_string('email','theme_labland');
    $description = get_string('emaildesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Enable social media 
    $name = 'theme_labland/enablesocial';
    $title = get_string('enablesocial', 'theme_labland');
    $description = get_string('enablesocialdesc', 'theme_labland');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
            
    // Twitter url setting.
    $name = 'theme_labland/twitter';
    $title = get_string('twitter', 'theme_labland');
    $description = get_string('twitterdesc', 'theme_labland');
    $default = '#twitter-link';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Facebook url setting.
    $name = 'theme_labland/facebook';
    $title = get_string('facebook', 'theme_labland');
    $description = get_string('facebookdesc', 'theme_labland');
    $default = '#facebook-link';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // YouTube url setting.
    $name = 'theme_labland/youtube';
    $title = get_string('youtube', 'theme_labland');
    $description = get_string('youtubedesc', 'theme_labland');
    $default = '#youtube-link';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Vimeo url setting.
    $name = 'theme_labland/vimeo';
    $title = get_string('vimeo', 'theme_labland');
    $description = get_string('vimeodesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // LinkedIn url setting.
    $name = 'theme_labland/linkedin';
    $title = get_string('linkedin', 'theme_labland');
    $description = get_string('linkedindesc', 'theme_labland');
    $default = '#linkedin';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Flickr url setting.
    $name = 'theme_labland/flickr';
    $title = get_string('flickr', 'theme_labland');
    $description = get_string('flickrdesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Google+ url setting.
    $name = 'theme_labland/googleplus';
    $title = get_string('googleplus', 'theme_labland');
    $description = get_string('googleplusdesc', 'theme_labland');
    $default = '#google-link';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Pinterest url setting.
    $name = 'theme_labland/pinterest';
    $title = get_string('pinterest', 'theme_labland');
    $description = get_string('pinterestdesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Instagram url setting.
    $name = 'theme_labland/instagram';
    $title = get_string('instagram', 'theme_labland');
    $description = get_string('instagramdesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Skype account setting.
    $name = 'theme_labland/skype';
    $title = get_string('skype', 'theme_labland');
    $description = get_string('skypedesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // RSS url setting.
    $name = 'theme_labland/rss';
    $title = get_string('rss', 'theme_labland');
    $description = get_string('rssdesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
        
    /* Hero Lower Overlay  */
    
    // Description for Hero Lower Overlay
    $name = 'theme_labland/loweroverlayinfo';
    $heading = get_string('loweroverlayinfo', 'theme_labland');
    $information = get_string('loweroverlayinfodesc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Enable Hero Lower Overlay    
    $name = 'theme_labland/enableloweroverlay';
    $title = get_string('enableloweroverlay', 'theme_labland');
    $description = get_string('enableloweroverlaydesc', 'theme_labland');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Description for Quick Link 1
    $name = 'theme_labland/quicklink1info';
    $heading = get_string('quicklink1', 'theme_labland');
    $information = get_string('quicklinkinfodesc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Quick link 1
    $name = 'theme_labland/quicklink1title';
    $title = get_string('quicklinktitle', 'theme_labland');
    $description = get_string('quicklinktitledesc', 'theme_labland');
    $default = 'Our School';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Quick link 1 Icon
    $name = 'theme_labland/quicklink1icon';
    $title = get_string('quicklinkicon', 'theme_labland');
    $description = get_string('quicklinkicondesc', 'theme_labland');
    $default = 'fa-university';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Quick link 1 URL
    $name = 'theme_labland/quicklink1url';
    $title = get_string('quicklinkurl', 'theme_labland');
    $description = get_string('quicklinkurldesc', 'theme_labland');
    $default = '#link';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Quick link 1 URL open in new window    
    $name = 'theme_labland/quicklink1urlopennew';
    $title = get_string('opennew', 'theme_labland');
    $description = get_string('opennewdesc', 'theme_labland');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    // Description for Quick Link 2
    $name = 'theme_labland/quicklink2info';
    $heading = get_string('quicklink2', 'theme_labland');
    $information = get_string('quicklinkinfodesc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Quick link 2
    $name = 'theme_labland/quicklink2title';
    $title = get_string('quicklinktitle', 'theme_labland');
    $description = get_string('quicklinktitledesc', 'theme_labland');
    $default = 'Courses';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Quick link 2 Icon
    $name = 'theme_labland/quicklink2icon';
    $title = get_string('quicklinkicon', 'theme_labland');
    $description = get_string('quicklinkicondesc', 'theme_labland');
    $default = 'fa-graduation-cap';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Quick link 2 URL
    $name = 'theme_labland/quicklink2url';
    $title = get_string('quicklinkurl', 'theme_labland');
    $description = get_string('quicklinkurldesc', 'theme_labland');
    $default = '#link';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Quick link 2 URL open in new window    
    $name = 'theme_labland/quicklink2urlopennew';
    $title = get_string('opennew', 'theme_labland');
    $description = get_string('opennewdesc', 'theme_labland');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    // Description for Quick Link 3
    $name = 'theme_labland/quicklink3info';
    $heading = get_string('quicklink3', 'theme_labland');
    $information = get_string('quicklinkinfodesc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    
    // Quick link 3
    $name = 'theme_labland/quicklink3title';
    $title = get_string('quicklinktitle', 'theme_labland');
    $description = get_string('quicklinktitledesc', 'theme_labland');
    $default = 'News';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Quick link 3 Icon
    $name = 'theme_labland/quicklink3icon';
    $title = get_string('quicklinkicon', 'theme_labland');
    $description = get_string('quicklinkicondesc', 'theme_labland');
    $default = 'fa-newspaper-o';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Quick link 3 URL
    $name = 'theme_labland/quicklink3url';
    $title = get_string('quicklinkurl', 'theme_labland');
    $description = get_string('quicklinkurldesc', 'theme_labland');
    $default = '#link';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Quick link 3 URL open in new window    
    $name = 'theme_labland/quicklink3urlopennew';
    $title = get_string('opennew', 'theme_labland');
    $description = get_string('opennewdesc', 'theme_labland');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    

    
    // Description for Quick Link 4
    $name = 'theme_labland/quicklink4info';
    $heading = get_string('quicklink4', 'theme_labland');
    $information = get_string('quicklinkinfodesc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    
    // Quick link 4
    $name = 'theme_labland/quicklink4title';
    $title = get_string('quicklinktitle', 'theme_labland');
    $description = get_string('quicklinktitledesc', 'theme_labland');
    $default = 'key Info';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Quick link 4 Icon
    $name = 'theme_labland/quicklink4icon';
    $title = get_string('quicklinkicon', 'theme_labland');
    $description = get_string('quicklinkicondesc', 'theme_labland');
    $default = 'fa-info-circle';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Quick link 4 URL
    $name = 'theme_labland/quicklink4url';
    $title = get_string('quicklinkurl', 'theme_labland');
    $description = get_string('quicklinkurldesc', 'theme_labland');
    $default = '#link';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Quick link 4 URL open in new window    
    $name = 'theme_labland/quicklink4urlopennew';
    $title = get_string('opennew', 'theme_labland');
    $description = get_string('opennewdesc', 'theme_labland');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    $ADMIN->add('theme_labland', $temp);
    
    
    /* Frontpage Alerts */
    $temp = new admin_settingpage('theme_labland_alerts', get_string('alertsheading', 'theme_labland'));
	$temp->add(new admin_setting_heading('theme_labland_alerts', get_string('alertsheadingsub', 'theme_labland'),
            format_text(get_string('alertsdesc' , 'theme_labland'), FORMAT_MARKDOWN)));
    
    /* Alert 1 */
    
    // Description for Alert One
    $name = 'theme_labland/alert1info';
    $heading = get_string('alert1', 'theme_labland');
    $information = get_string('alert1desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Enable Alert One
    $name = 'theme_labland/enable1alert';
    $title = get_string('enablealert', 'theme_labland');
    $description = get_string('enablealertdesc', 'theme_labland');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert One Type.
    $name = 'theme_labland/alert1type';
    $title = get_string('alerttype' , 'theme_labland');
    $description = get_string('alerttypedesc', 'theme_labland');
    $alert_info = get_string('alert_info', 'theme_labland');
    $alert_warning = get_string('alert_warning', 'theme_labland');
    $alert_general = get_string('alert_general', 'theme_labland');
    $default = 'info';
    $choices = array('info'=>$alert_info, 'error'=>$alert_warning, 'success'=>$alert_general);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert One Title.
    $name = 'theme_labland/alert1title';
    $title = get_string('alerttitle', 'theme_labland');
    $description = get_string('alerttitledesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert One Text.
    $name = 'theme_labland/alert1text';
    $title = get_string('alerttext', 'theme_labland');
    $description = get_string('alerttextdesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Alert 2 */
    
    // Description for Alert Two
    $name = 'theme_labland/alert2info';
    $heading = get_string('alert2', 'theme_labland');
    $information = get_string('alert2desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Enable Alert Two
    $name = 'theme_labland/enable2alert';
    $title = get_string('enablealert', 'theme_labland');
    $description = get_string('enablealertdesc', 'theme_labland');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Two Type.
    $name = 'theme_labland/alert2type';
    $title = get_string('alerttype' , 'theme_labland');
    $description = get_string('alerttypedesc', 'theme_labland');
    $alert_info = get_string('alert_info', 'theme_labland');
    $alert_warning = get_string('alert_warning', 'theme_labland');
    $alert_general = get_string('alert_general', 'theme_labland');
    $default = 'info';
    $choices = array('info'=>$alert_info, 'error'=>$alert_warning, 'success'=>$alert_general);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Two Title.
    $name = 'theme_labland/alert2title';
    $title = get_string('alerttitle', 'theme_labland');
    $description = get_string('alerttitledesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Two Text.
    $name = 'theme_labland/alert2text';
    $title = get_string('alerttext', 'theme_labland');
    $description = get_string('alerttextdesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Alert 3 */
    
    // Description for Alert Three.
    $name = 'theme_labland/alert3info';
    $heading = get_string('alert3', 'theme_labland');
    $information = get_string('alert3desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Enable Alert Three.
    $name = 'theme_labland/enable3alert';
    $title = get_string('enablealert', 'theme_labland');
    $description = get_string('enablealertdesc', 'theme_labland');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Three Type.
    $name = 'theme_labland/alert3type';
    $title = get_string('alerttype' , 'theme_labland');
    $description = get_string('alerttypedesc', 'theme_labland');
    $alert_info = get_string('alert_info', 'theme_labland');
    $alert_warning = get_string('alert_warning', 'theme_labland');
    $alert_general = get_string('alert_general', 'theme_labland');
    $default = 'info';
    $choices = array('info'=>$alert_info, 'error'=>$alert_warning, 'success'=>$alert_general);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Three Title.
    $name = 'theme_labland/alert3title';
    $title = get_string('alerttitle', 'theme_labland');
    $description = get_string('alerttitledesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Alert Three Text.
    $name = 'theme_labland/alert3text';
    $title = get_string('alerttext', 'theme_labland');
    $description = get_string('alerttextdesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
            
    
    $ADMIN->add('theme_labland', $temp);

    
    
    /* Frontpage News Section Settings */
    $temp = new admin_settingpage('theme_labland_news', get_string('newsheading', 'theme_labland'));
    $temp->add(new admin_setting_heading('theme_labland_news', get_string('newsheadingsub', 'theme_labland'),
            format_text(get_string('newsdesc' , 'theme_labland'), FORMAT_MARKDOWN)));
    
    // Enable News Section
    $name = 'theme_labland/usenews';
    $title = get_string('usenews', 'theme_labland');
    $description = get_string('usenewsdesc', 'theme_labland');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // news Section Title
    $name = 'theme_labland/newssectiontitle';
    $title = get_string('newssectiontitle', 'theme_labland');
    $description = get_string('newssectiontitledesc', 'theme_labland');
    $default = 'News and Updates';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    // News 1
    
    // Description
    $name = 'theme_labland/news1info';
    $heading = get_string('news1info', 'theme_labland');
    $information = get_string('news1desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Icon
    $name = 'theme_labland/news1icon';
    $title = get_string('news1icon', 'theme_labland');
    $description = get_string('news1icondesc', 'theme_labland');    
    $default = 'fa-newspaper-o';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Title
    $name = 'theme_labland/news1title';
    $title = get_string('news1title', 'theme_labland');
    $description = get_string('news1titledesc', 'theme_labland');
    $default = 'News One';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Content
    $name = 'theme_labland/news1content';
    $title = get_string('news1content', 'theme_labland');
    $description = get_string('news1contentdesc', 'theme_labland');
    $default = 'News 1 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat libero placerat magna venenatis.';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    // News 2

    // Description
    $name = 'theme_labland/news2info';
    $heading = get_string('news2info', 'theme_labland');
    $information = get_string('news2desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Icon
    $name = 'theme_labland/news2icon';
    $title = get_string('news2icon', 'theme_labland');
    $description = get_string('news2icondesc', 'theme_labland');    
    $default = 'fa-calendar-check-o';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Title
    $name = 'theme_labland/news2title';
    $title = get_string('news2title', 'theme_labland');
    $description = get_string('news2titledesc', 'theme_labland');
    $default = 'News Two';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Content
    $name = 'theme_labland/news2content';
    $title = get_string('news2content', 'theme_labland');
    $description = get_string('news2contentdesc', 'theme_labland');
    $default = 'News 2 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat libero placerat magna venenatis.';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    // News 3

    // Description
    $name = 'theme_labland/news3info';
    $heading = get_string('news3info', 'theme_labland');
    $information = get_string('news3desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Icon
    $name = 'theme_labland/news3icon';
    $title = get_string('news3icon', 'theme_labland');
    $description = get_string('news3icondesc', 'theme_labland');    
    $default = 'fa-bullhorn';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Title
    $name = 'theme_labland/news3title';
    $title = get_string('news3title', 'theme_labland');
    $description = get_string('news3titledesc', 'theme_labland');
    $default = 'News Three';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Content
    $name = 'theme_labland/news3content';
    $title = get_string('news3content', 'theme_labland');
    $description = get_string('news3contentdesc', 'theme_labland');
    $default = 'News 3 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat libero placerat magna venenatis.';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $ADMIN->add('theme_labland', $temp);
    

    /* Frontpage Featured Blocks */	
	$temp = new admin_settingpage('theme_labland_homeblocks', get_string('homeblocksheading', 'theme_labland'));
	$temp->add(new admin_setting_heading('theme_labland_homeblocks', get_string('homeblocksheadingsub', 'theme_labland'),
            format_text(get_string('homeblocksdesc' , 'theme_labland'), FORMAT_MARKDOWN)));
            
            
	//Enable Featured Blocks.
    $name = 'theme_labland/usehomeblocks';
    $title = get_string('usehomeblocks', 'theme_labland');
    $description = get_string('usehomeblocksdesc', 'theme_labland');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Featured Section Title
    $name = 'theme_labland/featuredsectiontitle';
    $title = get_string('featuredsectiontitle', 'theme_labland');
    $description = get_string('featuredsectiontitledesc', 'theme_labland');
    $default = 'Featured Blocks';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

	
	/* Home Block 1 */	
    $name = 'theme_labland/homeblock1info';
    $heading = get_string('homeblock1info', 'theme_labland');
    $information = get_string('homeblock1desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
	
	$name = 'theme_labland/homeblock1title';
    $title = get_string('homeblocktitle', 'theme_labland');
    $description = get_string('homeblocktitledesc', 'theme_labland');
    $default = 'Heading One';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_labland/homeblock1image';
    $title = get_string('homeblockimage', 'theme_labland');
    $description = get_string('homeblockimagedesc', 'theme_labland');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_labland/homeblock1content';
    $title = get_string('homeblockcontent', 'theme_labland');
    $description = get_string('homeblockcontentdesc', 'theme_labland');
    $default = 'Block 1 content goes here. You can use this section to promote your courses or any other content.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    
    $name = 'theme_labland/homeblock1url';
    $title = get_string('homeblockurl', 'theme_labland');
    $description = get_string('homeblockbuttonurldesc', 'theme_labland');
    $default = '#link1';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Home Block 2 */    
    $name = 'theme_labland/homeblock2info';
    $heading = get_string('homeblock2info', 'theme_labland');
    $information = get_string('homeblock2desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);   
    
	$name = 'theme_labland/homeblock2title';
    $title = get_string('homeblocktitle', 'theme_labland');
    $description = get_string('homeblocktitledesc', 'theme_labland');
    $default = 'Heading Two';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_labland/homeblock2image';
    $title = get_string('homeblockimage', 'theme_labland');
    $description = get_string('homeblockimagedesc', 'theme_labland');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_labland/homeblock2content';
    $title = get_string('homeblockcontent', 'theme_labland');
    $description = get_string('homeblockcontentdesc', 'theme_labland');
    $default = 'Block 2 content goes here. You can use this section to promote your courses or any other content.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_labland/homeblock2url';
    $title = get_string('homeblockurl', 'theme_labland');
    $description = get_string('homeblockbuttonurldesc', 'theme_labland');
    $default = '#link2';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Home Block 3 */        
    $name = 'theme_labland/homeblock3info';
    $heading = get_string('homeblock3info', 'theme_labland');
    $information = get_string('homeblock3desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
	$name = 'theme_labland/homeblock3title';
    $title = get_string('homeblocktitle', 'theme_labland');
    $description = get_string('homeblocktitledesc', 'theme_labland');
    $default = 'Heading Three';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_labland/homeblock3image';
    $title = get_string('homeblockimage', 'theme_labland');
    $description = get_string('homeblockimagedesc', 'theme_labland');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_labland/homeblock3content';
    $title = get_string('homeblockcontent', 'theme_labland');
    $description = get_string('homeblockcontentdesc', 'theme_labland');
    $default = 'Block 3 content goes here. You can use this section to promote your courses or any other content.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_labland/homeblock3url';
    $title = get_string('homeblockurl', 'theme_labland');
    $description = get_string('homeblockbuttonurldesc', 'theme_labland');
    $default = '#link3';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Home Block 4 */    
    $name = 'theme_labland/homeblock4info';
    $heading = get_string('homeblock4info', 'theme_labland');
    $information = get_string('homeblock4desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
	$name = 'theme_labland/homeblock4title';
    $title = get_string('homeblocktitle', 'theme_labland');
    $description = get_string('homeblocktitledesc', 'theme_labland');
    $default = 'Heading Four';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_labland/homeblock4image';
    $title = get_string('homeblockimage', 'theme_labland');
    $description = get_string('homeblockimagedesc', 'theme_labland');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock4image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_labland/homeblock4content';
    $title = get_string('homeblockcontent', 'theme_labland');
    $description = get_string('homeblockcontentdesc', 'theme_labland');
    $default = 'Block 4 content goes here. You can use this section to promote your courses or any other content.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_labland/homeblock4url';
    $title = get_string('homeblockurl', 'theme_labland');
    $description = get_string('homeblockbuttonurldesc', 'theme_labland');
    $default = '#link4';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    /* Home Block 5 */    
    $name = 'theme_labland/homeblock5info';
    $heading = get_string('homeblock5info', 'theme_labland');
    $information = get_string('homeblock5desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
	$name = 'theme_labland/homeblock5title';
    $title = get_string('homeblocktitle', 'theme_labland');
    $description = get_string('homeblocktitledesc', 'theme_labland');
    $default = 'Heading Five';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_labland/homeblock5image';
    $title = get_string('homeblockimage', 'theme_labland');
    $description = get_string('homeblockimagedesc', 'theme_labland');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock5image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_labland/homeblock5content';
    $title = get_string('homeblockcontent', 'theme_labland');
    $description = get_string('homeblockcontentdesc', 'theme_labland');
    $default = 'Block 5 content goes here. You can use this section to promote your courses or any other content.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_labland/homeblock5url';
    $title = get_string('homeblockurl', 'theme_labland');
    $description = get_string('homeblockbuttonurldesc', 'theme_labland');
    $default = '#link5';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);    
    
    /* Home Block 6 */   
    $name = 'theme_labland/homeblock6info';
    $heading = get_string('homeblock6info', 'theme_labland');
    $information = get_string('homeblock6desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
     
	$name = 'theme_labland/homeblock6title';
    $title = get_string('homeblocktitle', 'theme_labland');
    $description = get_string('homeblocktitledesc', 'theme_labland');
    $default = 'Heading Six';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_labland/homeblock6image';
    $title = get_string('homeblockimage', 'theme_labland');
    $description = get_string('homeblockimagedesc', 'theme_labland');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock6image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_labland/homeblock6content';
    $title = get_string('homeblockcontent', 'theme_labland');
    $description = get_string('homeblockcontentdesc', 'theme_labland');
    $default = 'Block 6 content goes here. You can use this section to promote your courses or any other content.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_labland/homeblock6url';
    $title = get_string('homeblockurl', 'theme_labland');
    $description = get_string('homeblockbuttonurldesc', 'theme_labland');
    $default = '#link6';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);       
    
    $ADMIN->add('theme_labland', $temp);
        
    
        
    /* Frontpage Testimonials */
    
    $temp = new admin_settingpage('theme_labland_testimonials', get_string('testimonialsheading', 'theme_labland'));
	$temp->add(new admin_setting_heading('theme_labland_testimonials', get_string('testimonialssub', 'theme_labland'),
            format_text(get_string('testimonialsdesc' , 'theme_labland'), FORMAT_MARKDOWN)));
    
    // Enable Testimonials section
    $name = 'theme_labland/usetestimonials';
    $title = get_string('usetestimonials', 'theme_labland');
    $description = get_string('usetestimonialsdesc', 'theme_labland');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Enable Testimonials Profile Image Indicators
    $name = 'theme_labland/usetestimonialsprofileimage';
    $title = get_string('usetestimonialsprofileimage', 'theme_labland');
    $description = get_string('usetestimonialsprofileimagedesc', 'theme_labland');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    /* Testimonial 1 */
    
    // Description for Testimonial 1
    $name = 'theme_labland/testimonial1info';
    $heading = get_string('testimonial1', 'theme_labland');
    $information = get_string('testimonial1desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Testimonial Image 
    $name = 'theme_labland/testimonial1image';
    $title = get_string('testimonialimage', 'theme_labland');
    $description = get_string('testimonialimagedesc', 'theme_labland');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_labland/testimonial1name';
    $title = get_string('testimonialname', 'theme_labland');
    $description = get_string('testimonialnamedesc', 'theme_labland');
    $default = 'Profile Name';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Profile Meta
    $name = 'theme_labland/testimonial1meta';
    $title = get_string('testimonialmeta', 'theme_labland');
    $description = get_string('testimonialmetadesc', 'theme_labland');
    $default = 'Profile Meta Data';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Highlight 
    $name = 'theme_labland/testimonial1highlight';
    $title = get_string('testimonialhighlight', 'theme_labland');
    $description = get_string('testimonialhighlightdesc', 'theme_labland');
    $default = 'Testimonial highlight 1 goes here';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Content 
    $name = 'theme_labland/testimonial1content';
    $title = get_string('testimonialcontent', 'theme_labland');
    $description = get_string('testimonialcontentdesc', 'theme_labland');
    $default = '<p>Testimonial 1 goes here. You can add up to 5 testimonials. Lorem ipsum dolor sit amet consectetur adipiscing elit. Integer suscipit, elit sed placerat aliquam, velit nulla semper lectus.</p>';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Testimonial 2 */
    
    // Description for Testimonial 2
    $name = 'theme_labland/testimonial2info';
    $heading = get_string('testimonial2', 'theme_labland');
    $information = get_string('testimonial2desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Testimonial Image 
    $name = 'theme_labland/testimonial2image';
    $title = get_string('testimonialimage', 'theme_labland');
    $description = get_string('testimonialimagedesc', 'theme_labland');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_labland/testimonial2name';
    $title = get_string('testimonialname', 'theme_labland');
    $description = get_string('testimonialnamedesc', 'theme_labland');
    $default = 'Profile Name';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Profile Meta
    $name = 'theme_labland/testimonial2meta';
    $title = get_string('testimonialmeta', 'theme_labland');
    $description = get_string('testimonialmetadesc', 'theme_labland');
    $default = 'Profile Meta Data';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Highlight 
    $name = 'theme_labland/testimonial2highlight';
    $title = get_string('testimonialhighlight', 'theme_labland');
    $description = get_string('testimonialhighlightdesc', 'theme_labland');
    $default = 'Testimonial 2 highlight goes here';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Content 
    $name = 'theme_labland/testimonial2content';
    $title = get_string('testimonialcontent', 'theme_labland');
    $description = get_string('testimonialcontentdesc', 'theme_labland');
    $default = '<p>Testimonial 2 goes here. You can add up to 5 testimonials. Lorem ipsum dolor sit amet consectetur adipiscing elit. Integer suscipit, elit sed placerat aliquam, velit nulla semper lectus.</p>';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Testimonial 3 */
    
    // Description for Testimonial 3
    $name = 'theme_labland/testimonial3info';
    $heading = get_string('testimonial3', 'theme_labland');
    $information = get_string('testimonial3desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Testimonial Image 
    $name = 'theme_labland/testimonial3image';
    $title = get_string('testimonialimage', 'theme_labland');
    $description = get_string('testimonialimagedesc', 'theme_labland');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_labland/testimonial3name';
    $title = get_string('testimonialname', 'theme_labland');
    $description = get_string('testimonialnamedesc', 'theme_labland');
    $default = 'Profile Name';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Profile Meta
    $name = 'theme_labland/testimonial3meta';
    $title = get_string('testimonialmeta', 'theme_labland');
    $description = get_string('testimonialmetadesc', 'theme_labland');
    $default = 'Profile Meta Data';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Highlight 
    $name = 'theme_labland/testimonial3highlight';
    $title = get_string('testimonialhighlight', 'theme_labland');
    $description = get_string('testimonialhighlightdesc', 'theme_labland');
    $default = 'Testimonial 3 highlight goes here';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Content 
    $name = 'theme_labland/testimonial3content';
    $title = get_string('testimonialcontent', 'theme_labland');
    $description = get_string('testimonialcontentdesc', 'theme_labland');
    $default = '<p>Testimonial 3 goes here. You can add up to 5 testimonials. Lorem ipsum dolor sit amet consectetur adipiscing elit. Integer suscipit, elit sed placerat aliquam, velit nulla semper lectus.</p>';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Testimonial 4 */
    
    // Description for Testimonial 4
    $name = 'theme_labland/testimonial4info';
    $heading = get_string('testimonial4', 'theme_labland');
    $information = get_string('testimonial4desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Testimonial Image 
    $name = 'theme_labland/testimonial4image';
    $title = get_string('testimonialimage', 'theme_labland');
    $description = get_string('testimonialimagedesc', 'theme_labland');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial4image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_labland/testimonial4name';
    $title = get_string('testimonialname', 'theme_labland');
    $description = get_string('testimonialnamedesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Profile Meta
    $name = 'theme_labland/testimonial4meta';
    $title = get_string('testimonialmeta', 'theme_labland');
    $description = get_string('testimonialmetadesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Highlight 
    $name = 'theme_labland/testimonial4highlight';
    $title = get_string('testimonialhighlight', 'theme_labland');
    $description = get_string('testimonialhighlightdesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Content 
    $name = 'theme_labland/testimonial4content';
    $title = get_string('testimonialcontent', 'theme_labland');
    $description = get_string('testimonialcontentdesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    /* Testimonial 5 */
    
    // Description for Testimonial 5
    $name = 'theme_labland/testimonial5info';
    $heading = get_string('testimonial5', 'theme_labland');
    $information = get_string('testimonial5desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Testimonial Image 
    $name = 'theme_labland/testimonial5image';
    $title = get_string('testimonialimage', 'theme_labland');
    $description = get_string('testimonialimagedesc', 'theme_labland');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial5image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_labland/testimonial5name';
    $title = get_string('testimonialname', 'theme_labland');
    $description = get_string('testimonialnamedesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Profile Meta
    $name = 'theme_labland/testimonial5meta';
    $title = get_string('testimonialmeta', 'theme_labland');
    $description = get_string('testimonialmetadesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Highlight 
    $name = 'theme_labland/testimonial5highlight';
    $title = get_string('testimonialhighlight', 'theme_labland');
    $description = get_string('testimonialhighlightdesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Testimonial Content 
    $name = 'theme_labland/testimonial5content';
    $title = get_string('testimonialcontent', 'theme_labland');
    $description = get_string('testimonialcontentdesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    
    $ADMIN->add('theme_labland', $temp);
    
    /* Frontpage logos */
    $temp = new admin_settingpage('theme_labland_logos', get_string('logosheading', 'theme_labland'));
	$temp->add(new admin_setting_heading('theme_labland_logos', get_string('logossub', 'theme_labland'),
            format_text(get_string('logosdesc' , 'theme_labland'), FORMAT_MARKDOWN)));
    
    // Enable logos Section
    $name = 'theme_labland/uselogos';
    $title = get_string('uselogos', 'theme_labland');
    $description = get_string('uselogosdesc', 'theme_labland');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    
    /* Logo 1 */
    
    // Description for logo One
    $name = 'theme_labland/logo1info';
    $heading = get_string('logo1', 'theme_labland');
    $information = get_string('logo1desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    
    // Logo Image 
    $name = 'theme_labland/logo1image';
    $title = get_string('logoimage', 'theme_labland');
    $description = get_string('logoimagedesc', 'theme_labland');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //logo Image Alt Text
    $name = 'theme_labland/logo1alttext';
    $title = get_string('logoalttext', 'theme_labland');
    $description = get_string('logoalttextdesc', 'theme_labland');
    $default = 'logo';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    

    // Logo URL
    $name = 'theme_labland/logo1url';
    $title = get_string('logourl', 'theme_labland');
    $description = get_string('logourldesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    
    /* Logo 2 */
    
    // Description for logo Two
    $name = 'theme_labland/logo2info';
    $heading = get_string('logo2', 'theme_labland');
    $information = get_string('logo2desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Logo Image 
    $name = 'theme_labland/logo2image';
    $title = get_string('logoimage', 'theme_labland');
    $description = get_string('logoimagedesc', 'theme_labland');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //logo Image Alt Text
    $name = 'theme_labland/logo2alttext';
    $title = get_string('logoalttext', 'theme_labland');
    $description = get_string('logoalttextdesc', 'theme_labland');
    $default = 'logo';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Logo URL
    $name = 'theme_labland/logo2url';
    $title = get_string('logourl', 'theme_labland');
    $description = get_string('logourldesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    /* Logo 3 */
    
    // Description for logo Three
    $name = 'theme_labland/logo3info';
    $heading = get_string('logo3', 'theme_labland');
    $information = get_string('logo3desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Logo Image 
    $name = 'theme_labland/logo3image';
    $title = get_string('logoimage', 'theme_labland');
    $description = get_string('logoimagedesc', 'theme_labland');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //logo Image Alt Text
    $name = 'theme_labland/logo3alttext';
    $title = get_string('logoalttext', 'theme_labland');
    $description = get_string('logoalttextdesc', 'theme_labland');
    $default = 'logo';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Logo URL
    $name = 'theme_labland/logo3url';
    $title = get_string('logourl', 'theme_labland');
    $description = get_string('logourldesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Logo 4 */
    
    // Description for logo Four
    $name = 'theme_labland/logo4info';
    $heading = get_string('logo4', 'theme_labland');
    $information = get_string('logo4desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Logo Image 
    $name = 'theme_labland/logo4image';
    $title = get_string('logoimage', 'theme_labland');
    $description = get_string('logoimagedesc', 'theme_labland');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo4image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //logo Image Alt Text
    $name = 'theme_labland/logo4alttext';
    $title = get_string('logoalttext', 'theme_labland');
    $description = get_string('logoalttextdesc', 'theme_labland');
    $default = 'logo';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Logo URL
    $name = 'theme_labland/logo4url';
    $title = get_string('logourl', 'theme_labland');
    $description = get_string('logourldesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Logo 5 */
    
    // Description for logo Five
    $name = 'theme_labland/logo5info';
    $heading = get_string('logo5', 'theme_labland');
    $information = get_string('logo5desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Logo Image 
    $name = 'theme_labland/logo5image';
    $title = get_string('logoimage', 'theme_labland');
    $description = get_string('logoimagedesc', 'theme_labland');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo5image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //logo Image Alt Text
    $name = 'theme_labland/logo5alttext';
    $title = get_string('logoalttext', 'theme_labland');
    $description = get_string('logoalttextdesc', 'theme_labland');
    $default = 'logo';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Logo URL
    $name = 'theme_labland/logo5url';
    $title = get_string('logourl', 'theme_labland');
    $description = get_string('logourldesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    /* Logo 6 */
    
    // Description for logo Six
    $name = 'theme_labland/logo6info';
    $heading = get_string('logo6', 'theme_labland');
    $information = get_string('logo6desc', 'theme_labland');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);
    
    // Logo Image 
    $name = 'theme_labland/logo6image';
    $title = get_string('logoimage', 'theme_labland');
    $description = get_string('logoimagedesc', 'theme_labland');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo6image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //logo Image Alt Text
    $name = 'theme_labland/logo6alttext';
    $title = get_string('logoalttext', 'theme_labland');
    $description = get_string('logoalttextdesc', 'theme_labland');
    $default = 'logo';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Logo URL
    $name = 'theme_labland/logo6url';
    $title = get_string('logourl', 'theme_labland');
    $description = get_string('logourldesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
           
    $ADMIN->add('theme_labland', $temp);

    
    
    
    /* Frontpage CTA & Video Section */
    
    $temp = new admin_settingpage('theme_labland_ctasection', get_string('ctasectionheading', 'theme_labland'));
	$temp->add(new admin_setting_heading('theme_labland_ctasection', get_string('ctasectionsub', 'theme_labland'),
            format_text(get_string('ctasectiondesc' , 'theme_labland'), FORMAT_MARKDOWN)));
    
    // Enable CTA Section
    $name = 'theme_labland/usectasection';
    $title = get_string('usectasection', 'theme_labland');
    $description = get_string('usectasectiondesc', 'theme_labland');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // CTA Section Title
    $name = 'theme_labland/ctasectiontitle';
    $title = get_string('ctasectiontitle', 'theme_labland');
    $description = get_string('ctasectiontitledesc', 'theme_labland');
    $default = 'CTA and Video Section';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // CTA Section Content
    $name = 'theme_labland/ctasectioncontent';
    $title = get_string('ctasectioncontent', 'theme_labland');
    $description = get_string('ctasectioncontentdesc', 'theme_labland');
    $default = '<p>You can add intro text, Call-To-Action link and a YouTube/Vimeo video in this section. Lorem ipsum dolor sit amet, consectetuer adipiscing elit <a href="#">link example</a> aenean commodo ligula eget dolor.</p>';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // CTA Section CTA Button Text
    $name = 'theme_labland/ctasectionbuttontext';
    $title = get_string('ctasectionbuttontext', 'theme_labland');
    $description = get_string('ctasectionbuttontextdesc', 'theme_labland');
    $default = 'Call To Action';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // CTA Section CTA Button URL
    $name = 'theme_labland/ctasectionbuttonurl';
    $title = get_string('ctasectionbuttonurl', 'theme_labland');
    $description = get_string('ctasectionbuttonurldesc', 'theme_labland');
    $default = '#link';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Youtube Video ID
    $name = 'theme_labland/videoid';
    $title = get_string('videoid', 'theme_labland');
    $description = get_string('videoiddesc', 'theme_labland');
    $default = 'kFMZrEABdw4';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Vimeo Video ID
    $name = 'theme_labland/videoid2';
    $title = get_string('videoid2', 'theme_labland');
    $description = get_string('videoid2desc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

        
    $ADMIN->add('theme_labland', $temp);
    
    
    /* Analytics Settings */
    $temp = new admin_settingpage('theme_labland_analytics', get_string('analyticsheading', 'theme_labland'));
	$temp->add(new admin_setting_heading('theme_labland_analytics', get_string('analyticsheadingsub', 'theme_labland'),
            format_text(get_string('analyticsdesc' , 'theme_labland'), FORMAT_MARKDOWN)));
    
    // Enable Analytics
    $name = 'theme_labland/useanalytics';
    $title = get_string('useanalytics', 'theme_labland');
    $description = get_string('useanalyticsdesc', 'theme_labland');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Google Analytics ID
    $name = 'theme_labland/analyticsid';
    $title = get_string('analyticsid', 'theme_labland');
    $description = get_string('analyticsiddesc', 'theme_labland');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
        
    $ADMIN->add('theme_labland', $temp);
    

	//iOS Icons Settings
	$temp = new admin_settingpage('theme_labland_ios',  get_string('iosicon', 'theme_labland'));

    // iPhone Icon.
    $name = 'theme_labland/iphoneicon';
    $title = get_string('iphoneicon', 'theme_labland');
    $description = get_string('iphoneicondesc', 'theme_labland');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'iphoneicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // iPhone Retina Icon.
    $name = 'theme_labland/iphoneretinaicon';
    $title = get_string('iphoneretinaicon', 'theme_labland');
    $description = get_string('iphoneretinaicondesc', 'theme_labland');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'iphoneretinaicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // iPad Icon.
    $name = 'theme_labland/ipadicon';
    $title = get_string('ipadicon', 'theme_labland');
    $description = get_string('ipadicondesc', 'theme_labland');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'ipadicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // iPad Retina Icon.
    $name = 'theme_labland/ipadretinaicon';
    $title = get_string('ipadretinaicon', 'theme_labland');
    $description = get_string('ipadretinaicondesc', 'theme_labland');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'ipadretinaicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $ADMIN->add('theme_labland', $temp);
