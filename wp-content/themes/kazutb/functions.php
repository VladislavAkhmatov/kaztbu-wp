<?php
function kaztbu_assets()
{
    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('script-js', get_template_directory_uri() . '/assets/src/script.js');
}

add_action('wp_enqueue_scripts', 'kaztbu_assets');
show_admin_bar(false);


function formatting_date($date)
{
    return date('d.m.Y', strtotime($date));
}