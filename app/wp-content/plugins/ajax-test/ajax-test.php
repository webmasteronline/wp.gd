<?php
/*
 * Plugin Name: Test Ajax запросов
 */

add_action('wp_ajax_hello', 'say_hello');
add_action('wp_ajax_nopriv_hello', 'say_hello');

function say_hello(){
    $name = empty( $_POST['name'] ) ? 'пользователь' : esc_attr( $_POST['name'] );
    echo "Привет, $name!";
    wp_die();
}


