<?php

  /**
   * Ajout d'une méta box 
   *
   * @return void
   */
  function add_service_icon_meta_box()
  {
      add_meta_box(
        'service-icon-metabox',           // Unique ID
        __("Attached Icon"),  // Box title
        'render',  // Content callback, must be of type callable
        'services'                   // Post type
      );
    
  }

  /**
   * Fonction pour rendre le code html dans la metabox
   *
   * @return void
   */
  function render()
  {
    echo "test";
    // // Récupération de toutes les meta du post
    // // https://developer.wordpress.org/reference/functions/get_post_meta/
    // $data = get_post_meta(get_the_ID());
    // // Récupération et attribution des valeurs à utiliser pour la view
    // $time = extract_data_attr('rat_time_preparation', $data);
    // $num_person = extract_data_attr('rat_person_number', $data);
    // view('metaboxes/recipe-detail', compact('time', 'num_person'));
  }
  /**
   * sauvegarde des donners de la métabox
   *
   * @param [type] $post_id reçu par le do_action
   * @return void
   */
  // function save($post_id)
  // {
  //   // On verifie que $_POST ne soit pas vite pour effectuer l'action uniquement à la sauvegarde du post Type
  //   if (count($_POST) != 0) {
  //     // on ajoute sanitize pour sécurizer les valeurs receuilli par l'utilisateur
  //     // https://developer.wordpress.org/themes/theme-security/data-sanitization-escaping/
  //     $data = [
  //       'rat_time_preparation' => post_data('rat_time_preparation', $_POST),
  //       'rat_person_number' => post_data('rat_person_number', $_POST),
  //     ];
  //     // enregistrement de toutes les valeurs grâce au helper
  //     update_post_metas($post_id, $data);
  //   }
  // }
