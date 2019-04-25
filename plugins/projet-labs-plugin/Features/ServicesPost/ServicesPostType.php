<?php

function register_post_type_service(){

  $labels = [
    'name'                => __( 'Services'),
    'singular_name'       => __( 'Service'),
    'menu_name'           => __( 'Services'),
    'all_items'           => __( 'All Services' ),
    'view_item'           => __( 'View Service' ),
    'add_new_item'        => __( 'Add New Service' ),
    'add_new'             => __( 'Add New' ),
    'edit_item'           => __( 'Edit Service' ),
    'update_item'         => __( 'Update Service' ),
    'search_items'        => __( 'Search Service' ),
  ];
 
// Set other options for Custom Post Type
 
  $args = [
    'label'               => __( 'services' ),
    'description'         => __( 'Offered services' ),
    'labels'              => $labels,
    'supports'            => [ 'title' , 'editor'],
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
    'rewrite' => ['slug' => 'services'],
    'menu_icon' => 'dashicons-book'
  ];
 
  // Registering your Custom Post Type
  register_post_type( 'services', $args );
}