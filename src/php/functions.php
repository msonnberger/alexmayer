<?php

function add_theme_scripts() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), null, true);
}

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');
add_action('wp_enqueue_scripts', 'add_theme_scripts');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
