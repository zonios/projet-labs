<?php 

register_nav_menu( "main-menu", "menu principal" ); 




add_filter('nav_menu_css_class' , 'active_nav_class' , 10 , 1);

function active_nav_class ($classes) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}
?> 