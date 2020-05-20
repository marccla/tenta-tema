<?php
/**
 * KK's Malmö partial single cat page
 *
 *
 * @package kks
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$image = get_field('cat_picture');
?>  
<div class="container">

    <div class="row">

        <div class="img-container col-12 col-md-6 col-lg-6">

        <?php echo get_the_post_thumbnail(); ?>

    </div>

        <article class="col-12 col-md-6 col-lg-6">

            <h1 class="single-cat-name"><?php the_field('cat_name'); ?></h1> 

            <p class="single-cat-age"><strong><?php _e('Born: ') ?></strong> <?php the_field('cat_age'); ?></p>

            <p class="single-cat-color"><?php the_field('cat_color'); ?></p>

            <p class="single-cat-desc"><?php the_field('cat_description'); ?></p>

            <p class="single-cat-weight"><?php the_field('cat_weight'); ?> kg</p>
            
            <p class="single-cat-adopt"><?php the_field('cat_adopted'); ?></p>
        
            <div class="gender-box">

                <h4 class="gender-title"><?php _e('Gender', 'kks'); ?></h4>

                <?php  // Get Custom Taxonomy -> Gender
                    $genders = get_the_terms( $post->ID, 'gender' );

                    foreach ( $genders as $gender ) :
                        echo '<p class="single-cat-category">' . $gender->name . '</p>' ; 
                    endforeach; 
                ?>
            </div>

            <div class="location-box">

                <h4 class="location-title"><?php _e('Location', 'kks'); ?></h4>

                <?php // Get Custom Taxonomy -> Location
                    $locations = get_the_terms( $post->ID, 'location' );

                    foreach ( $locations as $location ) :
                        echo '<p class="single-cat-category">' . $location->name . '</p>' ;
                    endforeach; 
                ?>      
            </div>  

        </article>  

    </div> <!-- Container -->
</div> <!-- Row -->