<?php
if (!defined('ABSPATH')) {
    exit;
}

function pulsesync_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('responsive-embeds');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'pulsesync'),
    ));
}
add_action('after_setup_theme', 'pulsesync_theme_setup');

function pulsesync_primary_menu_fallback() {
    $items = array(
        'Home' => '#home',
        'Submit Ticket' => '#submit-ticket',
        'Knowledge Base' => '#knowledge-base',
        'Team' => '#team',
        'Escalation' => '#escalation-policy',
        'Dashboard' => '#dashboard',
        'Change Request' => '#change-request',
    );
    echo '<ul class="navbar-nav ms-auto align-items-lg-center">';
    foreach ($items as $label => $anchor) {
        echo '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/' . $anchor)) . '">' . esc_html($label) . '</a></li>';
    }
    echo '</ul>';
}

function pulsesync_nav_link_class($attributes, $item, $args) {
    if (isset($args->theme_location) && 'primary' === $args->theme_location) {
        $attributes['class'] = 'nav-link';
    }
    return $attributes;
}
add_filter('nav_menu_link_attributes', 'pulsesync_nav_link_class', 10, 3);

function pulsesync_nav_item_class($classes, $item, $args) {
    if (isset($args->theme_location) && 'primary' === $args->theme_location) {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'pulsesync_nav_item_class', 10, 3);

function pulsesync_enqueue_assets() {
    wp_enqueue_style(
        'pulsesync-bootstrap',
        get_theme_file_uri('assets/bootstrap.min.css'),
        array(),
        '5.3.3'
    );
    wp_enqueue_style(
        'pulsesync-bootstrap-icons',
        get_theme_file_uri('assets/bootstrap-icons.min.css'),
        array(),
        '1.11.3'
    );
    wp_enqueue_style(
        'pulsesync-theme',
        get_stylesheet_uri(),
        array('pulsesync-bootstrap', 'pulsesync-bootstrap-icons'),
        '1.0.0'
    );
    wp_enqueue_style(
        'pulsesync-site',
        get_theme_file_uri('assets/pulsesync.css'),
        array('pulsesync-theme'),
        '1.0.0'
    );
    wp_enqueue_script(
        'pulsesync-bootstrap',
        get_theme_file_uri('assets/bootstrap.bundle.min.js'),
        array(),
        '5.3.3',
        true
    );
    wp_enqueue_script(
        'pulsesync-app',
        get_theme_file_uri('assets/pulsesync.js'),
        array('pulsesync-bootstrap'),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'pulsesync_enqueue_assets');
