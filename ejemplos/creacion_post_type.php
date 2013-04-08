
<?php 

// Crear post type

/*
  Esto debe colocarse dentro del functions.php
*/

/*------------------------------------------------
Crea el Tipo de Post para las productos
---------------------------------------------------*/
function create_post_type() {
  register_post_type( 'productos',
    array(
      'labels' => array(
        'name' => __( 'Productos' ),
        'singular_name' => __( 'Producto' )
      ),
    'menu_position' => 5, 
    'rewrite' => array('slug' => 'productos'),
    'public' => true,
    'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );

/*------------------------------------------------
Crear Categorias para este Tipo de post
*/------------------------------------------------
function customsCatsForProductos_init() {
  register_taxonomy(
    'categorias',
    'productos',
    array(
      'hierarchical' => true,
      'label' => 'Categorias',
      'query_var' => true,
      'rewrite' => array('slug' => 'categorias-productos')
    )
  );
} 



?>
