<?php
  define('INCLUDE_DIR', get_template_directory() . "/includes");
  
  add_theme_support( 'post-thumbnails' ); 
  require_once(INCLUDE_DIR . "/enqueue-scripts.php");
  require_once(INCLUDE_DIR . "/menu.php");
  require_once(INCLUDE_DIR . "/customize.php");

  function mailtrap($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '4e7862ff082087';
    $phpmailer->Password = '709eae74a7b732';
  }
  
  add_action('phpmailer_init', 'mailtrap');