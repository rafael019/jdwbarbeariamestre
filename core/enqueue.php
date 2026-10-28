<?php
if (!function_exists('jdw_load_assets')) :
    function jdw_load_assets()
    {
        wp_enqueue_style('style', INCLUDE_PATH . '/dist/css/style.css', '', THEME_VERSION, 'all');
        wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/main.min.js', array('jquery'), THEME_VERSION, true);
    }
    add_action('wp_enqueue_scripts', 'jdw_load_assets');
endif;
