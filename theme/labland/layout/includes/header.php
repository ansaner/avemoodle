<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/* LOGO Image */
$haslogo = (!empty($PAGE->theme->settings->logo));

/* Logo settings */
if ($haslogo) {
$logourl = $PAGE->theme->setting_file_url('logo', 'logo');
} else {
    
    /* Moodle 3.3 - pix_url deprecated use image_url instead */
    if (method_exists($OUTPUT, 'image_url')) {
        
        $logourl = $OUTPUT->image_url('logo', 'theme');
        
    } else {
        
        $logourl = $OUTPUT->pix_url('logo', 'theme');
    }

}

/* Site tagline settings */
$hassitetagline = (!empty($PAGE->theme->settings->sitetagline));
$sitetagline = $PAGE->theme->settings->sitetagline;

/* Header widget settings */
$hasheaderwidget = (!empty($PAGE->theme->settings->headerwidget));
$headerwidget = $PAGE->theme->settings->headerwidget;


?>  
    
    <!-- ******HEADER****** --> 
    <header class="site-header">  
        <div class="top-bar">
            
            <div class="moodle-utilities">
                <?php /* Moodle 3.2 notifications and messages feature */
                if (method_exists($OUTPUT, 'navbar_plugin_output')) {
                  echo $OUTPUT->navbar_plugin_output();  // notifications and messages, for Moodle 3.2+
                }
                ?>
                
                <?php /* Moodle 3.1 global search feature - solr needs to be configured */
                if (method_exists($OUTPUT, 'search_box')) {
                  echo $OUTPUT->search_box(); // global search, for Moodle 3.1+
                }
                ?>
            </div><!--//moodle-utilities-->
            
            
            <nav class="main-nav" role="navigation">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <?php echo $OUTPUT->custom_menu(); ?>
                </div><!--//navbar-collapse-->
            </nav><!--//main-nav-->
            
            
            
        </div><!--//top-bar-->
        
        <div class="branding">     
            <div class="container-fluid">
                <h1 class="logo">
                    <a href="<?php echo $CFG->wwwroot ?>"><img src="<?php echo $logourl ?>" alt="<?php echo $SITE->shortname; ?>" /></a>
                </h1><!--//logo-->
                
                <?php if($hassitetagline) {?>
                <h2 class="tagline hidden-xs hidden-sm"><?php echo $sitetagline ?></h2>
                <?php }?>
                
                <?php if($hasheaderwidget) {?>
                <div class="header-widget hidden-xs"><?php echo $headerwidget ?></div>
                <?php }?>
                
                <div class="logininfo-container">
                    <?php echo $PAGE->headingmenu ?>
                    <?php echo $OUTPUT->user_menu(); ?>           
                </div><!--//logininfo-container-->
                
            </div><!--//container-->                    
        </div><!--//branding-->
    </header><!--//header--> 

