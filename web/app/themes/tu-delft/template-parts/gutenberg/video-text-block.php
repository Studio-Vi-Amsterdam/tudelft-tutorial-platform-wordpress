<?php
/**
 * Block Name: Video Text Block
 * 
 */

$theme_url = get_template_directory_uri();
$video = get_field('tu-delft-video-text_video');
$placeholder = get_the_post_thumbnail_url($video['ID'], 'large');
?>
<div class="text-video-block-wrapper video" data-video-src="<?php echo $video['url']; ?>">
    <?php if ( $title = get_field('tu-delft-video-text_title') ) : ?>
        <h4><?php echo $title; ?></h4>
    <?php endif; ?>
    <div class="two-blocks-wrapper">
        <div class="video-wrapper">
            <figure class="video__wrapper">
                <div class="video__preload">
                    <img width="808" height="454" src="<?php echo ($placeholder ? $placeholder : $theme_url . '/src/img/tutorial/img-1.jpg') ?>" alt="">
                    <div class="video__play">
                        <svg width="35" height="42">
                            <use href="<?= $theme_url ?>/src/sprite.svg#play-video"></use>
                        </svg>
                    </div>
                </div>
                <figcaption>
                    <?php echo get_post_meta( $video['ID'], 'title', true ) ? : $video['alt']; ?>
                </figcaption>
            </figure>
            <!-- <video controls>
                <source src="<?php // the_field('tu-delft-video-text_video'); ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video> -->
        </div>
        <div class="text-wrapper">
            <?php the_field('tu-delft-video-text_content'); ?>
        </div>
    </div>
</div>