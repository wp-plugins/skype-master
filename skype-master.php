<?php
/**
Plugin Name: Skype Master
Plugin URI: http://wordpress.techgasp.com/skype-master/
Version: 4.3.6
Author: TechGasp
Author URI: http://wordpress.techgasp.com
Text Domain: skype-master
Description: Skype Master is the Skype supreme plugin for any Wordpress powered website. Includes Show Online Status Button.
License: GPL2 or later
*/
/*
Copyright 2013 TechGasp  (email : info@techgasp.com)
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
if(!class_exists('skype_master')) :
///////DEFINE ID//////
define('SKYPE_MASTER_ID', 'skype-master');
///////DEFINE VERSION///////
define( 'skype_master_VERSION', '4.3.6' );
global $skype_master_version, $skype_master_name;
$skype_master_version = "4.3.6"; //for other pages
$skype_master_name = "Skype Master"; //pretty name
if( is_multisite() ) {
update_site_option( 'skype_master_installed_version', $skype_master_version );
update_site_option( 'skype_master_name', $skype_master_name );
}
else{
update_option( 'skype_master_installed_version', $skype_master_version );
update_option( 'skype_master_name', $skype_master_name );
}
// HOOK ADMIN
require_once( dirname( __FILE__ ) . '/includes/skype-master-admin.php');
// HOOK ADMIN IN & UN SHORTCODE
require_once( dirname( __FILE__ ) . '/includes/skype-master-admin-shortcodes.php');
// HOOK ADMIN WIDGETS
require_once( dirname( __FILE__ ) . '/includes/skype-master-admin-widgets.php');
// HOOK ADMIN ADDONS
require_once( dirname( __FILE__ ) . '/includes/skype-master-admin-addons.php');
// HOOK ADMIN UPDATER
require_once( dirname( __FILE__ ) . '/includes/skype-master-admin-updater.php');
// HOOK WIDGET SKYPE BUTTONS ORIGINAL
require_once( dirname( __FILE__ ) . '/includes/skype-master-widget-skype-buttons-original.php');

class skype_master{
//REGISTER PLUGIN
public static function skype_master_register(){
register_setting(SKYPE_MASTER_ID, 'tsm_quote');
}
public static function content_with_quote($content){
$quote = '<p>' . get_option('tsm_quote') . '</p>';
	return $content . $quote;
}
//SETTINGS LINK IN PLUGIN MANAGER
public static function skype_master_links( $links, $file ) {
	if ( $file == plugin_basename( dirname(__FILE__).'/skype-master.php' ) ) {
		$links[] = '<a href="' . admin_url( 'admin.php?page=skype-master' ) . '">'.__( 'Settings' ).'</a>';
	}

	return $links;
}

public static function skype_master_updater_version_check(){
global $skype_master_version;
//CHECK NEW VERSION
$skype_master_slug = basename(dirname(__FILE__));
$current = get_site_transient( 'update_plugins' );
$skype_plugin_slug = $skype_master_slug.'/'.$skype_master_slug.'.php';
@$r = $current->response[ $skype_plugin_slug ];
if (empty($r)){
$r = false;
$skype_plugin_slug = false;
if( is_multisite() ) {
update_site_option( 'skype_master_newest_version', $skype_master_version );
}
else{
update_option( 'skype_master_newest_version', $skype_master_version );
}
}
if (!empty($r)){
$skype_plugin_slug = $skype_master_slug.'/'.$skype_master_slug.'.php';
@$r = $current->response[ $skype_plugin_slug ];
if( is_multisite() ) {
update_site_option( 'skype_master_newest_version', $r->new_version );
}
else{
update_option( 'skype_master_newest_version', $r->new_version );
}
}
}
		// Advanced Updater

//END CLASS
}
if ( is_admin() ){
	add_action('admin_init', array('skype_master', 'skype_master_register'));
	add_action('init', array('skype_master', 'skype_master_updater_version_check'));
}
add_filter('the_content', array('skype_master', 'content_with_quote'));
add_filter( 'plugin_action_links', array('skype_master', 'skype_master_links'), 10, 2 );
endif;