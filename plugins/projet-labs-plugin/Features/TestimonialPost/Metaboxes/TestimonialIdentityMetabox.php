<?php

class TestimonialIdentityMetabox{
  
  public static function add_testimonial_identity_meta_box(){
    add_meta_box(
      'testimonial-identity-metabox',
      __("Testimonial identity"),
      [self::class, 'render'],
      'testimonial'
    );
    
  }

  public static function render(){
    $data = get_post_meta(get_the_ID());
    $labs_testimonial_name = array_key_exists('labs_testimonial_name', $data) ? esc_attr($data['labs_testimonial_name'][0]) : '';
    $labs_testimonial_occupation = array_key_exists('labs_testimonial_occupation', $data) ? esc_attr($data['labs_testimonial_occupation'][0]) : '';
    include(PLUGIN_DIR . "Features/TestimonialPost/Views/IdentityMetaboxView.php");
  }
  
  public static function save($post_id){
    if (count($_POST) != 0) {
      $labs_testimonial_name = sanitize_text_field($_POST['labs_testimonial_name']);
      update_post_meta($post_id, 'labs_testimonial_name', $labs_testimonial_name);
      
      $labs_testimonial_occupation = sanitize_text_field($_POST['labs_testimonial_occupation']);
      update_post_meta($post_id, 'labs_testimonial_occupation', $labs_testimonial_occupation);
      
    }
  }

}