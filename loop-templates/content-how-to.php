<?php
/**
 * KK's Malmö Latest Cats
 *
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

	<section class="how-to-adopt">
	    <div class="container">
			<div class="row mt-md-5 adopt-container">

	
	<?php
    $adopt = new WP_Query([
        'post_type'         =>      'adoption',
    ]); ?>
   
    
       
     <?php while ($adopt->have_posts()) : $adopt->the_post(); ?>
                <div class="col-12 col-md-2 col-lg-2 one-adopt">
                    <h1><?php the_title();; ?></h1>
                    <p class="adopt-text"><?php the_field('how_to_adopt'); ?></p>
                </div>	             
       <?php endwhile; ?>     
        

	<?php 
    wp_reset_postdata();
	?>
     
                    <div class="col-12 col-md-6 col-lg-6 adopt-title-container">		
                        <h2 class="cats-title-text"><?php _e('How to Adopt'); ?></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque facere id perferendis, fuga culpa eum impedit sint necessitatibus consequuntur, libero veritatis tenetur cumque corrupti mollitia delectus consequatur ea esse ad? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, voluptatum.</p>
	                </div>
				</div>
			</div>
		
    </section>