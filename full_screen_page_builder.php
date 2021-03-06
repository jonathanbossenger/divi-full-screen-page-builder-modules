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

/* if you want to add this to your child theme, copy and paste this code snippet to your functions.php */
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
	.et_pb_prompt_modal{ 
	    top: 35px !important;
	    height: 95% !important;
	    left: 15% !important;
	    width: 95% !important;
	} 
	.et_pb_prompt_modal_save_library {
            margin-left: -12% !important;
            height: 80% !important;
        }
        /* increase html editor to 500px high, credits Terry Smith */
        #et_pb_content_new_ifr{
            height:500px!important
        }
  </style>';
}
/* if you want to add this to your child theme, copy and paste this code snippet to your functions.php */
