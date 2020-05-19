<?php
/*
* Hero for KK's - Front Page
*/
?>
   <?php
    $cta = get_field('hero_cta');
    $image = get_field('hero_image');
    if($image) {
        $imageURL = $image['url'];
    } 
    ?>
    
<section id="front-page-hero">
    <div class="jumbotron front-page-hero" style="background-image: url('<?php echo $image['url']; ?>')">
        <div class="jumbo-text">
            <h2><? the_field('hero_titel'); ?></h2>
            <p class="lead"><? the_field('hero_subtitle'); ?></p>
            <!-- Show CTA if filled in --->
           <?php if(!empty($cta)) : ?>
               <a class="btn jumbo-button" href="<?php echo $cta ?>" role="button"><?php _e('Mer info'); ?></a>
          <?php
          endif; ?>
            
        </div>
    </div>
</section>

