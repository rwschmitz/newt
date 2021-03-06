<?php

function modify_wordpress_jquery(){
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
		wp_enqueue_script('jquery');
	}
}

add_action('init', 'modify_wordpress_jquery');

function newt_scripts() {
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
	wp_enqueue_style('bootstrap-v4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css');
	wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style('raleway-font', 'https://fonts.googleapis.com/css?family=Raleway');
	wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js');
	wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js');
	wp_enqueue_script('scroll', get_template_directory_uri() . '/js/scroll.js');
}

add_action( 'wp_enqueue_scripts', 'newt_scripts');


function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'remove_admin_login_header');

function newt_widgets_init() {
	register_sidebar( array(
		'name'          => __('Footer 1', 'newt'),
		'id'            => 'newt-sidebar-left-id',
		'description'   => 'Add widgets here to appear in your footer, aligned left.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',

	));

		register_sidebar( array(
		'name'          => __('Footer 2', 'newt'),
		'id'            => 'newt-sidebar-center-id',
		'description'   => 'Add widgets here to appear in your footer, aligned center.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',

	));

		register_sidebar( array(
		'name'          => __('Footer 3', 'newt'),
		'id'            => 'newt-sidebar-right-id',
		'description'   => 'Add widgets here to appear in your footer, aligned right.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',

	));
}

add_action('widgets_init', 'newt_widgets_init');