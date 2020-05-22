<?php

// Load CSS and JS files
function scripts()
{
    // wp_register_style('style', get_template_directory_uri('/dist/app.css'), [], microtime(), 'all');
    wp_enqueue_style('style', get_theme_file_uri('/dist/app.css'), NULL, microtime(), 'all');
    wp_enqueue_script('app', get_theme_file_uri('/dist/app.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'scripts');


// Theme options
add_theme_support('menus');
// Add post thumbnails
add_theme_support('post-thumbnails');

// Menus
register_nav_menus(array('main-menu' => 'Main Menu', 'mobilde-menu' => 'Mobile Menu'));


// Put comment field at the bottom
function wpb_move_comment_field_to_bottom($fields)
{
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    unset($fields['cookies']);
    return $fields;
}

add_filter('comment_form_fields', 'wpb_move_comment_field_to_bottom');

// Comments ansvers form
require get_template_directory() . '/includes/comment-helper.php';


// Show only posts on search page
function SearchFilter($query)
{
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts', 'SearchFilter');
