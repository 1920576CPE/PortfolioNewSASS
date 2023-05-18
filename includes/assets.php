<?php 

//Loading of CSS & JS

function Portfolio_assets(){
    wp_enqueue_style('Portfolio-css', get_template_directory_uri(). '.dist/css/main.min.css',microtime());
}

add_action('wp_enqueue_scripts', 'Portfolio_assets');

