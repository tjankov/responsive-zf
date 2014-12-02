<?php
add_action( 'admin_menu', 'zf_add_carousel_page' );
add_action( 'admin_init', 'zf_carousel_setup_init' );


function zf_add_carousel_page(  ) { 

	add_theme_page( 'ZF Carousel Setup', 'ZF Carousel', 'manage_options', 'responsive_zf', 'zf_options_page' );

}


function zf_carousel_setup_init(  ) { 

	register_setting( 'carouselPage', 'zf_settings' );
	

### sections
########################################################################

	add_settings_section(
		'zf_carousel_slide_section_1', 									# id
		__( 'Slide 1', 'zf' ), 													# title
		'zf_settings_section_callback', 								# callback
		'carouselPage'																	# page
	);

	add_settings_section(
		'zf_carousel_slide_section_2', 									# id
		__( 'Slide 2', 'zf' ), 													# title
		'zf_settings_section_callback', 								# callback
		'carouselPage'																	# page
	);

	add_settings_section(
		'zf_carousel_slide_section_3', 									# id
		__( 'Slide 3', 'zf' ), 													# title
		'zf_settings_section_callback', 								# callback
		'carouselPage'																	# page
	);

### 1. fields	
########################################################################

	add_settings_field( 
		'zf_carousel_link_select_field_1', 							# id
		__( 'Settings field description', 'zf' ), 			# title
		'zf_carousel_link_select_render', 							# callback
		'carouselPage', 																# page
		'zf_carousel_slide_section_1', 									# section
		array( 'number' => 1 )													# args callback	
	);

	add_settings_field( 
		'zf_carousel_text_select_field_1', 							# id
		__( 'Settings field description', 'zf' ), 			# title
		'zf_carousel_text_select_render', 							# callback
		'carouselPage', 																# page
		'zf_carousel_slide_section_1', 									# section	
		array( 'number' => 1 )													# args callback	
	);

	add_settings_field( 
		'zf_carousel_image_select_field_1', 						# id
		__( 'Settings field description', 'zf' ), 			# title
		'zf_carousel_image_select_render', 							# callback
		'carouselPage', 																# page
		'zf_carousel_slide_section_1', 									# section
		array( 'number' => 1 )													# args callback	
	);


### 2. fields
########################################################################

	add_settings_field( 
		'zf_carousel_link_select_field_2', 							# id
		__( 'Settings field description', 'zf' ), 			# title
		'zf_carousel_link_select_render', 							# callback
		'carouselPage', 																# page
		'zf_carousel_slide_section_2', 									# section
		array( 'number' => 2 )													# args callback	
	);

	add_settings_field( 
		'zf_carousel_text_select_field_2', 							# id
		__( 'Settings field description', 'zf' ), 			# title
		'zf_carousel_text_select_render', 							# callback
		'carouselPage', 																# page
		'zf_carousel_slide_section_2', 									# section	
		array( 'number' => 2 )													# args callback	
	);

	add_settings_field( 
		'zf_carousel_image_select_field_2', 						# id
		__( 'Settings field description', 'zf' ), 			# title
		'zf_carousel_image_select_render', 							# callback
		'carouselPage', 																# page
		'zf_carousel_slide_section_2', 									# section
		array( 'number' => 2 )													# args callback	
	);


### 3. fields
########################################################################

	add_settings_field( 
		'zf_carousel_link_select_field_3', 							# id
		__( 'Settings field description', 'zf' ), 			# title
		'zf_carousel_link_select_render', 							# callback
		'carouselPage', 																# page
		'zf_carousel_slide_section_3', 									# section
		array( 'number' => 3 )													# args callback	
	);

	add_settings_field( 
		'zf_carousel_text_select_field_3', 							# id
		__( 'Settings field description', 'zf' ), 			# title
		'zf_carousel_text_select_render', 							# callback
		'carouselPage', 																# page
		'zf_carousel_slide_section_3', 									# section	
		array( 'number' => 3 )													# args callback	
	);

	add_settings_field( 
		'zf_carousel_image_select_field_3', 						# id
		__( 'Settings field description', 'zf' ), 			# title
		'zf_carousel_image_select_render', 							# callback
		'carouselPage', 																# page
		'zf_carousel_slide_section_3', 									# section
		array( 'number' => 3 )													# args callback	
	);


}

function zf_carousel_link_select_render( $args ) { 

	$options = get_option( 'zf_settings' );
	?>
	<select name="zf_settings[zf_carousel_link_select_field_<?php echo $args['number']; ?>]">
		<option value='1' <?php selected( $options["zf_carousel_link_select_field_{$args['number']}"], 1 ); ?>>koka</option>
		<option value='2' <?php selected( $options["zf_carousel_link_select_field_{$args['number']}"], 2 ); ?>>pas</option>
	</select>

<?php

}


function zf_carousel_text_select_render( $args ) { 

	$options = get_option( 'zf_settings' );
	?>
	<select name="zf_settings[zf_carousel_text_select_field_<?php echo $args['number']; ?>]">
		<option value='1' <?php selected( $options["zf_carousel_text_select_field_{$args['number']}"], 1 ); ?>>maca</option>
		<option value='2' <?php selected( $options["zf_carousel_text_select_field_{$args['number']}"], 2 ); ?>>medo</option>
	</select>

<?php

}


function zf_carousel_image_select_render( $args ) { 

	$options = get_option( 'zf_settings' );
	?>
	<select name="zf_settings[zf_carousel_image_select_field_<?php echo $args['number']; ?>]">
		<option value='1' <?php selected( $options["zf_carousel_image_select_field_{$args['number']}"], 1 ); ?>>riba</option>
		<option value='2' <?php selected( $options["zf_carousel_image_select_field_{$args['number']}"], 2 ); ?>>botnica</option>
	</select>

<?php

}





function zf_settings_section_callback(  ) { 

	echo __( 'This section description', 'zf' );

}


function zf_options_page(  ) { 

	?>
	<form action='options.php' method='post'>
		
		<h2>ZF Carousel</h2>
		<hr />
		<br />
		
		<?php
		settings_fields( 'carouselPage' );
		do_settings_sections( 'carouselPage' );
		submit_button();
		?>
		
	</form>
	<?php

}
