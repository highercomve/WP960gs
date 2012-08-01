<?php
/**
 * The template for displaying attachments.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div class="row">
	<div id="main" class="grid12">

		<?php get_template_part( 'loop', 'attachment' ); ?>

	</div><!-- #main -->
</div><!-- .row -->

<?php get_footer(); ?>
