<?php
// register Nav Walker
require_once('wp-bootstrap-navwalker.php');

// Theme Support
function wpb_theme_setup() {
    add_theme_support('post-thumbnails');
    // Nav Menu
    register_nav_menus(array (
        'primary' => _('Primary Menu')
    ));
}
add_action('after_setup_theme', 'wpb_theme_setup');

// Excerpt Length Control

function set_excerpt_length() {
    return 40;
}

add_filter('excerpt_length', 'set_excerpt_length');
