<?php
/**
Plugin Name: Skype Master
Plugin URI: http://wordpress.techgasp.com/skype-master/
Version: 4.4.2.4
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
///////DEFINE VERSION///////
define( 'SKYPE_MASTER_VERSION', '4.4.2.4' );

global $skype_master_name;
$skype_master_name = "Skype Master"; //pretty name
if( is_multisite() ) {
update_site_option( 'skype_master_name', $skype_master_name );
}
else{
update_option( 'skype_master_name', $skype_master_name );
}

class skype_master{
public static function content_with_quote($content){
$quote = '<p>' . get_option('tsm_quote') . '</p>';
	return $content . $quote;
}
//SETTINGS LINK IN PLUGIN MANAGER
public static function skype_master_links( $links, $file ) {
if ( $file == plugin_basename( dirname(__FILE__).'/skype-master.php' ) ) {
		if( is_network_admin() ){
		$techgasp_plugin_url = network_admin_url( 'admin.php?page=skype-master' );
		}
		else {
		$techgasp_plugin_url = admin_url( 'admin.php?page=skype-master' );
		}
	$links[] = '<a href="' . $techgasp_plugin_url . '">'.__( 'Settings' ).'</a>';
	}
	return $links;
}

//END CLASS
}
add_filter('the_content', array('skype_master', 'content_with_quote'));
add_filter( 'plugin_action_links', array('skype_master', 'skype_master_links'), 10, 2 );
endif;

// HOOK ADMIN
require_once( dirname( __FILE__ ) . '/includes/skype-master-admin.php');
// HOOK ADMIN ADDONS
require_once( dirname( __FILE__ ) . '/includes/skype-master-admin-addons.php');
// HOOK ADMIN WIDGETS
require_once( dirname( __FILE__ ) . '/includes/skype-master-admin-widgets.php');
// HOOK WIDGET SKYPE BUTTONS ORIGINAL GREEN
require_once( dirname( __FILE__ ) . '/includes/skype-master-widget-skype-buttons-original-green.php');
// HOOK WIDGET SKYPE BUTTONS ORIGINAL BLUE
require_once( dirname( __FILE__ ) . '/includes/skype-master-widget-skype-buttons-original-blue.php');
