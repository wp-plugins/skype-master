<?php
//Hook Widget
add_action( 'widgets_init', 'skype_master_widget_original' );
//Register Widget
function skype_master_widget_original() {
register_widget( 'skype_master_widget_original' );
}

class skype_master_widget_original extends WP_Widget {
	function skype_master_widget_original() {
	$widget_ops = array( 'classname' => 'Skype Master Original Buttons', 'description' => __('The perfect widget to display Original Skype Action Buttons in your Wordpress Website and let users or customers contact you in a professional way. ', 'skype_master') );
	$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'skype_master_widget_original' );
	$this->WP_Widget( 'skype_master_widget_original', __('Skype Master Original Buttons', 'skype_master'), $widget_ops, $control_ops );
	}

	function widget( $args, $instance ) {
		extract( $args );
		//Our variables from the widget settings.
		$skype_title = isset( $instance['skype_title'] ) ? $instance['skype_title'] :false;
		$skype_title_new = isset( $instance['skype_title_new'] ) ? $instance['skype_title_new'] :false;
		$skype_username = $instance['skype_username'];
		$show_skype_vertical = isset( $instance['show_skype_vertical'] ) ? $instance['show_skype_vertical'] :false;
		$show_skype_blue = isset( $instance['show_skype_blue'] ) ? $instance['show_skype_blue'] :false;
		$show_skype_status = isset( $instance['show_skype_status'] ) ? $instance['show_skype_status'] :false;
		$show_skype_call = isset( $instance['show_skype_call'] ) ? $instance['show_skype_call'] :false;
		$show_skype_chat = isset( $instance['show_skype_chat'] ) ? $instance['show_skype_chat'] :false;
		$show_skype_add = isset( $instance['show_skype_add'] ) ? $instance['show_skype_add'] :false;
		$show_skype_view = isset( $instance['show_skype_view'] ) ? $instance['show_skype_view'] :false;
		$show_skype_voicemail = isset( $instance['show_skype_voicemail'] ) ? $instance['show_skype_voicemail'] :false;
		$show_skype_file = isset( $instance['show_skype_file'] ) ? $instance['show_skype_file'] :false;
		echo $before_widget;
		
		// Display the widget title
	if ( $skype_title ){
		if (empty ($skype_title_new)){
			if(is_multisite()){
			$skype_title_new = get_site_option('skype_master_name');
			}
			else{
			$skype_title_new = get_option('skype_master_name');
			}
		echo $before_title . $skype_title_new . $after_title;
		}
		else{
		echo $before_title . $skype_title_new . $after_title;
		}
	}
	else{
	}
			//Display Buttons
	if ( $show_skype_vertical ){
			if ($show_skype_blue){
				if ($show_skype_call){
				echo '<a href="skype:'.$skype_username.'?call"><img src="http://download.skype.com/share/skypebuttons/buttons/call_blue_transparent_70x23.png" style="border: none;" width="70" height="23" alt="Skype Me" /></a></br>';
				}
				else {
				}
				if ($show_skype_chat){
				echo '<a href="skype:'.$skype_username.'?chat"><img src="http://download.skype.com/share/skypebuttons/buttons/chat_blue_transparent_97x23.png" style="border: none;" width="97" height="23" alt="Chat with me" /></a></br>';
				}
				else {
				}
				if ($show_skype_add){
				echo '<a href="skype:'.$skype_username.'?add"><img src="http://download.skype.com/share/skypebuttons/buttons/add_blue_transparent_118x23.png" style="border: none;" width="118" height="23" alt="Add me to Skype" /></a></br>';
				}
				else {
				}
				if ($show_skype_view){
				echo '<a href="skype:'.$skype_username.'?userinfo"><img src="http://download.skype.com/share/skypebuttons/buttons/userinfo_blue_transparent_108x23.png" style="border: none;" width="108" height="23" alt="View my profile" /></a></br>';
				}
				else {
				}
				if ($show_skype_voicemail){
				echo '<a href="skype:'.$skype_username.'?voicemail"><img src="http://download.skype.com/share/skypebuttons/buttons/voicemail_blue_transparent_129x23.png" style="border: none;" width="129" height="23" alt="Leave me voicemail" /></a></br>';
				}
				else {
				}
				if ($show_skype_file){
				echo '<a href="skype:'.$skype_username.'?sendfile"><img src="http://download.skype.com/share/skypebuttons/buttons/sendfile_blue_transparent_98x23.png" style="border: none;" width="98" height="23" alt="Send me a file" /></a></br>';
				}
				else {
				}
				}
			else {
				if ($show_skype_call){
				echo '<a href="skype:'.$skype_username.'?call"><img src="http://download.skype.com/share/skypebuttons/buttons/call_green_transparent_70x23.png" style="border: none;" width="70" height="23" alt="Skype Me" /></a></br>';
				}
				else {
				}
				if ($show_skype_chat){
				echo '<a href="skype:'.$skype_username.'?chat"><img src="http://download.skype.com/share/skypebuttons/buttons/chat_green_transparent_97x23.png" style="border: none;" width="97" height="23" alt="Chat with me" /></a></br>';
				}
				else {
				}
				if ($show_skype_add){
				echo '<a href="skype:'.$skype_username.'?add"><img src="http://download.skype.com/share/skypebuttons/buttons/add_green_transparent_118x23.png" style="border: none;" width="118" height="23" alt="Add me to Skype" /></a></br>';
				}
				else {
				}
				if ($show_skype_view){
				echo '<a href="skype:'.$skype_username.'?userinfo"><img src="http://download.skype.com/share/skypebuttons/buttons/userinfo_green_transparent_108x23.png" style="border: none;" width="108" height="23" alt="View my profile" /></a></br>';
				}
				else {
				}
				if ($show_skype_voicemail){
				echo '<a href="skype:'.$skype_username.'?voicemail"><img src="http://download.skype.com/share/skypebuttons/buttons/voicemail_green_transparent_129x23.png" style="border: none;" width="129" height="23" alt="Leave me voicemail" /></a></br>';
				}
				else {
				}
				if ($show_skype_file){
				echo '<a href="skype:'.$skype_username.'?sendfile"><img src="http://download.skype.com/share/skypebuttons/buttons/sendfile_green_transparent_98x23.png" style="border: none;" width="98" height="23" alt="Send me a file" /></a></br>';
				}
				else {
				}
			}
			}
	else {
		if ($show_skype_blue){
			if ($show_skype_call){
			echo '<a href="skype:'.$skype_username.'?call"><img src="http://download.skype.com/share/skypebuttons/buttons/call_blue_transparent_70x23.png" style="border: none;" width="70" height="23" alt="Skype Me" /></a>';
			}
			else {
			}
			if ($show_skype_chat){
			echo '<a href="skype:'.$skype_username.'?chat"><img src="http://download.skype.com/share/skypebuttons/buttons/chat_blue_transparent_97x23.png" style="border: none;" width="97" height="23" alt="Chat with me" /></a>';
			}
			else {
			}
			if ($show_skype_add){
			echo '<a href="skype:'.$skype_username.'?add"><img src="http://download.skype.com/share/skypebuttons/buttons/add_blue_transparent_118x23.png" style="border: none;" width="118" height="23" alt="Add me to Skype" /></a>';
			}
			else {
			}
			if ($show_skype_view){
			echo '<a href="skype:'.$skype_username.'?userinfo"><img src="http://download.skype.com/share/skypebuttons/buttons/userinfo_blue_transparent_108x23.png" style="border: none;" width="108" height="23" alt="View my profile" /></a>';
			}
			else {
			}
			if ($show_skype_voicemail){
			echo '<a href="skype:'.$skype_username.'?voicemail"><img src="http://download.skype.com/share/skypebuttons/buttons/voicemail_blue_transparent_129x23.png" style="border: none;" width="129" height="23" alt="Leave me voicemail" /></a>';
			}
			else {
			}
			if ($show_skype_file){
			echo '<a href="skype:'.$skype_username.'?sendfile"><img src="http://download.skype.com/share/skypebuttons/buttons/sendfile_blue_transparent_98x23.png" style="border: none;" width="98" height="23" alt="Send me a file" /></a>';
			}
			else {
			}
			}
		else {
			if ($show_skype_call){
			echo '<a href="skype:'.$skype_username.'?call"><img src="http://download.skype.com/share/skypebuttons/buttons/call_green_transparent_70x23.png" style="border: none;" width="70" height="23" alt="Skype Me" /></a>';
			}
			else {
			}
			if ($show_skype_chat){
			echo '<a href="skype:'.$skype_username.'?chat"><img src="http://download.skype.com/share/skypebuttons/buttons/chat_green_transparent_97x23.png" style="border: none;" width="97" height="23" alt="Chat with me" /></a>';
			}
			else {
			}
			if ($show_skype_add){
			echo '<a href="skype:'.$skype_username.'?add"><img src="http://download.skype.com/share/skypebuttons/buttons/add_green_transparent_118x23.png" style="border: none;" width="118" height="23" alt="Add me to Skype" /></a>';
			}
			else {
			}
			if ($show_skype_view){
			echo '<a href="skype:'.$skype_username.'?userinfo"><img src="http://download.skype.com/share/skypebuttons/buttons/userinfo_green_transparent_108x23.png" style="border: none;" width="108" height="23" alt="View my profile" /></a>';
			}
			else {
			}
			if ($show_skype_voicemail){
			echo '<a href="skype:'.$skype_username.'?voicemail"><img src="http://download.skype.com/share/skypebuttons/buttons/voicemail_green_transparent_129x23.png" style="border: none;" width="129" height="23" alt="Leave me voicemail" /></a>';
			}
			else {
			}
			if ($show_skype_file){
			echo '<a href="skype:'.$skype_username.'?sendfile"><img src="http://download.skype.com/share/skypebuttons/buttons/sendfile_green_transparent_98x23.png" style="border: none;" width="98" height="23" alt="Send me a file" /></a>';
			}
			else {
			}
		}
	}
	echo $after_widget;
	}
	//Update the widget
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		//Strip tags from title and name to remove HTML
		$instance['skype_title'] = strip_tags( $new_instance['skype_title'] );
		$instance['skype_title_new'] = $new_instance['skype_title_new'];
		$instance['skype_username'] = $new_instance['skype_username'];
		$instance['show_skype_vertical'] = $new_instance['show_skype_vertical'];
		$instance['show_skype_blue'] = $new_instance['show_skype_blue'];
		$instance['show_skype_call'] = $new_instance['show_skype_call'];
		$instance['show_skype_chat'] = $new_instance['show_skype_chat'];
		$instance['show_skype_add'] = $new_instance['show_skype_add'];
		$instance['show_skype_view'] = $new_instance['show_skype_view'];
		$instance['show_skype_voicemail'] = $new_instance['show_skype_voicemail'];
		$instance['show_skype_file'] = $new_instance['show_skype_file'];
		return $instance;
	}
	function form( $instance ) {
	//Set up some default widget settings.
	$defaults = array( 'skype_title_new' => __('Skype Master', 'skype_master'), 'skype_title' => true, 'skype_title_new' => false, 'skype_username' => false, 'show_skype_vertical' => false, 'show_skype_blue' => false, 'show_skype_call' => false, 'show_skype_chat' => false, 'show_skype_add' => false, 'show_skype_view' => false, 'show_skype_voicemail' => false, 'show_skype_file' => false );
	$instance = wp_parse_args( (array) $instance, $defaults );
	?>
		<br>
		<b>Check the buttons to be displayed:</b>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['skype_title'], true ); ?> id="<?php echo $this->get_field_id( 'skype_title' ); ?>" name="<?php echo $this->get_field_name( 'skype_title' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'skype_title' ); ?>"><b><?php _e('Display Widget Title', 'skype_master'); ?></b></label></br>
	</p>
	<p>
	<label for="<?php echo $this->get_field_id( 'skype_title_new' ); ?>"><?php _e('Change Title:', 'skype_master'); ?></label>
	<br>
	<input id="<?php echo $this->get_field_id( 'skype_title_new' ); ?>" name="<?php echo $this->get_field_name( 'skype_title_new' ); ?>" value="<?php echo $instance['skype_title_new']; ?>" style="width:auto;" />
	</p>
