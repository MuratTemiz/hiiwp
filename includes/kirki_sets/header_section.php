<?php
Kirki::add_section( 'header_section', array(
    'priority'    => 3,
    'title'       => __( 'Header', 'textdomain' ),
    'description' => __( 'header settings', 'textdomain' ),
) );
Kirki::add_field( 'header_type', array(
	'type'        => 'select',
    'settings'    => 'header_type',
    'label'       => __( 'Type of header', 'my_textdomain' ),
    'section'     => 'header_section',
    'default'     => 'regular',
    'priority'    => 1,
    'multiple'    => 1,
    'choices'     => array(
        'regular' => esc_attr__( 'Regular', 'my_textdomain' ),
        'centered' => esc_attr__( 'Centered', 'my_textdomain' ),
        'fixed' => esc_attr__( 'Fixed', 'my_textdomain' ),
    ),
) );
Kirki::add_field( 'header_above_content', array(
    'type'        => 'switch',
    'settings'    => 'header_above_content',
    'label'       => __( 'Content Below Header', 'my_textdomain' ),
    'section'     => 'header_section',
    'default'     => false,
    'priority'    => 1,
) );
Kirki::add_field( 'header_in_grid', array(
    'type'        => 'switch',
    'settings'    => 'header_in_grid',
    'label'       => __( 'Header in Grid', 'my_textdomain' ),
    'section'     => 'header_section',
    'default'     => true,
    'priority'    => 1,
) );

Kirki::add_field( 'header_background', array(
	'type'        => 'background',
    'settings'    => 'header_background',
    'label'       => __( 'Header Background', 'my_textdomain' ),
    'section'     => 'header_section',
    'priority'    => 2,
    'default'     => array(
		'color'    => '#ffffff',
		'image'    => '',
		'repeat'   => 'no-repeat',
		'size'     => 'cover',
		'attach'   => 'fixed',
		'position' => 'left-top',
		'opacity'  => 90,
	),
	'output' => 'header#main_header',
	'required'	  => array(
    	array(
	    	'setting'  => 'header_above_content',
			'operator' => '==',
			'value'    => true,
    	)
    ),
) );
Kirki::add_field( 'header_line_height', array(
    'type'        => 'dimension',
    'settings'    => 'header_line_height',
    'label'       => __( 'Header Line Height', 'my_textdomain' ),
    'section'     => 'header_section',
    'default'     => '30px',
    'priority'    => 3,
    'output' => 'header#main_header',
) );


Kirki::add_field( 'header_top_border_width', array(
    'type'        => 'dimension',
    'settings'    => 'header_top_border_width',
    'label'       => __( 'Header Top Border Thickness', 'my_textdomain' ),
    'section'     => 'header_section',
    'default'     => '',
    'priority'    => 4,
    'output' => '#header_top',
) );

Kirki::add_field( 'header_top_border_color', array(
    'type'        => 'palette',
    'settings'    => 'header_top_border_color',
    'label'       => __( 'Header Top Border Color', 'my_textdomain' ),
    'description'       => __( 'Select your color palette under General > Color Palette, the refresh the page', 'my_textdomain' ),
    'section'     => 'header_section',
    'default'     => 'color_one',
    'priority'    => 5,
    'required'	  => array(array(
	    'setting'  => 'header_top_border_width',
		'operator' => '!=',
		'value'    => '0px',
    )),
    'choices'     => array(
        'color_one' => array(
            get_theme_mod( 'color_one', '#ef5022'),
        ),
        'color_two' => array(
            get_theme_mod( 'color_two', '#71be44'),
        ),
        'color_three' => array(
            get_theme_mod( 'color_three', '#2eb6c4'),
        ),
        'color_four' => array(
            get_theme_mod( 'color_four', '#555555'),
        ),
        'color_five' => array(
            get_theme_mod( 'color_five', '#8f52a0'),
        ),
        
    ),
) );



Kirki::add_field( 'header_top_left', array(
    'type'        => 'switch',
    'settings'    => 'header_top_left',
    'label'       => __( 'Header Top Left', 'my_textdomain' ),
    'description'  => __( 'Add elements through the Widget panel', 'my_textdomain' ),
    'section'     => 'header_section',
    'default'     => false,
    'priority'    => 6,
) );
Kirki::add_field( 'header_top_right', array(
    'type'        => 'switch',
    'settings'    => 'header_top_right',
    'label'       => __( 'Header Top Right', 'my_textdomain' ),
    'description'  => __( 'Add elements through the Widget panel', 'my_textdomain' ),
    'section'     => 'header_section',
    'default'     => false,
    'priority'    => 7,
) );
Kirki::add_field( 'header_top_background_color', array(
	'type'        => 'color',
	'settings'    => 'header_top_background_color',
	'label'       => __( 'Header Top Background Color', 'my_textdomain' ),
	'section'     => 'header_section',
	'default'     => '#f8f8f8',
	'priority'    => 7,
	'alpha'       => true,
	'required'	  => array(
		array(
		    'setting'  => 'header_top_left',
			'operator' => '==',
			'value'    => true,
	    )),
) );



Kirki::add_field( 'header_center_left_on', array(
    'type'        => 'switch',
    'settings'    => 'header_center_left_on',
    'label'       => __( 'Header Center Left', 'my_textdomain' ),
    'description'  => __( 'Add elements through the Widget panel', 'my_textdomain' ),
    'section'     => 'header_section',
    'default'     => false,
    'priority'    => 8,
) );
Kirki::add_field( 'header_center_right_on', array(
    'type'        => 'switch',
    'settings'    => 'header_center_right_on',
    'label'       => __( 'Header Center Right', 'my_textdomain' ),
    'description'  => __( 'Add elements through the Widget panel', 'my_textdomain' ),
    'section'     => 'header_section',
    'default'     => false,
    'priority'    => 8,
) );

Kirki::add_field( 'header_bottom_on', array(
    'type'        => 'switch',
    'settings'    => 'header_bottom_on',
    'label'       => __( 'Header Bottom', 'my_textdomain' ),
    'description'  => __( 'Add elements through the Widget panel', 'my_textdomain' ),
    'section'     => 'header_section',
    'default'     => false,
    'priority'    => 8,
) );
	?>