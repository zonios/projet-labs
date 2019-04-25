<?php
  function ajout_css_js(){
    wp_enqueue_style('googleapis',"https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700");
    wp_enqueue_style('bootstrapmin', get_template_directory_uri() . "/css/bootstrap.min.css");
    wp_enqueue_style('fontawesomemin', get_template_directory_uri() . "/css/font-awesome.min.css");
    wp_enqueue_style('flaticon', get_template_directory_uri() . "/css/flaticon.css");
    wp_enqueue_style('magnificpopup', get_template_directory_uri() . "/css/magnific-popup.css");
    wp_enqueue_style('owlcarousel', get_template_directory_uri() . "/css/owl.carousel.css");
    wp_enqueue_style('styleperso', get_template_directory_uri() . "/css/style.css");

    wp_enqueue_script('jqueryperso', get_template_directory_uri() . '/js/jquery-2.1.4.min.js', [], null, true);
    wp_enqueue_script('bootstrapminjs', get_template_directory_uri() . '/js/bootstrap.min.js', [],  null, true);
    wp_enqueue_script('magnificpopupjs', get_template_directory_uri() . '/js/magnific-popup.min.js', [],  null, true);
    wp_enqueue_script('owlcarousel', get_template_directory_uri() . '/js/owl.carousel.min.js', null, [], true);
    wp_enqueue_script('circleprogress', get_template_directory_uri() . '/js/circle-progress.min.js', [], null, true);
    wp_enqueue_script('mapapis',"https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo", [], null, true);
    wp_enqueue_script('map', get_template_directory_uri() . '/js/map.js', [], null, true);
    wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/main.js', [], null, true);
    
  }

  add_action('wp_enqueue_scripts','ajout_css_js');

  function ajout_css_backend(){
    wp_enqueue_style('flaticonn', get_template_directory_uri() . "/css/flaticon.css");
  }

  add_action('admin_enqueue_scripts','ajout_css_backend');
?>