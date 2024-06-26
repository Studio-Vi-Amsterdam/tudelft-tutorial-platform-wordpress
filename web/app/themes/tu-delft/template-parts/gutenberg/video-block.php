<?php
/**
 * Block Name: Video Block
 * 
 */

$theme_url = get_template_directory_uri();
?>
<div class="tutorial__content video" data-video-src="<?php the_field('tu-delft-video_video'); ?>">
    <?php
        get_template_part('template-parts/gutenberg/chapter-subtitle');
    ?>
    <figure class="video__wrapper">
        <div class="video__preload">
            <img width="808" height="454" src="<?= $theme_url ?>/src/img/tutorial/img-1.jpg" alt="image">
            <div class="video__play">
                <svg width="35" height="42">
                    <use href="<?= $theme_url ?>/src/sprite.svg#play-video"></use>
                </svg>
            </div>
        </div>
        <figcaption>
            <?php echo get_post_meta( $image['ID'], 'title', true ) ? : $image['alt']; ?>
        </figcaption>
    </figure>
</div>