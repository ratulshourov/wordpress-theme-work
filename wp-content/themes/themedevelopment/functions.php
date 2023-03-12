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

function theme_customization($wp_customize) {
    $wp_customize->add_section('ratul_theme_area',array(
        'title'=>__('Header Area','Ratul'),
        'description'=>'If you are interested change image'
    ));
    $wp_customize->add_setting('ratul_theme_logo',array(
        'default'=>get_bloginfo('template_directory').'/img/logo.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'ratul_theme_logo',array(
        'label'=>'Logo Upload',
        'description'=>'If you are interested to change or update logo upload here!',
        'setting' =>'ratul_theme_logo' ,
        'section' =>'ratul_theme_area'
    )));

    //Menu Position 

    $wp_customize->add_section('menu_position',array(
        'title'=>__('Menu Position Option','Ratul'),
        'description'=>'If you are interested menu position'
    ));
    $wp_customize->add_setting('menu_position',array(
        'default'=>'right_menu',
    ));

    $wp_customize->add_control('menu_position',array(
        'label'=>'Menu Position',
        'description'=>'Select Your Menu Position',
        'setting'=>'menu_position',
        'section'=>'menu_position',
        'type'=>'radio',
        'choices'=>array(
            'left_menu'=>'Left Menu',
            'right_menu'=>'Right Menu',
            'center_menu'=>'Center Menu',
        )
    ));

}
add_action('customize_register','theme_customization');

register_nav_menu('nav-menu', 'Ratul')





?>



