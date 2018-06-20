<?php
/*
Plugin Name: Adventures
Description: Declares a plugin that will create a custom post type displaying Destination Dupont adventures.
Version: 2.0
Author: Jer Fink
Author: URI: http://highpointconcepts.com
License: GPLv2
*/


// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

add_action('init', 'create_adventures');

function create_adventures() {
    register_post_type( 'adventures',
        array(
            'labels' => array(
                'name' => 'Adventures',
                'singular_name' => 'Adventure',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Adventure',
                'edit' => 'Edit',
                'edit_item' => 'Edit Adventure',
                'new_item' => 'New Adventure',
                'view' => 'View',
                'view_item' => 'View Adventure',
                'search_items' => 'Search Adventures',
                'not_found' => 'No Adventures found',
                'not_found_in_trash' => 'No Adventures found in Trash',
                'parent' => 'Parent Adventure'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'capability_type' => 'post',
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail' ),
            'taxonomies' => array( 'category', 'terms' ),
            'menu_icon' => plugins_url( 'images/dd_a_logo.png', __FILE__ ),
            'has_archive' => true
        )
    );
}

?>