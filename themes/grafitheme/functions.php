<?php

function grafitheme_supports() {
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_theme_support("menus");

    register_nav_menu("header", "En tête du menu");
    register_nav_menu("footer", "Pied de page");
}

add_action("after_setup_theme", "grafitheme_supports");

function grafitheme_register_assets() {
    wp_register_style("bootstrap", "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css", []);
    wp_register_script("bootstrap", "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js", ["popper", "jquery"], false, true);
    wp_register_script("popper", "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js", [], false, true);

    wp_deregister_script("jquery");
    wp_register_script("jquery", "https://code.jquery.com/jquery-3.2.1.slim.min.js", [], false, true);

    wp_enqueue_style("bootstrap");
    wp_enqueue_script("bootstrap");
}

add_action("wp_enqueue_scripts", "grafitheme_register_assets");

function grafitheme_title_separator() {
    return "|";
}

add_filter("document_title_separator", "grafitheme_title_separator");

function grafitheme_document_title_parts($title) {
    unset($title["tagline"]);

    return $title;
}

add_filter("document_title_parts", "grafitheme_document_title_parts");

function grafitheme_menu_class($classes) {
    $classes[] = "nav-item";

    return $classes;
}

add_filter("nav_menu_css_class", "grafitheme_menu_class");

function grafitheme_menu_link_class($attrs) {
    $attrs["class"] = "nav-link";

    return $attrs;
}

add_filter("nav_menu_link_attributes", "grafitheme_menu_link_class");