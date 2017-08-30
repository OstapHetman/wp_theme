<?php
// register Nav Walker
require_once('wp-bootstrap-navwalker.php');

// Theme Support
function wpb_theme_setup() {
    // Nav Menu
    register_nav_menus(array (
        'primary' => _('Primary Menu')
    ));
}
add_action('after_setup_theme', 'wpb_theme_setup');
