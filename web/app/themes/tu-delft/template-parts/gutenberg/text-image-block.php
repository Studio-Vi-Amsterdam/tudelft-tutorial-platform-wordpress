<?php
/**
 * Block Name: Text Image Block
 * 
 */
$image = get_field('tu-delft-text-image_image');
?>
<div class="tutorial__content text">
    <?php if ( $title = get_field('tu-delft-text-image_title') ) : ?>
        <h4><?php echo $title; ?></h4>
    <?php endif; ?>
    <div class="two-column two-column--reversed flex flex-col sm:flex-row items-start justify-between">
        <div class="two-column__item two-column__item--image image">
            <figure>
                <img
                    class="<?php echo !get_field('tu-delft-text-image_has_image_zoom') ? 'disable-zoom' : ''; ?>"
                    data-image-src="<?php echo $image['url']; ?>" 
                    width="<?php echo $image['sizes']['large-width']; ?>" 
                    height="<?php echo $image['sizes']['large-height']; ?>" 
                    src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"
                >
                <figcaption>
                    <?php echo get_post_meta( $image['ID'], 'title', true ) ? : $image['alt']; ?>
                </figcaption>
            </figure>
        </div>
        <div class="two-column__item two-column__item--text text">
            <?php the_field('tu-delft-text-image_content'); ?>
        </div>
    </div>
</div>