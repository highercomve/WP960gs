<?php 

add_action( 'wp_enqueue_scripts', 'load_some_javascript_files' );
 
function load_some_javascript_files() {

  /*
  Registra un script en al wordpress
  
  wp_register_script("nombre_script", "ruta_script", "dependencia", "version de la dependencia", "true")
  */
  wp_register_script( 'smoothscrolling.jquery', get_template_directory_uri().'/js/smoothscrolling.jquery.js', array('jquery'), '1.7', true );
  wp_register_script( 'homejs', get_template_directory_uri().'/js/home.js', array('smoothscrolling.jquery'), '1.0', true );
 
  wp_enqueue_script( 'homejs' );
  /*
  en caso de querer filtrar por pagina se pueden
  usar las funciones del wordpress como: 

  if ( is_front_page() ) {
    wp_enqueue_script('homejs');
  }
  */
 
}

?>