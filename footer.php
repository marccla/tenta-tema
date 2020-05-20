<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper theme-footer" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?> container">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info text-center row">

						<div class="col-12 col-md-6 col-lg-6 theme-info">

						<span><small>copyright 2020 marc larsson </small></span>

						</div>

					<?php // Check if Front Page 
						if(is_front_page())	: ?>
						<div class="col-10 col-md-6 col-lg-6 page-content m-auto">

							<?php the_content(); ?>
					<?php	
						endif;	 ?>
						</div>	
						
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

