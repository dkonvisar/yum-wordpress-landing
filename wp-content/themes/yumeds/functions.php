<?php
/**
 * Functions
 */

// Includes
include_once get_template_directory() . '/inc/svg-support.php';
include_once get_template_directory() . '/inc/helpers.php';

// Tagline from admin settings
add_theme_support('title-tag');

// Custom Logo
add_theme_support('custom-logo', array(
    'height' => '150',
    'flex-height' => true,
    'flex-width' => true,
));

// Register Navigation Menu
register_nav_menus(array(
    'header-menu-home' => 'Home Header Menu',
    'header-menu-pages' => 'Pages Header Menu',
    'footer-menu' => 'Footer Menu'
));

// Enqueue styles & scripts
add_action('wp_enqueue_scripts', function () {
    if (!is_admin()) {
        wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css');
        wp_enqueue_script('jquery');
        wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', '', '', true);
    }
});

// ACF Options Page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

if (!is_admin()) {
    // Replace @year with current year
    add_filter('acf/load_value/name=copyright', function ($value) {
        return str_replace('@year', date('Y'), $value);
    });
}

// Disable Gutenberg
add_filter('use_block_editor_for_post_type', '__return_false');

// Remove paragraphs from CF7 inputs
add_filter('wpcf7_autop_or_not', '__return_false');
