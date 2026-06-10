<?php
/**
 * Custom Post Types and Taxonomies
 *
 * @package PayPerGrowth
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Custom Post Types
 */
function paypergrowth_register_post_types() {

    // Case Studies
    register_post_type('case_study', array(
        'labels' => array(
            'name'               => __('Case Studies', 'paypergrowth'),
            'singular_name'      => __('Case Study', 'paypergrowth'),
            'add_new'            => __('Add New Case Study', 'paypergrowth'),
            'add_new_item'       => __('Add New Case Study', 'paypergrowth'),
            'edit_item'          => __('Edit Case Study', 'paypergrowth'),
            'view_item'          => __('View Case Study', 'paypergrowth'),
            'search_items'       => __('Search Case Studies', 'paypergrowth'),
            'not_found'          => __('No case studies found', 'paypergrowth'),
        ),
        'public'       => true,
        'has_archive'  => true,
        'rewrite'      => array('slug' => 'case-studies'),
        'supports'     => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'menu_icon'    => 'dashicons-analytics',
        'show_in_rest' => true,
    ));

    // Services
    register_post_type('service', array(
        'labels' => array(
            'name'               => __('Services', 'paypergrowth'),
            'singular_name'      => __('Service', 'paypergrowth'),
            'add_new'            => __('Add New Service', 'paypergrowth'),
            'add_new_item'       => __('Add New Service', 'paypergrowth'),
            'edit_item'          => __('Edit Service', 'paypergrowth'),
            'view_item'          => __('View Service', 'paypergrowth'),
            'search_items'       => __('Search Services', 'paypergrowth'),
            'not_found'          => __('No services found', 'paypergrowth'),
        ),
        'public'       => true,
        'has_archive'  => true,
        'rewrite'      => array('slug' => 'services'),
        'supports'     => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes'),
        'menu_icon'    => 'dashicons-admin-tools',
        'show_in_rest' => true,
    ));

    // Testimonials
    register_post_type('testimonial', array(
        'labels' => array(
            'name'               => __('Testimonials', 'paypergrowth'),
            'singular_name'      => __('Testimonial', 'paypergrowth'),
            'add_new'            => __('Add New Testimonial', 'paypergrowth'),
            'add_new_item'       => __('Add New Testimonial', 'paypergrowth'),
            'edit_item'          => __('Edit Testimonial', 'paypergrowth'),
        ),
        'public'       => true,
        'has_archive'  => false,
        'rewrite'      => array('slug' => 'testimonials'),
        'supports'     => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'menu_icon'    => 'dashicons-format-quote',
        'show_in_rest' => true,
    ));

    // Team Members
    register_post_type('team_member', array(
        'labels' => array(
            'name'               => __('Team Members', 'paypergrowth'),
            'singular_name'      => __('Team Member', 'paypergrowth'),
            'add_new'            => __('Add New Team Member', 'paypergrowth'),
            'add_new_item'       => __('Add New Team Member', 'paypergrowth'),
            'edit_item'          => __('Edit Team Member', 'paypergrowth'),
        ),
        'public'       => true,
        'has_archive'  => false,
        'rewrite'      => array('slug' => 'team'),
        'supports'     => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
        'menu_icon'    => 'dashicons-groups',
        'show_in_rest' => true,
    ));
}
add_action('init', 'paypergrowth_register_post_types');

/**
 * Register Custom Taxonomies
 */
function paypergrowth_register_taxonomies() {

    // Service Category
    register_taxonomy('service_category', 'service', array(
        'labels' => array(
            'name'          => __('Service Categories', 'paypergrowth'),
            'singular_name' => __('Service Category', 'paypergrowth'),
        ),
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite'      => array('slug' => 'service-category'),
    ));

    // Industry (for case studies)
    register_taxonomy('industry', 'case_study', array(
        'labels' => array(
            'name'          => __('Industries', 'paypergrowth'),
            'singular_name' => __('Industry', 'paypergrowth'),
        ),
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite'      => array('slug' => 'industry'),
    ));
}
add_action('init', 'paypergrowth_register_taxonomies');

/**
 * Flush rewrite rules on theme activation
 */
function paypergrowth_rewrite_flush() {
    paypergrowth_register_post_types();
    paypergrowth_register_taxonomies();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'paypergrowth_rewrite_flush');
