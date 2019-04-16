<?php
  function ajout_css_js(){
      wp_enqueue_style('googleapis',"https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700");
      wp_enqueue_style('bootstrap', get_template_directory_uri() . "/css/bootstrap.min.css");
      wp_enqueue_style('fontawesome', get_template_directory_uri() . "/css/font-awesome.min.css");
      wp_enqueue_style('flaticon', get_template_directory_uri() . "/css/flaticon.css");
      wp_enqueue_style('magnificpopup', get_template_directory_uri() . "/css/magnific-popup.css");
      wp_enqueue_style('owl', get_template_directory_uri() . "/css/owl.carousel.css");
      wp_enqueue_style('style', get_template_directory_uri() . "/css/style.css");
      
      wp_enqueue_script('jqueryperso', get_template_directory_uri() . '/js/jquery-2.1.4.min.js', null, true);
      wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js',  null, true);
      wp_enqueue_script('magnificpopupjs', get_template_directory_uri() . '/js/magnific-popup.min.js',  null, true);
      wp_enqueue_script('owljs', get_template_directory_uri() . '/js/owl.carousel.min.js', [], null, true);
      wp_enqueue_script('circleprogress', get_template_directory_uri() . '/js/circle-progress.min.js', [], null, true);
      wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/main.js', [], null, true);
    }
  add_action('wp_enqueue_scripts','ajout_css_js');
  
?>