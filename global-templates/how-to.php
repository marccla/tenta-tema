<?php
/**
 * KK's Malmö How To Adopt 
 * FRONT PAGE
 *
 * @package kks
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

	<section class="how-to-adopt" data-aos="fade-up">
	    <div class="container">
			<div class="row mt-md-5 adopt-container">
                    <!-- Title Container-->
                <div class="col-12 col-md-6 col-lg-6 adopt-title-container">		
                    <h2 class="cats-title-text"><?php _e('How to Adopt', 'kks'); ?></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque facere id perferendis, fuga culpa eum impedit sint necessitatibus consequuntur, libero veritatis tenetur cumque corrupti mollitia delectus consequatur ea esse ad? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, voluptatum.</p>
                </div>

	<?php
    $adopt = new WP_Query([
        'post_type'         =>      'adoption',
        'order'				=>      'ASC',
    ]); ?>
   
    
        <div class="col-12 col-md-6 col-lg-6">

     <?php while ($adopt->have_posts()) : $adopt->the_post(); ?>

            <div class="col-12 col-md-12 col-lg-12 one-adopt">

                <h1><?php the_title(); ?></h1>

                <p class="adopt-text"><?php the_field('how_to_adopt'); ?></p>

        </div>	 

    <?php endwhile; ?>     
        

	<?php 
    wp_reset_postdata();
    ?>
          </div> <!-- row -->
       </div> <!-- container -->
    </section>