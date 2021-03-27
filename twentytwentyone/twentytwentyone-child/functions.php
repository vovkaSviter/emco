<?php
/* enqueue script for parent theme stylesheeet */        
function childtheme_parent_styles() {
 
 // enqueue style
 wp_enqueue_style( 'style', get_template_directory_uri() );                       
}
add_action( 'wp_enqueue_scripts', 'childtheme_parent_styles');