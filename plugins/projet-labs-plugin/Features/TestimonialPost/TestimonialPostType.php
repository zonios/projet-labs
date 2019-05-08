<?php

function register_post_type_testimonial(){

  $labels = [
    'name'                => __( 'testimonials'),
    'singular_name'       => __( 'testimonial'),
    'menu_name'           => __( 'testimonials'),
    'all_items'           => __( 'All testimonials' ),
    'view_item'           => __( 'View testimonial' ),
    'add_new_item'        => __( 'Add New testimonial' ),
    'add_new'             => __( 'Add New' ),
    'edit_item'           => __( 'Edit testimonial' ),
    'update_item'         => __( 'Update testimonial' ),
    'search_items'        => __( 'Search testimonial' ),
  ];

  // Set other options for Custom Post Type

  $args = [
    'label'               => __( 'testimonials' ),
    'description'         => __( 'Collected testimonials' ),
    'labels'              => $labels,
    'supports'            => ['title', 'editor', 'thumbnail'],
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => false,
    'show_in_admin_bar'   => true,
    'menu_position'       => 26,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
    'rewrite' => ['slug' => 'testimonial'],
    'menu_icon' => 'dashicons-format-quote'
  ];

  // Registering your Custom Post Type
  register_post_type( 'testimonial', $args );
}