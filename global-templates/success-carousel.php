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



<?php

$carouselItems =  get_field('number_of_carousel_items', 'option');
$carouselBgColor = get_field('carousel_bg_color', 'option');
$carouselTextColor = get_field('carousel_text_color', 'option');
$carouselSpeed = get_field('carousel_speed', 'option');

// Get the three latest success
$success = new WP_Query([
    'post_type'         =>      'success_stories',
    'posts_per_page'    =>      $carouselItems,
]);

// $counter = count($success->posts);

$count = 0;

if ($success->have_posts() ) :
    // Great success!
?>
<section class="success">
    <div class="container">
        <div class="m-auto success-container" style="background-color:<?php echo $carouselBgColor ?>;" data-aos="fade-up">
            <div class="wrapper" id="wrapper-slider">
                <div class="container" data-aos="fade-up">
                    <h1 class="text-center" style="color:<?php echo $carouselTextColor ?>;"><?php _e('Success Stories', 'kks'); ?></h1>
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="<?php echo $carouselSpeed; ?>">
                            <div class="carousel-inner">
                            <?php while ($success->have_posts()) : $success->the_post(); ?>
                                <?php
                                    $post_thumbnail = get_the_post_thumbnail_url(get_the_id(),'full');
                                ?>  
                                <div class="carousel-item <?php if($count <= 0){echo "active";  } ?>">    
                                        <div class="carousel-post">
                                            <div class="title-container text-center" style="color:<?php echo $carouselTextColor ?>;">
                                                <h1><?php the_title(); ?></h1>
                                            </div>
                                            <div class="carousel-text" style="color:<?php echo $carouselTextColor ?>;">
                                                <?php the_field('success_story'); ?>
                                            </div>
                                        </div>
                                    <img class="d-block" src="<?php echo esc_url($post_thumbnail); ?>" alt="<?php the_title(); ?>">
                                </div>

                            <?php 
                            $count++;
                            ?>

                            <?php endwhile; ?>

                            </div>

                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>

                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>

                        </div> <!-- carousel -->
                        <?php wp_reset_postdata(); ?>

        </div> <!-- Container -->
    
</section>
<?php endif; ?>