<?php
if(!class_exists('WP_List_Table')){
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
class skype_master_admin_addons_table extends WP_List_Table {
	/**
	 * Display the rows of records in the table
	 * @return string, echo the markup of the rows
	 */
	function display() {
?>
<table class="widefat fixed" cellspacing="0">
	<thead>
		<tr>
			<th id="columnname" class="manage-column column-columnname" scope="col" width="300"><legend><h3><img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" /><?php _e('&nbsp;Screenshot', 'skype_master'); ?></h3></legend></th>
			<th id="columnname" class="manage-column column-columnname" scope="col"><h3><img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" /><?php _e('&nbsp;Description', 'skype_master'); ?></h3></legend></th>
			<th id="columnname" class="manage-column column-columnname" scope="col"><h3><img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" /><?php _e('&nbsp;Installed', 'skype_master'); ?></h3></legend></th>
		</tr>
	</thead>

	<tfoot>
		<tr>
			<th class="manage-column column-columnname" scope="col" width="300"><a class="button-primary" href="http://wordpress.techgasp.com/skype-master/" target="_blank" title="Get Add-ons" style="float:left;">Get Add-ons</a></p></th>
			<th class="manage-column column-columnname" scope="col"></th>
			<th class="manage-column column-columnname" scope="col"><a class="button-primary" href="http://wordpress.techgasp.com/skype-master/" target="_blank" title="Get Add-ons" style="float:right;">Get Add-ons</a></p></th>
		</tr>
	</tfoot>

	<tbody>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-skypemaster-admin-addons-widget-original.png', __FILE__); ?>" alt="<?php echo get_option('skype_master_name'); ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Skype Original Buttons Widget</h3><p>The perfect widget to display the Original Skype Action Buttons in your Wordpress Website and let users or customers contact you in a professional way.</p><p>You can display or hide the Skype Online User Status Button, Skype Call Me Button, Skype Chat with Me Button, Skype Add Me Button, Skype View My Profile Button, Skype Leave me VoiceMail, Skype Send Me a File. You can also display or hide your Online Status Buttons. Navigate to your wordpress widgets page and start using it.</p></td>

			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-check-yes.png', __FILE__); ?>" alt="<?php echo get_option('skype_master_name'); ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-skypemaster-admin-addons-widget-microsoft.png', __FILE__); ?>" alt="<?php echo get_option('skype_master_name'); ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Skype Microsoft Buttons Widget</h3><p>This Widget shows the new Microsft design buttons to let users or customers contact you in a professional way.</p><p>You can display or hide the Skype Online User Status Button, Skype Call Me Button, Skype Chat with Me Button, Skype Add Me Button, Skype View My Profile Button, Skype Leave me VoiceMail, Skype Send Me a File. You can also display or hide your Online Status Buttons. Navigate to your wordpress widgets page and start using it.</p></td>

			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-check-no.png', __FILE__); ?>" alt="<?php echo get_option('skype_master_name'); ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-skypemaster-admin-addons-widget-techgasp.png', __FILE__); ?>" alt="<?php echo get_option('skype_master_name'); ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Skype TechGasp Buttons Widget</h3><p>This is the "top of the line Widget" that shows the custom design made TechGasp transparent glossy buttons.</p><p>You can display or hide the Skype Online User Status Button, Skype Call Me Button, Skype Chat with Me Button, Skype Add Me Button, Skype View My Profile Button, Skype Leave me VoiceMail, Skype Send Me a File. You can also display or hide your Online Status Buttons. Navigate to your wordpress widgets page and start using it.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-check-no.png', __FILE__); ?>" alt="<?php echo get_option('skype_master_name'); ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-skypemaster-admin-addons-shortcode-in.png', __FILE__); ?>" alt="<?php echo get_option('skype_master_name'); ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Individual Shortcode</h3><p>Skype Master uses TechGasp Wordpress Framework. The <b>Individual Shortcode</b> allows you to have a different customized skype buttons in each page or post. Easy to use it can be found when you edit a page or a post under the wordpress text editor. Once you have created your shortcode, Just insert the shortcode <b>[skype-master]</b> anywhere inside that text.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-check-no.png', __FILE__); ?>" alt="<?php echo get_option('skype_master_name'); ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-skypemaster-admin-addons-shortcode-un.png', __FILE__); ?>" alt="<?php echo get_option('skype_master_name'); ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Universal Shortcode</h3><p>Skype Master uses TechGasp Wordpress Framework. The <b>Universal Shortcode</b> allows you to have the same skype buttons across different pages or posts. Easy to use it can be found right here under the Shortcodes menu. Once you have created your shortcode, Just insert the shortcode <b>[skype-master-un]</b> anywhere inside the text of your pages or posts.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-check-no.png', __FILE__); ?>" alt="<?php echo get_option('skype_master_name'); ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-skypemaster-admin-addons-updater.png', __FILE__); ?>" alt="<?php echo get_option('skype_master_name'); ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Advanced Updater</h3><p>The Advanced Updater allows you to easily Update / Upgrade your Advanced Plugin. You can instantly update your plugin after we release a new version with more goodies without having to wait for the nightly native wordpress updater that runs every 24/48 hours. Get it fresh, get it fast.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-check-no.png', __FILE__); ?>" alt="<?php echo get_option('skype_master_name'); ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-skypemaster-admin-addons-support.png', __FILE__); ?>" alt="<?php echo get_option('skype_master_name'); ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Award Winning Professional Support</h3><p>Need professional help deploying this plugin? TechGasp provides 24/7 award winning professional wordpress support for all advanced version costumers and replies to support tickets usually within minutes of being received. Support Us and we will Support You.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-check-no.png', __FILE__); ?>" alt="<?php echo get_option('skype_master_name'); ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
	</tbody>
</table>
<?php
		}
}