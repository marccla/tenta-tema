<?php
/**
 * Render Content for Blogg
 * BLOG
 *
 * @package kks
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="card col-12 col-md-6 col-lg-3 cat-card" style="width: 18rem;">

  <?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>

  <div class="card-body">

    <h5 class="card-title"><?php the_title(); ?></h5>

    <a href="<?php the_permalink(); ?>" class="jumbo-button"><?php _e('More Info', 'kks'); ?></a>

  </div>
</div>