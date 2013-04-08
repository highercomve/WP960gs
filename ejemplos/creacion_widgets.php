<?php 

class LastBlogNews extends WP_Widget {
  
  public function __construct() {
    parent::WP_Widget(false, $name='Ultimas Noticias');
  }

  // Formulario en el administrador de Widgets
  public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
      $title = $instance[ 'title' ];
    }
    else {
      $title = __( 'New title', 'text_domain' );
    }
    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 

      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php 
  }

  // Funcion de Actualizacion del Widget
  public function update( $new_instance, $old_instance ) {
    $instance = array();
    // Actualiza variables del Widget
    $instance['title'] = strip_tags( $new_instance['title'] );

    return $instance;
  }

  // Funcion de para mostrar el widget
  public function widget($args, $instance) {

    global $post;
    $post_old = $post; // Save the post object.
    extract( $args );
    echo $before_widget;
    echo $before_title;
    echo $instance["title"];
    echo $after_title;
    echo "<ul>";
    $argumentos = array(
      'posts_per_page' => 5,
      'post_type' => 'noticias'
    );
    $cat_posts=new WP_Query($argumentos);
    while ( $cat_posts->have_posts() ) : $cat_posts->the_post();
    ?>
      <li> 
        <!-- 
        <a href="<?php // the_permalink() ?>">
          <?php // echo the_title() ?>
        </a>  
        -->
        <?php echo the_title() ?>
      </li>
    <?php
    endwhile;
    echo "</ul>";
    $post = $post_old; // Save the post object.
  }
}

// Registrando el Widgets para el Wordpress
register_widget("LastBlogNews");
?>