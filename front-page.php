<?php
/**
 * KK's Malmö Front-Page
 *
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>
<?php get_template_part('global-templates/hero-kks') ?>
<div class="wrapper mt-md-5" id="index-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
        
			
			

			<main class="site-main m-auto" id="main">
				
			<?php 
				// Latest Cats
			get_template_part('global-templates/latest-cats'); 
			?>

			<?php
				//  How to adopt
			get_template_part('global-templates/how-to'); 
			?>

			<?php
				// Success Carouse
			 get_template_part('global-templates/success-carousel'); 
			 ?>


                


			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();