<div style="background: url(<?php echo plugins_url('images/techgasp-hr.png', dirname(__FILE__)); ?>) repeat-x; height: 10px"></div>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<label for="<?php echo $this->get_field_id( 'skype_username' ); ?>"><b><?php _e('Skype Username:', 'skype_master'); ?></label></b></br>
	<input id="<?php echo $this->get_field_id( 'skype_username' ); ?>" name="<?php echo $this->get_field_name( 'skype_username' ); ?>" value="<?php echo $instance['skype_username']; ?>" style="width:auto;" />
	</p>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_skype_vertical'], true ); ?> id="<?php echo $this->get_field_id( 'show_skype_vertical' ); ?>" name="<?php echo $this->get_field_name( 'show_skype_vertical' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_skype_vertical' ); ?>"><b><?php _e('Display Vertical Buttons', 'skype_master'); ?></b></label></br>
	<div class="description">Skype Buttons Display, <b>OFF</b> Horizontal and <b>ON</b> Vertical.</div>
	</p>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_skype_blue'], true ); ?> id="<?php echo $this->get_field_id( 'show_skype_blue' ); ?>" name="<?php echo $this->get_field_name( 'show_skype_blue' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_skype_blue' ); ?>"><b><?php _e('Display Skype Blue Buttons', 'skype_master'); ?></b></label></br>
	<div class="description">Skype Buttons icon set, <b>OFF</b> Green and <b>ON</b> Blue.</div>
	<div class="description">More about these settings, <a href="http://wordpress.techgasp.com/skype-master-documentation/" target="_blank" title="<?php echo get_option('skype_master_name'); ?> Documentation">documentation</a>.</div>
	</p>
