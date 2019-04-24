<?php
require_once(plugin_dir_path(__FILE__) . "/Features/ServicesPost/ServicesPostType.php");
require_once(plugin_dir_path(__FILE__) . "/Features/ServicesPost/ServicesIconMetabox.php");

add_action('init', 'register_post_type_service');
add_action('add_meta_boxes_services', 'add_service_icon_meta_box');