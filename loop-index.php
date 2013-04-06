<?php // LOOP-INDEX ?>

<?php 
	/* 
	Ejemplos de Uso del Query_post

	Query Post es una funcion de Wordpress que actua sobre el query principal del wordpress

	Puede simplemente editarlo o reiniciarlo por completo

	query_posts( "argumento1=valor&argumento2=valor&argumento3=valor&..." );

	*/
	global $query_string,$post;
	// print_r($wp_query);

	query_posts($query_string."&cat=1");

 ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
		<div id="nav-above" class="navigation">
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
		</div><!-- #nav-above -->
<?php endif; ?>


<div class="row">

<?php if ( have_posts() ): while( have_posts() ): the_post(); ?>

	<div class="articulo grid3">
		<div class="imagen-destacada">
			<a href="<?php the_permalink() ?>">
				<?php the_post_thumbnail("thumbnail") ?>
			</a>
		</div>
		<div class="detalle">
			<h2>
					<a href="<?php the_permalink() ?>">
						<?php the_title() ?>
					</a>
				</h2>
				<div class="author">
					<?php the_author_posts_link() ?>
				</div>
				<div class="hora">
					<?php the_time() ?> / <?php the_time(get_option('date_format')); ?>
				</div>
				<div class="resumen">
					<?php the_excerpt() ?>
				</div>
		</div>
	</div>

<?php endwhile; endif; ?>

<div class="row">
	<div class="grid9">
		<h3>
			Articulos Secundarios
		</h3>
		<ul>
			<?php
			$myposts = get_posts( "cat=3&numberposts=3");
			foreach( $myposts as $post ) :	setup_postdata($post); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>

<div class="row">
	<div class="grid9">
		<h3>
			Articulos De tercer nivel (de kinder)
		</h3>
		<ul>
			<?php
			$myposts = new WP_Query("cat=3&numberposts=3");
			while( $myposts->have_posts() ) :	$myposts->the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>



</div>