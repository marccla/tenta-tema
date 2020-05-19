
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

<div class="col-6 col-md-6 col-lg-6 one-cat">
    
    <a href="<?php  the_permalink(); ?>">
        <div class="latest-cat-image">
            <?php  the_post_thumbnail(); ?>
        </div>
    <p class="latest-cat-title"><?php the_title(); ?></p>
    </a>
</div>