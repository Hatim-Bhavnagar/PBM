<?php

function dubai_building_materials_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'dubai_building_materials_scripts');
?>
