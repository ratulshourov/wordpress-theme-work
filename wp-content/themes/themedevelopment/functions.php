<?php 

add_theme_support('title-tag');

// custom css and js


function add_css_js_calling() {
wp_enqueue_style('main-style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','add_css_js_calling');
?>