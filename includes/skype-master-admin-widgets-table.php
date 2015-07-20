<?php
if(!class_exists('WP_List_Table')){
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
class skype_master_admin_widgets_table extends WP_List_Table {
	/**
	 * Display the rows of records in the table
	 * @return string, echo the markup of the rows
	 */
	function display() {
?>
<table class="widefat fixed" cellspacing="0">
	<thead>
		<tr>
			<th id="columnname" class="manage-column column-columnname" scope="col" width="300"><legend><h3><img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:16px; vertical-align:middle;" /><?php _e('&nbsp;Screenshot', 'skype_master'); ?></h3></legend></th>
			<th id="columnname" class="manage-column column-columnname" scope="col"><h3><img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:16px; vertical-align:middle;" /><?php _e('&nbsp;Description', 'skype_master'); ?></h3></legend></th>
		</tr>
	</thead>

	<tfoot>
		<tr>
			<th class="manage-column column-columnname" scope="col" width="300"><a class="button-primary" href="<?php echo get_site_url(); ?>/wp-admin/widgets.php" title="To Widgets Page" style="float:left;">To Widgets Page</a></p></th>
			<th class="manage-column column-columnname" scope="col"><a class="button-primary" href="<?php echo get_site_url(); ?>/wp-admin/widgets.php" title="To Widgets Page" style="float:right;">To Widgets Page</a></p></th>
		</tr>
	</tfoot>

	<tbody>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-skypemaster-admin-widget-original.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('skype_master_name'); ?>" align="left" width="300px" height="135px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Skype Original Buttons Widget</h3><p>The perfect widget to display the Original Skype Action Buttons in your Wordpress Website and let users or customers contact you in a professional way.</p><p>You can display or hide the Skype Online User Status Button, Skype Call Me Button, Skype Chat with Me Button, Skype Add Me Button, Skype View My Profile Button, Skype Leave me VoiceMail, Skype Send Me a File. You can also display or hide your Online Status Buttons. Option to select <b>Skype Original Blue or Green colour</b>.</p><p>Navigate to your wordpress widgets page and start using it.</p></td>
		</tr>
		<tr>
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-skypemaster-admin-widget-microsoft.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('skype_master_name'); ?>" align="left" width="300px" height="135px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Skype Microsoft Buttons Widget</h3><p>This Widget shows the new Microsft design buttons to let users or customers contact you in a professional way.</p><p>You can display or hide the Skype Online User Status Button, Skype Call Me Button, Skype Chat with Me Button, Skype Add Me Button, Skype View My Profile Button, Skype Leave me VoiceMail, Skype Send Me a File. You can also display or hide your Online Status Buttons.</p><p>Check the Add-ons Page.</p></td>
		</tr>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-skypemaster-admin-widget-techgasp.png', dirname(__FILE__)); ?>" alt="<?php echo get_option('skype_master_name'); ?>" align="left" width="300px" height="135px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Skype TechGasp Buttons Widget</h3><p>This is the "top of the line Widget" that shows the custom designers made TechGasp transparent glossy buttons.</p><p>You can display or hide the Skype Online User Status Button, Skype Call Me Button, Skype Chat with Me Button, Skype Add Me Button, Skype View My Profile Button, Skype Leave me VoiceMail, Skype Send Me a File. You can also display or hide your Online Status Buttons.</p><p>Check the Add-ons Page.</p></td>
		</tr>
	</tbody>
</table>
<?php
		}
}