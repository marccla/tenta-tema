<?php
/*
* Hero for KK's
* FRONT PAGE
*/
?>
   <?php
    $cta = get_field('hero_cta');
    $image = get_field('hero_image');
   
    $heroTextSize = get_field('hero_text_size');

    if($image) {
        $imageURL = $image['url'];
    } 
    ?>
    
<section id="front-page-hero">

    <div class="jumbotron front-page-hero" style="background-image: url('<?php echo $imageURL; ?>')">

        <div class="jumbo-text">

            <h2 data-aos="fade-right"><? the_field('hero_titel'); ?></h2>

            <p data-aos="fade-left" style="font-size:<?php echo $heroTextSize; ?>rem;" class="lead"><? the_field('hero_subtitle'); ?></p>

            <!-- Show CTA Button if filled in --->
           <?php if(!empty($cta)) : ?>

               <a data-aos="fade-right" class="btn jumbo-button" href="<?php echo $cta ?>" role="button"><?php _e('More info', 'kks'); ?></a>

           <?php endif; ?>
            
        </div>
    </div>
</section>

