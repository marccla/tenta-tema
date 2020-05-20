
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

<div class="col-6 col-md-6 col-lg-6 one-cat">
    
    <a  href="<?php  the_permalink(); ?>">
        <div class="latest-cat-image">
            <?php  the_post_thumbnail(); ?>
        </div>
    <p style="color: <?php echo $linkPrimaryColor; ?>;" class="latest-cat-title"><?php the_title(); ?></p>
    </a>
</div>