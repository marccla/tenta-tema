<?php
/**
 * KK's Malmö Latest Cats
 * FRONT PAGE
 *
 * @package kks
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

	
    $recent_posts = wp_get_recent_posts( 
		[
		'post_type'	  => 'cat',
        'numberposts' => 4, 
		'post_status' => 'publish', 
		]);	
	?>

	<section class="latest-cats">
		<div class="container">
				<div class="row">

		<div class="col-12 col-md-12 col-lg-6 cats-title-container">		
			<h2 class="cats-title-text"><?php _e('Our latest rescued Cats', 'kks'); ?></h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque facere id perferendis, fuga culpa eum impedit sint necessitatibus consequuntur, libero veritatis tenetur cumque corrupti mollitia delectus consequatur ea esse ad? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, voluptatum.</p>
		</div>

		<div class="col-12 col-md-12 col-lg-6 row cat-container">	
			<?php
			foreach($recent_posts as $post) : ?>
						<!-- Loop Latest Cats -->	
						<div class="col-6 col-md-6 col-lg-6 one-cat">
							<a href="<?php echo get_permalink($post['ID']) ?>">
							<div class="latest-cat-image">
								<?php echo get_the_post_thumbnail($post['ID'], 'small'); ?>
							</div>
								<p class="latest-cat-title"><?php echo $post['post_title']; ?></p>
							</a>
						</div>			
			<?php 
			endforeach; 
			wp_reset_query(); 
			?>
				</div>
			</div>
		</div>
    </section>