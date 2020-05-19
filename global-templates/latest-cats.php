<?php
/**
 * KK's Malmö Latest Cats
 * FRONT PAGE
 *
 * @package kks
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
 $items = get_field('max_cats_shown', 'option');
 $bgColor = get_field('background_latest_cats', 'option');

    // $recent_posts = wp_get_recent_posts( 
	// 	[
	// 	'post_type'	  => 'cat',
    //     'numberposts' => $items, 
	// 	'post_status' => 'publish', 
	// 	]);	

	$my_posts = new WP_Query([
		'post_type'	  		=> 'cat',
        'posts_per_page' 	=> $items, 
		'post_status' 		=> 'publish', 
	]);

	?>
<?php if ($my_posts->have_posts()) : ?>
	<section class="latest-cats">
		<div class="container">
				<div class="row">

		<div class="col-12 col-md-12 col-lg-6 cats-title-container">		
			<h2 class="cats-title-text"><?php _e('Our latest rescued Cats', 'kks'); ?></h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque facere id perferendis, fuga culpa eum impedit sint necessitatibus consequuntur, libero veritatis tenetur cumque corrupti mollitia delectus consequatur ea esse ad? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, voluptatum.</p>
		</div>

		<div style="background-color:<?php echo $bgColor?>" class="col-12 col-md-12 col-lg-6 row cat-container">	
			<!-- Loop Latest Cats -->
			<?php while ($my_posts->have_posts()) : $my_posts->the_post(); ?>			
						<?php get_template_part('loop-templates/content-latest_cats'); ?>		
			<?php endwhile; ?>
			 
			<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>