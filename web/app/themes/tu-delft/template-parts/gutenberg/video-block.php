<?php
/**
 * Block Name: Video Block
 * 
 */

$theme_url = get_template_directory_uri();
$video = get_field('tu-delft-video_video');
$placeholder = get_field('tu-delft-video_thumbnail');
?>
<div class="tutorial__content video" data-video-src="<?php echo $video['url']; ?>">
    <?php if ( $title = get_field('tu-delft-video_title') ) : ?>
        <h4><?php echo $title; ?></h4>
    <?php endif; ?>
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
</div>