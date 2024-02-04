<?php
function loading_my_style_and_my_script(){
    wp_enqueue_style('my_main_css',get_template_directory_uri().'/style.css','','1.0');
}

add_action('wp_enqueue_scripts','loading_my_style_and_my_script',10);

//Ajouter un menu
register_nav_menus(
    [
        'primary' => 'Menu principal',
        'mobile' => 'Menu Mobile',
        'social' => 'Menu Social'
    ]
    );