<div style="background: url(<?php echo plugins_url('images/techgasp-hr.png', dirname(__FILE__)); ?>) repeat-x; height: 10px"></div>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_skype_call'], true ); ?> id="<?php echo $this->get_field_id( 'show_skype_call' ); ?>" name="<?php echo $this->get_field_name( 'show_skype_call' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_skype_call' ); ?>"><b><?php _e('Display Skype Call Me Button', 'skype_master'); ?></b></label></br>
	</p>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_skype_chat'], true ); ?> id="<?php echo $this->get_field_id( 'show_skype_chat' ); ?>" name="<?php echo $this->get_field_name( 'show_skype_chat' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_skype_chat' ); ?>"><b><?php _e('Display Skype Chat with Button', 'skype_master'); ?></b></label></br>
	</p>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_skype_add'], true ); ?> id="<?php echo $this->get_field_id( 'show_skype_add' ); ?>" name="<?php echo $this->get_field_name( 'show_skype_add' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_skype_add' ); ?>"><b><?php _e('Display Skype Add Me Button', 'skype_master'); ?></b></label></br>
	</p>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_skype_view'], true ); ?> id="<?php echo $this->get_field_id( 'show_skype_view' ); ?>" name="<?php echo $this->get_field_name( 'show_skype_view' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_skype_view' ); ?>"><b><?php _e('Display Skype View My Profile Button', 'skype_master'); ?></b></label></br>
	</p>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_skype_voicemail'], true ); ?> id="<?php echo $this->get_field_id( 'show_skype_voicemail' ); ?>" name="<?php echo $this->get_field_name( 'show_skype_voicemail' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_skype_voicemail' ); ?>"><b><?php _e('Display Skype Voice Mail Button', 'skype_master'); ?></b></label></br>
	</p>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_skype_file'], true ); ?> id="<?php echo $this->get_field_id( 'show_skype_file' ); ?>" name="<?php echo $this->get_field_name( 'show_skype_file' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_skype_file' ); ?>"><b><?php _e('Display Skype Send Me a File Button', 'skype_master'); ?></b></label></br>
	</p>
<div style="background: url(<?php echo plugins_url('images/techgasp-hr.png', dirname(__FILE__)); ?>) repeat-x; height: 10px"></div>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b><?php echo get_option('skype_master_name'); ?> Website</b>
	</p>
	<p><a class="button-secondary" href="http://wordpress.techgasp.com/skype-master/" target="_blank" title="<?php echo get_option('skype_master_name'); ?> Info Page">Info Page</a> <a class="button-secondary" href="http://wordpress.techgasp.com/skype-master-documentation/" target="_blank" title="<?php echo get_option('skype_master_name'); ?> Documentation">Documentation</a> <a class="button-primary" href="http://wordpress.org/plugins/skype-master/" target="_blank" title="<?php echo get_option('skype_master_name'); ?> Wordpress">RATE US *****</a></p>
	<?php
	}
 }
?>