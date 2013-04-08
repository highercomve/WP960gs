<?php
    
    add_action( 'wp_enqueue_scripts', 'prefix_add_my_stylesheet' );

    function prefix_add_my_stylesheet() {
        
        wp_register_style( 'globals-style', get_template_directory_uri().'/css/globals.css' );
        wp_enqueue_style( 'globals-style' );
    
    }
?>