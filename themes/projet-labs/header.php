<!DOCTYPE html>
<html lang="en">

<head>
  <title>Labs - Design Studio</title>
  <meta charset="UTF-8">
  <meta name="description" content="Labs - Design Studio">
  <meta name="keywords" content="lab, onepage, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<?php wp_head() ?>

<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader">
      <img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="">
      <h2>Loading.....</h2>
    </div>
  </div>


  <!-- Header section -->
  <header class="header-section">
    <div class="logo">
      <img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
      <?php
        wp_nav_menu([
          'menu_class' => 'menu-list',
          'theme_location' => 'main-menu',
          'container' => ''
        ]);
      ?>
    </nav>
  </header>
  <!-- Header section end -->