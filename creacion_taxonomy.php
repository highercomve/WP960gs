<?php 

/* 
Archivo ejemplo para generar nuevas taxonomias 
en el function.php
*/

function customsCats_init() {
  // create a new taxonomy
  register_taxonomy(
    'autor',
    'post',
    array(
      'hierarchical' => true,
      'show_ui' => true,
      'query_var' => true,
      'label' => __( 'Autores' ),
      'rewrite' => array( 'slug' => 'autor' ),
    )
  );
}
add_action( 'init', 'customsCats_init' );

 ?>