<?php

function load_theme_scripts()
{
  wp_register_style('main', get_template_directory_uri() . '/assets/styles/build/main.min.css', array(), 1, 'all');
  wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_theme_scripts');
?>