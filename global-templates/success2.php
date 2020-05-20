<?php
/**
 * KK's Malmö Success Stories
 * FRONT PAGE
 *
 * @package kks
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<section class="success">
    <div class="container">
        <div class="row mt-md-5 success-container">


            <?php
            $image = get_field('image');
            $size = 'medium'; // (thumbnail, medium, large, full or custom size)
            $success = new WP_Query([
            'post_type'         =>      'success_stories',
            'order'				=>      'ASC',
            'numberposts'       =>       2,
            ]); ?>

                    <div class="col-12 success-title-container">

                        <h2 class="success-title-text"><?php _e('Success Stories', 'kks'); ?></h2>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque facere id perferendis, fuga culpa eum impedit sint necessitatibus consequuntur, libero veritatis tenetur cumque corrupti mollitia delectus consequatur ea esse ad? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, voluptatum.</p>
                    
                    </div>

                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    
            <?php while ($success->have_posts()) : $success->the_post(); ?>

                        <?php get_template_part('loop-templates/content', 'success'); ?>

            <?php endwhile; ?>     
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

            <?php wp_reset_postdata(); ?>

        </div> <!-- Container -->
    </div> <!-- Row -->


</section>