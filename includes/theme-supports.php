<?php

function profile_support(){

    register_nav_menus(
        array(
            'header_menu' => __('header menu','text_domain')
        )

        
        );
        add_theme_support('menus');
        add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','profile_support');