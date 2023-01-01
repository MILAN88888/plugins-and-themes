<?php
/**
 * Function for loading stylesheet
 * 
 */
function load_stylesheet() 
{
    wp_register_style('style_bootstrap', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css',array(),1,"all");
    wp_enqueue_style('style_bootstrap');
}
add_action('wp_enqueue_scripts','load_stylesheet');
?>