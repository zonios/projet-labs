<?php

  /**
   * Ajout d'une méta box 
   *
   * @return void
   */
  function add_service_icon_meta_box(){
    add_meta_box(
      'service-icon-metabox',
      __("Attached Icon"),
      'render',
      'services'
    );
    
  }

  /**
   * Fonction pour rendre le code html dans la metabox
   *
   * @return void
   */
  function render(){
    $data = get_post_meta(get_the_ID());
    $labs_service_icon = array_key_exists('labs_service_icon', $data) ? esc_attr($data['labs_service_icon'][0]) : '';
    include(PLUGIN_DIR . "Features/ServicesPost/Views/iconMetaboxView.php");
  }


  function save_service_icon($post_id){
    if (count($_POST) != 0) {
      $labs_service_icon = sanitize_text_field($_POST['labs_service_icon']);
      update_post_meta($post_id, 'labs_service_icon', $labs_service_icon);
    }
  }