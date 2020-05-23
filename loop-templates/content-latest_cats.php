
<?php
/**
 * KK's Malmö How To Adopt 
 * FRONT PAGE
 *
 * @package kks
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$linkPrimaryColor = get_field('link_primary_color', 'option');
?>

<div class="col-12 col-md-5 col-lg-5 one-cat">
    
    <a  href="<?php  the_permalink(); ?>">

        <div class="latest-cat-image">

            <?php  the_post_thumbnail(); ?>

        </div>

    <p style="color: <?php echo $linkPrimaryColor; ?>;" class="jumbo-button"><?php the_field('cat_name'); ?></p>

    </a>

</div> <!-- .one-cat --->