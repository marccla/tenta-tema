

<div class="card col-6 col-md-4 col-lg-3 cat-card" style="width: 18rem;">
<?php echo get_the_post_thumbnail(); ?>
  <div class="card-body">
    <h5 class="card-title"><?php the_field('cat_name'); ?></h5>
    <p class="card-text"><?php the_field('cat_gender'); ?></p>
    <a href="<?php the_permalink(); ?>" class="btn btn-primary cat-btn"><?php _e('More Info', 'kks'); ?></a>
  </div>
</div>