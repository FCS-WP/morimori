<?php
add_action('wp_enqueue_scripts', 'shin_scripts');

function shin_scripts()
{
    $version = time();

    wp_enqueue_style('main-style-css', THEME_URL . '-child' . '/assets/dist/css/main.min.css', array(), $version, 'all');

    wp_enqueue_script('main-scripts-js', THEME_URL . '-child' . '/assets/dist/js/main.min.js', array('jquery'), $version, true);
}


// Show Pop Up only in homepage
add_filter('widget_display_callback', function($instance, $widget, $args) {
    if (!is_front_page() && !is_home() && $widget->id_base == "apus_popup_newsletter") {
        return false; // Hide widget on non-homepage
    }
    return $instance;
}, 10, 3);