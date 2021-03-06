<?php
Kirki::add_panel( 'typography_panel', array(
    'priority'    => 6,
    'title'       => __( 'Typography', 'textdomain' ),
    'description' => __( 'Typography settings', 'textdomain' ),
) );
Kirki::add_section( 'typography_headings_section', array(
    'priority'    => 6,
    'title'       => __( 'Headings', 'textdomain' ),
    'description' => __( 'Typography settings', 'textdomain' ),
    'panel'		 => 'typography_panel',
) );
Kirki::add_section( 'typography_text_section', array(
    'priority'    => 6,
    'title'       => __( 'Custom Formats', 'textdomain' ),
    'description' => __( 'Links, Icons, and Custom Formats', 'textdomain' ),
    'panel'		 => 'typography_panel',
) );

Kirki::add_section( 'typography_footer_section', array(
    'priority'    => 6,
    'title'       => __( 'Footer', 'textdomain' ),
    'description' => __( 'Footer title and text properties', 'textdomain' ),
    'panel'		 => 'typography_panel',
) );


$default_h1 = get_theme_mod( 'heading_font' );
$default_h1['font-size'] = '2em';
$default_h1['text-transform'] = 'none';
$default_h1['line-height'] = '1.5';
$default_h1['font-size'] = '2em';

Kirki::add_field( 'hiiwp', array(
    'type'        => 'typography',
    'settings'    => 'typography_h1_font',
    'label'       => esc_attr__( 'H1 Style', 'kirki' ),
    'description' => __( 'Define styles for H1 heading' ),
    'section'     => 'typography_headings_section',
    'default'     => $default_h1,
    'priority'    => 1,
) );

Kirki::add_field( 'hiiwp', array(
    'type'        => 'typography',
    'settings'    => 'typography_h2_font',
    'label'       => esc_attr__( 'H2 Style', 'kirki' ),
    'description' => __( 'Define styles for H2 heading' ),
    'section'     => 'typography_headings_section',
    'default'     => array(
        'font-family'    => ' ',
        'variant'        => ' ',
        'font-size'      => ' ',
        'line-height'    => ' ',
        'letter-spacing' => '0px',
        'text-transform' => ' ',
        'color'          => ' ',
    ),
    'priority'    => 1,
) );

Kirki::add_field( 'hiiwp', array(
    'type'        => 'typography',
    'settings'    => 'typography_h3_font',
    'label'       => esc_attr__( 'H3 Style', 'kirki' ),
    'description' => __( 'Define styles for H3 heading' ),
    'section'     => 'typography_headings_section',
    'default'     => array(
        'font-family'    => ' ',
        'variant'        => ' ',
        'font-size'      => ' ',
        'line-height'    => ' ',
        'letter-spacing' => '0px',
        'text-transform' => ' ',
        'color'          => ' ',
    ),
    'priority'    => 1,
 
) );

Kirki::add_field( 'hiiwp', array(
    'type'        => 'typography',
    'settings'    => 'typography_h4_font',
    'label'       => esc_attr__( 'H4 Style', 'kirki' ),
    'description' => __( 'Define styles for H4 heading' ),
    'section'     => 'typography_headings_section',
    'default'     => array(
        'font-family'    => ' ',
        'variant'        => ' ',
        'font-size'      => ' ',
        'line-height'    => ' ',
        'letter-spacing' => '0px',
        'text-transform' => ' ',
        'color'          => ' ',
    ),
    'priority'    => 1,
) );

Kirki::add_field( 'hiiwp', array(
    'type'        => 'typography',
    'settings'    => 'typography_h5_font',
    'label'       => esc_attr__( 'H5 Style', 'kirki' ),
    'description' => __( 'Define styles for H5 heading' ),
    'section'     => 'typography_headings_section',
    'default'     => array(
        'font-family'    => ' ',
        'variant'        => ' ',
        'font-size'      => ' ',
        'line-height'    => ' ',
        'letter-spacing' => '0px',
        'text-transform' => ' ',
        'color'          => ' ',
    ),
    'priority'    => 1,
) );

Kirki::add_field( 'hiiwp', array(
    'type'        => 'typography',
    'settings'    => 'typography_h6_font',
    'label'       => esc_attr__( 'H6 Style', 'kirki' ),
    'description' => __( 'Define styles for H1 heading' ),
    'section'     => 'typography_headings_section',
    'default'     => array(
        'font-family'    => ' ',
        'variant'        => ' ',
        'font-size'      => ' ',
        'line-height'    => ' ',
        'letter-spacing' => '0px',
        'text-transform' => ' ',
        'color'          => ' ',
    ),
    'priority'    => 1,
) );

Kirki::add_field( 'hiiwp', array(
	'type'        => 'color',
	'settings'    => 'typography_link_color',
	'label'       => __( 'Link Color (a)', 'my_textdomain' ),
	'section'     => 'typography_text_section',
	'default'     => get_theme_mod( 'color_one', '#ef5022'),
	'priority'    => 1,
) );

