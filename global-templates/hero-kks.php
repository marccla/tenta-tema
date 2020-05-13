<?php
/*
* Hero for KK's - Front Page
*/
?>
   <?php
    $image = get_field('hero_image');
    if($image) {
        $imageURL = $image['url'];
    } 
    ?>
<section id="front-page-hero">
    <div class="jumbotron front-page-hero" style="background-image: url('<?php echo $image['url']; ?>')">
        <h2><? the_field('hero_titel'); ?></h2>
        <p class="lead"><? the_field('hero_subtitle'); ?></p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
</section>

