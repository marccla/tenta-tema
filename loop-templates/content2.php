<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package kks
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="container">
	<div class="row">
<article id="post-<?php the_ID(); ?>">

		<div class="card col-12 col-md-4 col-lg-4">
				<header class="entry-header">
		<h1>CAAAAAAAAATS</h1>
					<?php
					the_title(
						sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
						'</a></h2>'
					);
					?>

					<?php if ( 'post' === get_post_type() ) : ?>
						
						<div class="entry-meta">
							<?php understrap_posted_on(); ?>
						</div><!-- .entry-meta -->

					<?php endif; ?>

				</header><!-- .entry-header -->

				<?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>

				<div class="entry-content">

					<?php the_excerpt(); ?>

					<?php
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'kks' ),
							'after'  => '</div>',
						)
					);
					?>

				</div><!-- .entry-content -->

				<footer class="entry-footer">

					<?php understrap_entry_footer(); ?>

				</footer><!-- .entry-footer -->
				</article><!-- #post-## -->
			</div>
		</div>
	</div>

