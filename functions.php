<?php

/* stylesheets */
function load_stylesheets()
{
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

/*jquery*/
function include_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js','', 1,true);
}
add_action('wp_enqueue_scripts', 'include_jquery');

/*custom js*/
function loadjs(){
    wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', '', 1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');