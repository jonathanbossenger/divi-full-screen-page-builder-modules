<?php
/**
 * @package Full_Screen_Page_Builder
 * @version 1.0
 */
/*
Plugin Name: Full Screen Page Builder
Plugin URI: http://jonathanbossenger.com/make-your-divi-page-builder-go-large
Description: Use the full extent of your screen when working inside a Divi Page Builder module.
Author: Jonathan Bossenger
Version: 1.0
Author URI: http://jonathanbossenger.com/
*/

/* if you want to add this to your functions.php, copy and paste lines 16 - 31 
add_action('admin_head', 'full_screen_page_builder');
function full_screen_page_builder() {
    echo '<style>
        .et_pb_modal_settings_container {
	    width: 100% !important;
	    padding: 0 !important;
	    margin: 0 !important;
	    left: 0 !important;
	    height: 95% !important;
	    top: 35px;
	}
	.et-pb-options-tabs-links {
	    width: 100% !important;
	}
  </style>';
}
?>
