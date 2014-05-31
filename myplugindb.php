<?php
/**
 * Plugin Name: my plugin db
 * Plugin URI: 
 * Description: A brief description of the Plugin.
 * Version: 1.0
 * Author: 
 * Author URI:
 */

/* Runs when plugin is activated */
register_activation_hook(__FILE__,'my_plugin_plugin_install'); 

/* Runs on plugin deactivation*/
register_deactivation_hook( __FILE__, 'my_plugin_plugin_remove' );

add_action( 'admin_menu', 'register_my_plugin_custom_menu_page' );

function register_my_plugin_custom_menu_page(){
	add_menu_page( 'Create Table', 'create table', 'create_table', 'plugincustompage', 'my_plugin_custom_menu_page', plugins_url( 'myplugin/images/icon.png' ), 6 );
}

function my_plugin_custom_menu_page(){
	include_once 'create_plugin_db.php';
}