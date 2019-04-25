<?php
define("PLUGIN_DIR",plugin_dir_path(__FILE__));
require_once(PLUGIN_DIR . "/Features/ServicesPost/ServicesPostType.php");
require_once(PLUGIN_DIR . "/Features/ServicesPost/ServicesIconMetabox.php");

add_action('init', 'register_post_type_service');
add_action('add_meta_boxes_services', 'add_service_icon_meta_box');
add_action('save_post_services', 'save_service_icon');