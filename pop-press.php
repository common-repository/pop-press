<?php
/*
Plugin Name: Pop Press
Description: Start to make revenues from your Wordpress website. We use leading pop providers to provide clean ads that don't draw users away from your page. Start monetizing today
Version: 1.0
Author: The Pop Press team
License:     GPL2
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require_once  "pop-functions.php";

add_action( 'admin_menu', 'pop_wpdocs_register_page' );

//add_action( 'admin_notices', 'pop_update_notice' );	

add_action( 'admin_enqueue_scripts', 'init_admin_pop_assets' );

add_action( 'wp_enqueue_scripts', 'init_pop_assets' );

?>