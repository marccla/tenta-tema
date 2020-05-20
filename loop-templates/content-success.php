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


<div class="col-12 col-md-12 col-lg-6 one-success">

    <h2><?php the_title(); ?></h2>

        <div class="success-image">

            <?php  the_post_thumbnail('medium'); ?>

        </div>

    <p class="success-text"><?php the_field('success_story'); ?></p>

</div>	