<?php $theme_url = get_template_directory_uri() ?>
<section class="hero hero--center-image-onmobile" >
    <div class="hero__container container md:flex items-end justify-between">
        <div class="hero__content">
            <h1><?php the_field('title', get_the_ID()); ?></h1>
            <p><?php the_field('content', get_the_ID()); ?></p>
        </div>
        <?php 
            $image = get_field('image', get_the_ID());

            if ( $image ) : 
        ?>
            <figure class="hero__image">
                <img width="288" height="224" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </figure>
        <?php endif; ?>
    </div>
</section>