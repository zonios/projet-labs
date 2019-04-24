<?php
function customizer_perso($wp_customize){

  $wp_customize->add_panel('panel_main_custom',[
    'title' => __('Overall customizers'),
    'description' => __('Where you can customize most little things')
  ]);

  //Main logo start
  $wp_customize->add_section('section_main_logo',[
    'panel' => 'panel_main_custom',
    'title' => __('Main logo'),
    'description' => __('Choose your logo')
  ]);

  $wp_customize->add_setting('setting_main_logo',[
    'type' => 'theme_mod'
  ]);

  $wp_customize->add_control( 
    new WP_Customize_Image_Control( $wp_customize, 'control_main_logo',
      [
        'label'      => __('Upload a logo'),
        'section'    => 'section_main_logo',
        'settings'   => 'setting_main_logo'
      ]
    )
  );
  //Main logo end

  //Big logo start
  $wp_customize->add_section('section_big_logo',[
    'panel' => 'panel_main_custom',
    'title' => __('Main logo'),
    'description' => __('Choose your logo')
  ]);

  $wp_customize->add_setting('setting_big_logo',[
    'type' => 'theme_mod'
  ]);

  $wp_customize->add_control( 
    new WP_Customize_Image_Control( $wp_customize, 'control_big_logo',
      [
        'label'      => __('Upload a logo'),
        'section'    => 'section_main_logo',
        'settings'   => 'setting_big_logo'
      ]
    )
  );
  //Big logo end

  //video home page start
  $wp_customize->add_section('section_ytb_video',[
    'panel' => 'panel_main_custom',
    'title' => __('Presentation video'),
    'description' => __('video from the main page')
  ]);

  $wp_customize->add_setting('setting_ytb_video',[
    'type' => 'theme_mod'
  ]);

  $wp_customize->add_control('control_ytb_video',[
    'type' => 'textarea',
    'description' => 'Url of the video ( should start with "https://www.youtube.com/watch?v=..." )',
    'section' => 'section_ytb_video',
    'settings' => 'setting_ytb_video'
  ]);
  //video home page end
}
add_action('customize_register', 'customizer_perso');
?>