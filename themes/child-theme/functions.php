<?php

add_action("wp_enqueue_scripts", function() {
    wp_enqueue_style("child-theme", get_stylesheet_uri());
});

add_action("after_setup_theme", function() {
    load_child_theme_textdomain("child-theme", get_stylesheet_directory() . "/languages");
});