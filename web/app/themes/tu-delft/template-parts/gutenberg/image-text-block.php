<?php
/**
 * Block Name: Image Text Block
 * 
 */

$image = get_field('tu-delft-image-text_image');
?>
<div class="tutorial__content text">
    <?php if ( $title = get_field('tu-delft-image-text_title') ) : ?>
        <h4><?php echo $title; ?></h4>
    <?php endif; ?>
    <div class="two-column flex flex-col sm:flex-row items-start justify-between">
        <div class="two-column__item two-column__item--image image">
            <figure>
                <span>
                <img data-image-src="<?php echo $image['url']; ?>" width="<?php echo $image['sizes']['large-width']; ?>" height="<?php echo $image['sizes']['large-height']; ?>" src="<?php echo $image['url']; ?>" alt="<?php $image['alt']; ?>">

                </span>
                <figcaption>
                    <?php echo get_post_meta( $image['ID'], 'title', true ) ? : $image['alt']; ?>
                </figcaption>
            </figure>
        </div>
        <div class="two-column__item two-column__item--text text">
						<?php the_field('tu-delft-image-text_content'); ?>
        </div>
    </div>
</div>