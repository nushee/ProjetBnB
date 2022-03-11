<?php
add_theme_support('title-tag');

add_action('wp_enqueue_scripts','footer');

function footer ()
{
    wp_enqueue_style('maFeuilleCSSFooter',get_stylesheet_directory_uri()."footer.css");
}
?>