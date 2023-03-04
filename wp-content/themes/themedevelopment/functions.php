<?php

add_theme_support('title-tag');

// custom css and js


function add_css_js_calling() {
wp_enqueue_style('main-style',get_stylesheet_uri());
wp_register_style('bootstrap',get_stylesheet_directory_uri().'/css/boostrap.css',array(),'4.0.0','all');
wp_register_style('custom',get_stylesheet_directory_uri().'/css/custom.css',array(),'1.0.0','all');
wp_enqueue_style('bootstrap');
wp_enqueue_style('custom');
//main jquery add
wp_enqueue_script('jquery');

//custom jquery add
wp_enqueue_script('custom',get_template_directory().'/js/custom.js',array(),'1.0.0',true);
}
add_action('wp_enqueue_scripts','add_css_js_calling');
?>
