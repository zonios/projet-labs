<?php
define("PLUGIN_DIR",plugin_dir_path(__FILE__));

require_once(PLUGIN_DIR . "/Features/ServicesPost/ServicesPostType.php");
require_once(PLUGIN_DIR . "/Features/ServicesPost/Metaboxes/ServicesIconMetabox.php");
require_once(PLUGIN_DIR . "/Features/TestimonialPost/TestimonialPostType.php");
require_once(PLUGIN_DIR . "/Features/TestimonialPost/Metaboxes/TestimonialIdentityMetabox.php");
require_once(PLUGIN_DIR . "/session.php");

add_action('init', 'register_post_type_service');
add_action('add_meta_boxes_services', [ServiceIconMetabox::class,'add_service_icon_meta_box']);
add_action('save_post_services', [ServiceIconMetabox::class,'save']);
add_action('init','register_post_type_testimonial');
add_action('add_meta_boxes_testimonial', [TestimonialIdentityMetabox::class,'add_testimonial_identity_meta_box']);
add_action('save_post_testimonial', [TestimonialIdentityMetabox::class,'save']);
add_action('admin_init', 'start_session');


