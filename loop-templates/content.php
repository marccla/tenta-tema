<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package kks
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="card col-6 col-md-4 col-lg-3 cat-card" style="width: 18rem;">

  <?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>

  <div class="card-body">

    <h5 class="card-title"><?php the_title(); ?></h5>

    <a href="<?php the_permalink(); ?>" class="btn btn-primary cat-btn"><?php _e('More Info', 'kks'); ?></a>

  </div>
</div>