Kirki::add_field( 'hiiwp', array(
	'type'        => 'code',
	'settings'    => 'typography_link_custom_css',
	'label'       => __( 'Link Custom CSS (a)', 'my_textdomain' ),
	'section'     => 'typography_text_section',
	'default'     => '{
	text-decoration:none;
}',
	'priority'    => 1,
	'choices'     => array(
		'language' => 'css',
		'theme'    => 'monokai',
		'height'   => '100',
	),
) );

Kirki::add_field( 'hiiwp', array(
	'type'        => 'code',
	'settings'    => 'typography_icon_custom_css',
	'label'       => __( 'Icon Custom CSS (.fa)', 'my_textdomain' ),
	'description' => __( 'Custom style all font-awesome icons', 'textdomain' ),
	'section'     => 'typography_text_section',
	'default'     => '{
	background: '.get_theme_mod( 'color_one', '#ef5022').';
	display: inline-block;
	width: 1.6em;
	text-align: center;
	color: white;
	line-height: 1.6em;
	border-radius: 2em;
}',
	'priority'    => 1,
	'choices'     => array(
		'language' => 'css',
		'theme'    => 'monokai',
		'height'   => '100',
	),
) );


Kirki::add_field( 'hiiwp', array(
	'type'        => 'code',
	'settings'    => 'typography_button_custom_css',
	'label'       => __( 'Button Custom CSS (.button)', 'my_textdomain' ),
	'description' => __( 'Custom style for standard buttons across the site', 'textdomain' ),
	'section'     => 'typography_text_section',
	'default'     => '{
	border:2px solid '.get_theme_mod( 'color_one', '#ef5022').';
	text-transform: uppercase;
	color: '.get_theme_mod( 'color_one', '#ef5022').';
	padding: 0.5em 1em;
	margin: 1em 0;
	text-decoration: none;
	border-radius: 6px;
	display: inline-block;
}',
	'priority'    => 1,
	'choices'     => array(
		'language' => 'css',
		'theme'    => 'monokai',
		'height'   => '100',
	),
) );


Kirki::add_field( 'hiiwp', array(
	'type'        => 'code',
	'settings'    => 'custom_format_1',
	'label'       => __( 'Custom Format 1 (.custom_format_1)', 'my_textdomain' ),
	'description' => __( 'Custom format that can be used in the visual editor', 'textdomain' ),
	'section'     => 'typography_text_section',
	'default'     => '{
}',
	'priority'    => 1,
	'choices'     => array(
		'language' => 'css',
		'theme'    => 'monokai',
		'height'   => '100',
	),
	'output' => '.custom_format_1',
) );
Kirki::add_field( 'hiiwp', array(
	'type'        => 'code',
	'settings'    => 'custom_format_2',
	'label'       => __( 'Custom Format 2 (.custom_format_2)', 'my_textdomain' ),
	'description' => __( 'Custom format that can be used in the visual editor', 'textdomain' ),
	'section'     => 'typography_text_section',
	'default'     => '{
}',
	'priority'    => 1,
	'choices'     => array(
		'language' => 'css',
		'theme'    => 'monokai',
		'height'   => '100',
	),
	'output' => '.custom_format_2',
) );
Kirki::add_field( 'hiiwp', array(
	'type'        => 'code',
	'settings'    => 'custom_format_3',
	'label'       => __( 'Custom Format 3 (.custom_format_3)', 'my_textdomain' ),
	'description' => __( 'Custom format that can be used in the visual editor', 'textdomain' ),
	'section'     => 'typography_text_section',
	'default'     => '{
}',
	'priority'    => 1,
	'choices'     => array(
		'language' => 'css',
		'theme'    => 'monokai',
		'height'   => '100',
	),
	'output' => '.custom_format_3',
) );




Kirki::add_field( 'hiiwp', array(
    'type'        => 'typography',
    'settings'    => 'typography_footer_headings_font',
    'label'       => esc_attr__( 'Footer Headings Font', 'kirki' ),
    'section'     => 'typography_footer_section',
    'default'     => array(
        'font-family'    => ' ',
        'variant'        => ' ',
        'font-size'      => ' ',
        'line-height'    => ' ',
        'letter-spacing' => ' ',
        'text-transform' => ' ',
        'color'          => ' ',
    ),
    'priority'    => 1,
) );

Kirki::add_field( 'hiiwp', array(
    'type'        => 'typography',
    'settings'    => 'typography_footer_text_font',
    'label'       => esc_attr__( 'Footer Text Font', 'kirki' ),
    'section'     => 'typography_footer_section',
    'default'     => array(
        'font-family'    => ' ',
        'variant'        => ' ',
        'font-size'      => ' ',
        'line-height'    => ' ',
        'letter-spacing' => ' ',
        'text-transform' => ' ',
        'color'          => ' ',
    ),
    'priority'    => 1,
) );

Kirki::add_field( 'hiiwp', array(
    'type'        => 'typography',
    'settings'    => 'typography_footer_links_font',
    'label'       => esc_attr__( 'Footer Links Font', 'kirki' ),
    'section'     => 'typography_footer_section',
    'default'     => array(
        'font-family'    => ' ',
        'variant'        => ' ',
        'font-size'      => ' ',
        'line-height'    => ' ',
        'letter-spacing' => ' ',
        'text-transform' => ' ',
        'color'          => ' ',
    ),
    'priority'    => 1,
) );

	?>