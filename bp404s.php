<?php
/*
 Plugin Name: BP 404s
Plugin URI:   https://tomas.zhu.bz/buddypress-404s/
Description: Fixed Buddypress 404 error when put buddyPress profiles in the root
Version: 1.0
Author: Tomas Zhu:
Author URI: http://tomas.zhu.bz
Text Domain: tomas-buddypress-404s
License: GPLv3 or later
*/
/*  Copyright 2017 Tomas Zhu
 This program comes with ABSOLUTELY NO WARRANTY;
https://www.gnu.org/licenses/gpl-3.0.html
https://www.gnu.org/licenses/quick-guide-gplv3.html
*/
if (!defined('ABSPATH'))
{
	exit;
}

function tomas_bp_no_404()
{
global $wp_query;

 if (!(empty(bp_current_component())))
 {
 	$wp_query->is_404 = false;
 }

}
add_action( 'template_redirect', 'tomas_bp_no_404' ,1);
?>
