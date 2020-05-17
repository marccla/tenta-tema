<?php
/**
 * KK's Malmö partial single cat page
 *
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$image = get_field('cat_picture');
?>  
<div class="container">
    <div class="row">
        <div class="img-container col-12 col-md-6 col-lg-6">
            <img class="cat-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php _e('Picture of ') . the_field('cat_name'); ?>">
        </div>
        <article class="col-12 col-md-6 col-lg-6">
            <h1 class="single-cat-name"><?php the_field('cat_name'); ?></h1>
            <p class="single-cat-gender"><?php the_field('cat_gender'); ?></p>
            <p class="single-cat-age"><strong><?php _e('Born: ') ?></strong> <?php the_field('cat_age'); ?></p>
            <p class="single-cat-color"><?php the_field('cat_color'); ?></p>
            <p class="single-cat-desc"><?php the_field('cat_description'); ?></p>
            <p class="single-cat-weight"><?php the_field('cat_weight'); ?> kg</p>
            <p class="single-cat-adopt"><?php the_field('cat_adopted'); ?></p>
            <p class="single-cat-category"><?php echo get_the_category_list(); ?></p>
        </article>   
        

    
    </div>
</div>