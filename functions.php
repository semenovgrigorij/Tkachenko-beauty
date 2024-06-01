<?php

// Подключение jQuery
function enqueue_jquery() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//code.jquery.com/jquery-3.6.1.min.js', array(), '3.6.1', true);
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'enqueue_jquery');


// Подключение стилей и скриптов 

 function custom_scripts() {

    // Подключение стилей
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all');

    // Подключение скриптов
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);

     // Подключение slick.min.js
    wp_enqueue_script('slick-script', get_stylesheet_directory_uri() . '/js/slick.min.js', array('jquery'), '1.0', true);
    
}
add_action('wp_enqueue_scripts', 'custom_scripts'); 
