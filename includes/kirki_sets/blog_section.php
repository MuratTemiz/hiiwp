<?php
Kirki::add_section( 'blog_section', array(
    'priority'    => 6,
    'title'       => __( 'Blog', 'textdomain' ),
    'description' => __( 'Blog settings', 'textdomain' ),
) );




Kirki::add_field( 'hiiwp', array(
	'type'        => 'radio-image',
    'settings'    => 'blog_layout',
    'label'       => __( 'Blog Layout', 'my_textdomain' ),
    'section'     => 'blog_section',
    'default'     => 'full-width',
    'description' => 'Select the layout type for your blog',
    'priority'    => 1,
    'multiple'    => 1,
    'choices'     => array(
        'full-width' => get_template_directory_uri() . '/images/icons/layout-full.png',
        'boxed' => get_template_directory_uri() . '/images/icons/layout-boxed.png',
        'masonry' => get_template_directory_uri() . '/images/icons/layout-masonry.png',
    ),
) );

Kirki::add_field( 'hiiwp', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'blog_columns',
	'label'       => esc_attr__( 'Columns', 'my_textdomain' ),
	'section'     => 'blog_section',
	'default'     => '2',
	'priority'    => 1,
	'choices'     => array(
		'2'   => '2 Columns',
		'3'   => '3 Columns',
		'4'	=> '4 Columns',
	),
	'required'	=> array(
		array(
			'setting'  => 'blog_layout',
			'operator' => '!=',
			'value'    => 'full-width',
		),
	),
) );

Kirki::add_field( 'hiiwp', array(
	'type'        => 'radio-image',
    'settings'    => 'blog_image_pos',
    'label'       => __( 'Image Position', 'my_textdomain' ),
    'section'     => 'blog_section',
    'default'     => 'image-left',
    'description' => 'Select position of the image',
    'priority'    => 1,
    'multiple'    => 1,
    'choices'     => array(
        'image-left' => get_template_directory_uri() . '/images/icons/image-left.png',
        'image-above' => get_template_directory_uri() . '/images/icons/image-above.png',
    ),
) );

Kirki::add_field( 'hiiwp', array(
	'type'        => 'radio-image',
    'settings'    => 'blog_title_pos',
    'label'       => __( 'Title Position', 'my_textdomain' ),
    'section'     => 'blog_section',
    'default'     => 'title-below',
    'description' => 'Select position of the title',
    'priority'    => 1,
    'multiple'    => 1,
    'choices'     => array(
        'title-below' => get_template_directory_uri() . '/images/icons/title-below.png',
        'title-above' => get_template_directory_uri() . '/images/icons/title-above.png',
    ),
) );


Kirki::add_field( 'hiiwp', array(
    'type'        => 'switch',
    'settings'    => 'blog_title_on',
    'label'       => __( 'Show Title', 'my_textdomain' ),
    'section'     => 'blog_section',
    'default'     => true,
    'priority'    => 1,
) );

Kirki::add_field( 'hiiwp', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'blog_heading_size',
	'label'       => esc_attr__( 'Title Size', 'my_textdomain' ),
	'section'     => 'blog_section',
	'default'     => 'h2',
	'priority'    => 1,
	'choices'     => array(
		'h1'    => 'h1',
		'h2'    => 'h2',
		'h3'	=> 'h3',
		'h4'	=> 'h4',
		'h5'	=> 'h5',
		'h6'	=> 'h6',
	),
	'required'	=> array(
		array(
			'setting'  => 'blog_title_on',
			'operator' => '==',
			'value'    => true,
		),
	),
) );
Kirki::add_field( 'hiiwp', array(
    'type'        => 'switch',
    'settings'    => 'blog_cats_on',
    'label'       => __( 'Show Category', 'my_textdomain' ),
    'section'     => 'blog_section',
    'default'     => true,
    'priority'    => 1,
) );
Kirki::add_field( 'hiiwp', array(
    'type'        => 'switch',
    'settings'    => 'blog_meta_on',
    'label'       => __( 'Show Meta Information', 'my_textdomain' ),
    'section'     => 'blog_section',
    'default'     => true,
    'priority'    => 1,
) );
Kirki::add_field( 'hiiwp', array(
    'type'        => 'switch',
    'settings'    => 'blog_excerpt_on',
    'label'       => __( 'Show Excerpt', 'my_textdomain' ),
    'section'     => 'blog_section',
    'default'     => true,
    'priority'    => 1,
) );
Kirki::add_field( 'hiiwp', array(
    'type'        => 'switch',
    'settings'    => 'blog_more_on',
    'label'       => __( 'Show More Button', 'my_textdomain' ),
    'section'     => 'blog_section',
    'default'     => true,
    'priority'    => 1,
) );
	?>