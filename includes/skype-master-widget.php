<?php
//Hook Widget
add_action( 'widgets_init', 'skype_master_widget' );
//Register Widget
function skype_master_widget() {
register_widget( 'skype_master_widget' );
}

class skype_master_widget extends WP_Widget {
	function skype_master_widget() {
	$widget_ops = array( 'classname' => 'Skype Master', 'description' => __('Skype Master is the Skype supreme plugin for any Wordpress powered website. Includes Show Online Status Button. ', 'skype_master') );
	$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'skype_master_widget' );
	$this->WP_Widget( 'skype_master_widget', __('Skype Master', 'skype_master'), $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance ) {
		extract( $args );
		//Our variables from the widget settings.
		$name = "Skype Master";
		$title = isset( $instance['title'] ) ? $instance['title'] :false;
		$skype_username = $instance['skype_username'];
		$show_skype_vertical = isset( $instance['show_skype_vertical'] ) ? $instance['show_skype_vertical'] :false;
		$show_skype_blue = isset( $instance['show_skype_blue'] ) ? $instance['show_skype_blue'] :false;
		$show_skype_add = isset( $instance['show_skype_add'] ) ? $instance['show_skype_add'] :false;
		echo $before_widget;
		
		// Display the widget title
	if ( $title )
		echo $before_title . $name . $after_title;
			//Display Buttons
	if ( $show_skype_vertical ){
			if ($show_skype_blue){
				if ($show_skype_add){
				echo '<a href="skype:'.$skype_username.'?add"><img src="http://download.skype.com/share/skypebuttons/buttons/add_blue_transparent_118x23.png" style="border: none;" width="118" height="23" alt="Add me to Skype" /></a>';
				}
				else {
				}
				}
			else {
				if ($show_skype_add){
				echo '<a href="skype:'.$skype_username.'?add"><img src="http://download.skype.com/share/skypebuttons/buttons/add_green_transparent_118x23.png" style="border: none;" width="118" height="23" alt="Add me to Skype" /></a>';
				}
				else {
				}
			}
			}
	else {
		if ($show_skype_blue){
			if ($show_skype_add){
			echo '<a href="skype:'.$skype_username.'?add"><img src="http://download.skype.com/share/skypebuttons/buttons/add_blue_transparent_118x23.png" style="border: none;" width="118" height="23" alt="Add me to Skype" /></a>';
			}
			else {
			}
			}
		else {
			if ($show_skype_add){
			echo '<a href="skype:'.$skype_username.'?add"><img src="http://download.skype.com/share/skypebuttons/buttons/add_green_transparent_118x23.png" style="border: none;" width="118" height="23" alt="Add me to Skype" /></a>';
			}
			else {
			}
		}
	}
	$after_widget;
	}
	//Update the widget
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		//Strip tags from title and name to remove HTML
		$instance['name'] = strip_tags( $new_instance['name'] );
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['skype_username'] = $new_instance['skype_username'];
		$instance['show_skype_vertical'] = $new_instance['show_skype_vertical'];
		$instance['show_skype_blue'] = $new_instance['show_skype_blue'];
		$instance['show_skype_add'] = $new_instance['show_skype_add'];
		return $instance;
	}
	function form( $instance ) {
	//Set up some default widget settings.
	$defaults = array( 'name' => __('Skype Master', 'skype_master'), 'title' => true, 'skype_username' => false, 'show_skype_vertical' => false, 'show_skype_blue' => false, 'show_skype_add' => false );
	$instance = wp_parse_args( (array) $instance, $defaults );
	?>
		<b>Check the buttons to be displayed:</b>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['title'], true ); ?> id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><b><?php _e('Display Widget Title', 'skype master'); ?></b></label></br>
	</p>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<label for="<?php echo $this->get_field_id( 'skype_username' ); ?>"><b><?php _e('Skype Username:', 'skype master'); ?></label></b></br>
	<input id="<?php echo $this->get_field_id( 'skype_username' ); ?>" name="<?php echo $this->get_field_name( 'skype_username' ); ?>" value="<?php echo $instance['skype_username']; ?>" style="width:auto;" />
	</p>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_skype_vertical'], true ); ?> id="<?php echo $this->get_field_id( 'show_skype_vertical' ); ?>" name="<?php echo $this->get_field_name( 'show_skype_vertical' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_skype_vertical' ); ?>"><b><?php _e('Display Vertical Buttons', 'skype master'); ?></b></label></br>
	</p>
	<div class="description">Skype Buttons Display, <b>OFF</b> Horizontal and <b>ON</b> Vertical.</div>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_skype_blue'], true ); ?> id="<?php echo $this->get_field_id( 'show_skype_blue' ); ?>" name="<?php echo $this->get_field_name( 'show_skype_blue' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_skype_blue' ); ?>"><b><?php _e('Display Skype Blue Buttons', 'skype master'); ?></b></label></br>
	</p>
	<div class="description">Skype Buttons icon set, <b>OFF</b> Green and <b>ON</b> Blue.</div>
	<div class="description">More about these settings, <a href="http://wordpress.techgasp.com/skype-master-documentation/" target="_blank" title="Skype Master Documentation">documentation</a>.</div>
	<br>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>Display Skype Status Button</b>
	</p>
	<div class="description">Only available in advanced version.</div>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>Display Skype Call Me Button</b>
	</p>
	<div class="description">Only available in advanced version.</div>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>Display Skype Chat With Button</b>
	</p>
	<div class="description">Only available in advanced version.</div>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_skype_add'], true ); ?> id="<?php echo $this->get_field_id( 'show_skype_add' ); ?>" name="<?php echo $this->get_field_name( 'show_skype_add' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_skype_add' ); ?>"><b><?php _e('Display Skype Add Me Button', 'skype master'); ?></b></label>
	</p>
	<div class="description">Activate to show Skype Add Me Button.</div>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>Display Skype View My Profile Button</b>
	</p>
	<div class="description">Only available in advanced version.</div>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>Display Skype Voice Mail Button</b>
	</p>
	<div class="description">Only available in advanced version.</div>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>Display Skype Send Me a File Button</b>
	</p>
	<div class="description">Only available in advanced version.</div><br>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>Skype Master Website</b>
	</p>
	<p><a class="button-secondary" href="http://wordpress.techgasp.com/skype-master/" target="_blank" title="Skype Master Info Page">Info Page</a> <a class="button-secondary" href="http://wordpress.techgasp.com/skype-master-documentation/" target="_blank" title="Skype Master Documentation">Documentation</a> <a class="button-primary" href="http://wordpress.techgasp.com/skype-master/" target="_blank" title="Skype Master Wordpress">Advanced Version</a></p>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
		<p>
		<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
		&nbsp;
		<b>Advanced Version Updater:</b>
		</p>
		<div class="description">The advanced version updater allows to automatically update your advanced plugin. Only available in advanced version.</div>
	<?php
	}
 }
?>