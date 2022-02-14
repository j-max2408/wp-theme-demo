<?php

function simplenews_enqueue_styles(){



    wp_enqueue_style('lato', 'https://fonts.googleapis.com/css2?family=Lato&display=swap');

    

    wp_enqueue_style('merrifont', 'https://fonts.googleapis.com/css2?family=Merriweather&display=swap');

    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/styles/main.css', array('lato', 'merrifont'));

}

add_action( 'wp_enqueue_scripts' , 'simplenews_enqueue_styles');



function simplenews_add_theme_support(){

    add_theme_support( 'post-thumbnails' );
    add_theme_support('title-tag');


}

add_action('after_setup_theme' , 'simplenews_add_theme_support');


function simplenews_register_menu(){
    register_nav_menus(array(
        'main-menu' => __('menu principal')
    ));
}

add_action('after_setup_theme', 'simplenews_register_menu');


function simplenews_widgets_init($id){
    register_sidebar(array(
        'name' => 'Widget 1 ',
        'id' => 'widget-1',
        'description' => 'Widget affiché en haut du sidebar',
        'before_widget' => '<div class="side-widget">',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'name' => 'Widget 2 ',
        'id' => 'widget-2',
        'description' => 'Widget affiché en bas du sidebar',
        'before_widget' => '<div class="side-widget">',
        'after_widget' => '</div>'
    ));
}

add_action('widgets_init', 'simplenews_widgets_init');