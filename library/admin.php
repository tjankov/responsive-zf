<?php
add_action( 'admin_menu', 'zf_add_admin_menu' );
add_action( 'admin_init', 'zf_settings_init' );


function zf_add_admin_menu(  ) { 

	add_theme_page( 'ZF Carousel Setup', 'ZF Carousel', 'manage_options', 'responsive_zf', 'zf_options_page' );

}


function zf_settings_init(  ) { 

	register_setting( 'pluginPage', 'zf_settings' );

	add_settings_section(
		'zf_pluginPage_section_1', 
		__( 'My Section 1', 'zf' ), 
		'zf_settings_section_callback', 
		'pluginPage'
	);

	add_settings_section(
		'zf_pluginPage_section_2', 
		__( 'My Section 2', 'zf' ), 
		'zf_settings_section_callback', 
		'pluginPage'
	);

	add_settings_field( 
		'zf_select_field_0', 
		__( 'Settings field description', 'zf' ), 
		'zf_select_field_0_render', 
		'pluginPage', 
		'zf_pluginPage_section_1' 
	);

	add_settings_field( 
		'zf_select_field_1', 
		__( 'Settings field description', 'zf' ), 
		'zf_select_field_1_render', 
		'pluginPage', 
		'zf_pluginPage_section_1' 
	);

	add_settings_field( 
		'zf_select_field_2', 
		__( 'Settings field description', 'zf' ), 
		'zf_select_field_1_render', 
		'pluginPage', 
		'zf_pluginPage_section_2' 
	);

	add_settings_field( 
		'zf_select_field_3', 
		__( 'Settings field description', 'zf' ), 
		'zf_select_field_2_render', 
		'pluginPage', 
		'zf_pluginPage_section_2' 
	);


}


function zf_select_field_0_render(  ) { 

	$options = get_option( 'zf_settings' );
	?>
	<select name='zf_settings[zf_select_field_0]'>
		<option value='1' <?php selected( $options['zf_select_field_0'], 1 ); ?>>Option 1</option>
		<option value='2' <?php selected( $options['zf_select_field_0'], 2 ); ?>>Option 2</option>
	</select>

<?php

}


function zf_select_field_1_render(  ) { 

	$options = get_option( 'zf_settings' );
	?>
	<select name='zf_settings[zf_select_field_1]'>
		<option value='1' <?php selected( $options['zf_select_field_1'], 1 ); ?>>Option 1</option>
		<option value='2' <?php selected( $options['zf_select_field_1'], 2 ); ?>>Option 2</option>
	</select>

<?php

}


function zf_select_field_2_render(  ) { 

	$options = get_option( 'zf_settings' );
	?>
	<select name='zf_settings[zf_select_field_1]'>
		<option value='1' <?php selected( $options['zf_select_field_1'], 1 ); ?>>Option 1</option>
		<option value='2' <?php selected( $options['zf_select_field_1'], 2 ); ?>>Option 2</option>
	</select>

<?php

}


function zf_select_field_3_render(  ) { 

	$options = get_option( 'zf_settings' );
	?>
	<select name='zf_settings[zf_select_field_1]'>
		<option value='1' <?php selected( $options['zf_select_field_1'], 1 ); ?>>Option 1</option>
		<option value='2' <?php selected( $options['zf_select_field_1'], 2 ); ?>>Option 2</option>
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
		<br />
		
		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>
		
	</form>
	<?php

}
