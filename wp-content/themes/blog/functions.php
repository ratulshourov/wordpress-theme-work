<?php
function add_theme_scripts() {
   

	wp_enqueue_style('style', get_stylesheet_uri() ,[],filemtime(get_template_directory()));

	//wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all' );

	wp_enqueue_script( 'asset-script', get_template_directory_uri() . '/assets/js/main.js', array(),filemtime(get_template_directory()) );


    wp_register_style('custom-css',get_template_directory().'/css/custom.css',[],filemtime(get_template_directory()));
    wp_enqueue_style('custom-css');

    wp_register_script('custom-js',get_template_directory().'/js/main.js',[],filemtime(get_template_directory()));
	wp_enqueue_script('custom-js');
    // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
?>