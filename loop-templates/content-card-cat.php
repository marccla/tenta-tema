
<?php
/**
 * KK's Malmö Single Cat card  
 * ARCHIVE
 *
 * @package kks
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
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

<div class="card col-12 col-md-6 col-lg-3 cat-card" style="width: 18rem;" data-aos="fade-up">

<?php echo get_the_post_thumbnail(); ?>

  <div class="card-body">

    <h5 class="card-title"><?php the_field('cat_name'); ?></h5>
    <p class="single-cat-age"><?php echo $diff->y ?><?php _e(' Years ', 'kks'); ?><?php echo $diff->m ?><?php _e(' Months', 'kks'); ?></p>

    <?php  // Get Custom Taxonomy -> Gender

        $genders = get_the_terms( $post->ID, 'gender' );

        foreach ( $genders as $gender ) {
        echo '<p class="single-cat-category">' . $gender->name . '</p>' ; 
        } 

     ?>
    

    <a href="<?php the_permalink(); ?>" class="jumbo-button"><?php _e('More Info', 'kks'); ?></a>

  </div> <!-- .card-body -->
</div> <!-- .cat-card -->