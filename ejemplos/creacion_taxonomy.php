<?php 

/* 
Archivo ejemplo para generar nuevas taxonomias 
en el function.php
*/

function customsCats_init() {
  // create a new taxonomy
  register_taxonomy(
    'pais', // Nombre que usara el sistema
    'post',
    array(
      'hierarchical' => true,
      'show_ui' => true,
      'query_var' => true,
      'label' => __( 'Paises' ), // Nombre que va a ver el usuario
      'rewrite' => array( 'slug' => 'pais' ), //Nombre que tendra en la ruta
    )
  );
}
add_action( 'init', 'customsCats_init' );

?>

<?php 
/* 
  Documentacion de como consultar las Taxonomias

  $args = array (
    "post_per_page" => "10", // cualquier filtro previo
    "tax_query" => array (
      array(
        "taxonomy" => "pais",
        "field" => "slug",
        "terms" => "venezuela"
      )
    )
  );

  get_post($args);
*/

 ?>