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


<?php while ($success->have_posts()) : $success->the_post(); ?>
        <div class="col-12 col-md-12 col-lg-6 one-success">
            <h2><?php the_title(); ?></h2>

            <div class="success-image">
                <?php  the_post_thumbnail('medium'); ?>
            </div>

            <p class="success-text"><?php the_field('success_story'); ?></p>
        </div>	             
<?php endwhile; ?>     


<?php 
wp_reset_postdata();
?>
        </div>
    </div>


</section>