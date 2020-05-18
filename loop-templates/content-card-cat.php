<?php
$image = get_field('cat_picture');
?>

<div class="card col-12 col-md-4 col-lg-3" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
  <div class="card-body">
    <h5 class="card-title"><?php the_field('cat_name'); ?></h5>
    <p class="card-text"><?php the_field('cat_gender'); ?></p>
    <a href="<?php the_perma_link(); ?>" class="btn btn-primary"><?php _e('More Info', 'kks'); ?></a>
  </div>
</div>