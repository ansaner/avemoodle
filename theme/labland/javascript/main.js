jQuery(document).ready(function($) {

    
    /* ======= Twitter Bootstrap hover dropdown ======= */    
  
    // apply dropdownHover for non-mobile devices
    $('li.dropdown>[data-toggle="dropdown"]').dropdownHover();
    
    /* ======= jQuery FitVids - Responsive Video ======= */
    /* Ref: https://github.com/davatron5000/FitVids.js/blob/master/README.md */
    $(".video-container").fitVids();   
    
    /* Nested Sub-Menus mobile fix */
    $('li.dropdown-submenu > a').on('click', function(e) {
        var current=$(this).next();
		current.toggle();
		e.stopPropagation(); 
		e.preventDefault(); 
		if (current.is(':visible')) {
    		$(this).closest('li.dropdown-submenu').siblings().find('ul.dropdown-menu').hide();
		}
    }); 
    
    /*======== Enable Bootstrap Tooltip ======== */    
    $('[data-toggle="tooltip"]').tooltip();
    
     /*======== Enable Bootstrap Popover ======== */     
    $('[data-toggle="popover"]').popover();
    
    
});


