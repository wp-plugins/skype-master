<?php
//Load Shortcode Framework

//Hook Widget
add_action( 'widgets_init', 'techgasp_skypemaster_widget' );
//Register Widget
function techgasp_skypemaster_widget() {
register_widget( 'techgasp_skypemaster_widget' );
}

class techgasp_skypemaster_widget extends WP_Widget {
	function techgasp_skypemaster_widget() {
	$widget_ops = array( 'classname' => 'Skype Master', 'description' => __('Skype Master is the Skype supreme plugin for any Wordpress powered website. Includes Show Online Status Button. ', 'Skype Master') );
	$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'techgasp_skypemaster_widget' );
	$this->WP_Widget( 'techgasp_skypemaster_widget', __('Skype Master', 'skype master'), $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance ) {
		extract( $args );
		//Our variables from the widget settings.
		$title = "Skype Master";
		$skype_username = $instance['skype_username'];
		$show_skype_vertical = isset( $instance['show_skype_vertical'] ) ? $instance['show_skype_vertical'] :false;
		$show_skype_blue = isset( $instance['show_skype_blue'] ) ? $instance['show_skype_blue'] :false;
		$show_skype_add = isset( $instance['show_skype_add'] ) ? $instance['show_skype_add'] :false;
		echo $before_widget;
		
		// Display the widget title
	if ( $title )
		echo $before_title . $title . $after_title;
			//Display Buttons
	if ( $show_skype_vertical ){
			if ($show_skype_blue){
				if ($show_skype_add){
				echo '<a href="skype:'.$skype_username.'?add"><img src="http://download.skype.com/share/skypebuttons/buttons/add_blue_transparent_118x23.png" style="border: none;" width="118" height="23" alt="Add me to Skype" /></a></br>';
				}
				else {
                                }
				}
			else {
				if ($show_skype_add){
				echo '<a href="skype:'.$skype_username.'?add"><img src="http://download.skype.com/share/skypebuttons/buttons/add_green_transparent_118x23.png" style="border: none;" width="118" height="23" alt="Add me to Skype" /></a></br>';
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
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['skype_username'] = $new_instance['skype_username'];
		$instance['show_skype_vertical'] = $new_instance['show_skype_vertical'];
		$instance['show_skype_blue'] = $new_instance['show_skype_blue'];
		$instance['show_skype_add'] = $new_instance['show_skype_add'];
		return $instance;
	}
	function form( $instance ) {
	//Set up some default widget settings.
	$defaults = array( 'title' => __('Skype Master', 'skype master'), 'skype_username' => false, 'show_skype_vertical' => false, 'show_skype_blue' => false, 'show_skype_add' => false );
	$instance = wp_parse_args( (array) $instance, $defaults );
	?>
		<b>Check the buttons to be displayed:</b>
	<p>
	<label for="<?php echo $this->get_field_id( 'skype_username' ); ?>"><?php _e('Skype Username:', 'skype master'); ?></label></br>
	<input id="<?php echo $this->get_field_id( 'skype_username' ); ?>" name="<?php echo $this->get_field_name( 'skype_username' ); ?>" value="<?php echo $instance['skype_username']; ?>" style="width:auto;" />
	</p>
	<hr>
	<p>
	<input type="checkbox" <?php checked( (bool) $instance['show_skype_vertical'], true ); ?> id="<?php echo $this->get_field_id( 'show_skype_vertical' ); ?>" name="<?php echo $this->get_field_name( 'show_skype_vertical' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_skype_vertical' ); ?>"><b><?php _e('Display Vertical Buttons', 'skype master'); ?></b></label></br>
	</p>
	<hr>
	<p>
	<input type="checkbox" <?php checked( (bool) $instance['show_skype_blue'], true ); ?> id="<?php echo $this->get_field_id( 'show_skype_blue' ); ?>" name="<?php echo $this->get_field_name( 'show_skype_blue' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_skype_blue' ); ?>"><b><?php _e('Display Skype Blue Buttons', 'skype master'); ?></b></label></br>
	</p>
	<hr>
	<p>
	<input type="checkbox" <?php checked( (bool) $instance['show_skype_add'], true ); ?> id="<?php echo $this->get_field_id( 'show_skype_add' ); ?>" name="<?php echo $this->get_field_name( 'show_skype_add' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_skype_add' ); ?>"><b><?php _e('Display Skype Add Me Button', 'skype master'); ?></b></label></br>
	</p>
	<hr>
	<p><b>Skype Master Advanced Version:</b> contains All Skype Buttons in 2 colors to choose from (skype blue and skype green). Vertical or Horizontal Button alignment. Also includes shortcode framework.</p>
	<p><a class="button-primary" href="http://wordpress.techgasp.com/skype-master/" target="_blank" title="Skype Master Advanced Version">Skype Master Advanced Version</a></p>
	<?php
	}
 }
?>
