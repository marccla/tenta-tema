<?php
/**
 * Single post partial template
 *
 * @package kks
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta mb-5">

			

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->	

	<div class="single-post-image-container mb-5">

		<?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>

	</div>

	<div class="entry-content mb-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
				<?php the_content(); ?>

					<?php
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'kks' ),
						'after'  => '</div>',
					)
				);
				?>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
