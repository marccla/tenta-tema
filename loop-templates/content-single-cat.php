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

<?php
// Get Age from Date of Birth
$birth = get_field('cat_age'); 

if(!empty($birth)) :
    $bday = new DateTime($birth); // Your date of birth
    $today = new Datetime(date('m.d.y'));
    $diff = $today->diff($bday);
endif;
?>




<div class="container">

    <div class="row">

        <div class="img-container col-12 col-md-6 col-lg-6">

        <?php echo get_the_post_thumbnail(); ?>

    </div>

        <article class="col-12 col-md-6 col-lg-6">
           
            <h1 class="single-cat-name"><?php the_field('cat_name'); ?></h1> 
               
            <p class="single-cat-age"><strong><?php _e('Born: ', 'kks') ?></strong><?php the_field('cat_age'); ?> (<?php echo $diff->y ?><?php _e(' Years ', 'kks'); ?><?php echo $diff->m ?><?php _e(' Months', 'kks'); ?>)</p>

            <p class="single-cat-color"><strong><?php _e('Color: ', 'kks') ?></strong><?php the_field('cat_color'); ?></p>

            <p class="single-cat-desc"><strong><?php _e('Description: ', 'kks') ?></strong><?php the_field('cat_description'); ?></p>

            <p class="single-cat-weight"><strong><?php _e('Weight: ', 'kks') ?></strong><?php the_field('cat_weight'); ?> kg</p>
            
            <p class="single-cat-adopt"><?php the_field('cat_adopted'); ?></p>
        
            <div class="gender-box">

                <h4 class="gender-title"><?php _e('Gender: ', 'kks'); ?></h4>

                <?php  // Get Custom Taxonomy -> Gender
                    $genders = get_the_terms( $post->ID, 'gender' );

                    foreach ( $genders as $gender ) {
                        echo '<p class="single-cat-category">' . $gender->name . '</p>' ; 
                    } 
                ?>

            </div>    

            <div class="location-box">

                <h4 class="location-title"><?php _e('Location: ', 'kks'); ?></h4>

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