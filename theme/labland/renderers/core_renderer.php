<?php

 class theme_labland_core_renderer extends theme_bootstrapbase_core_renderer {
 	
 	/*
     * Add alert messages
     */
    public function notification($message, $classes = 'notifyproblem') {
        $message = clean_text($message);
        $type = '';

        if ($classes == 'notifyproblem') {
            $type = 'alert alert-error';
        }
        if ($classes == 'notifysuccess') {
            $type = 'alert alert-success';
        }
        if ($classes == 'notifymessage') {
            $type = 'alert alert-info';
        }
        if ($classes == 'redirectmessage') {
            $type = 'alert alert-block alert-info';
        }
        return "<div class=\"$type\">$message</div>";
    } 
    
		
    protected function render_custom_menu(custom_menu $menu) {
    	/*
    	* Add enrolled courses to the custommenu
    	*/
    
    	$hasdisplaymycourses = (empty($this->page->theme->settings->displaymycourses)) ? false : $this->page->theme->settings->displaymycourses;
        if (isloggedin() && !isguestuser() && $hasdisplaymycourses) {
        	$mycoursetitle = $this->page->theme->settings->mycoursetitle;
            if ($mycoursetitle == 'module') {
				$branchtitle = get_string('mymodules', 'theme_labland');
			} else if ($mycoursetitle == 'unit') {
				$branchtitle = get_string('myunits', 'theme_labland');
            } else if ($mycoursetitle == 'lesson') {
			    $branchtitle = get_string('mylessons', 'theme_labland');
			} else if ($mycoursetitle == 'class') {
				$branchtitle = get_string('myclasses', 'theme_labland');
			} else {
				$branchtitle = get_string('mycourses', 'theme_labland');
			}
			$branchlabel = $branchtitle;
            $branchurl   = new moodle_url('/my/index.php');
            $branchsort  = 10000;
 
            $branch = $menu->add($branchlabel, $branchurl, $branchtitle, $branchsort);
 			if ($courses = enrol_get_my_courses(NULL, 'fullname ASC')) {
 				foreach ($courses as $course) {
 					if ($course->visible){
 						$branch->add(format_string($course->fullname), new moodle_url('/course/view.php?id='.$course->id), format_string($course->shortname));
 					}
 				}
 			} else {
                $noenrolments = get_string('noenrolments', 'theme_labland');
 				$branch->add('<em>'.$noenrolments.'</em>', new moodle_url('/'), $noenrolments);
 			}
            
        }
         
        return parent::render_custom_menu($menu);
    }
        
}



    

