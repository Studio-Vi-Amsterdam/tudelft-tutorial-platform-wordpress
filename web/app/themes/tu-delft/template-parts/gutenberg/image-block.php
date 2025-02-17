<?php
/**
 * Block Name: Image Block
 * 
 */
$image = get_field('tu-delft-image_image');
?>

<div class="tutorial__content image">
    <?php if ( $title = get_field('tu-delft-image_title') ) : ?>
        <div class="tutorial__subchapter-title">
            <h4><?php echo $title; ?></h4>
            <?= get_template_part('template-parts/user-menu') ?>
        </div>
    <?php endif; ?>
    <div class="tutorial__content">
        <figure>
            <img
                class="<?php echo !get_field('tu-delft-image_has_image_zoom') ? 'disable-zoom' : ''; ?>"
                width="<?php echo $image['sizes'][ 'large-width' ]; ?>" 
                height="<?php echo $image['sizes'][ 'large-height' ]; ?>" 
                data-image-src="<?php echo $image['url']; ?>" 
                src="<?php echo $image['url']; ?>" 
                alt="<?php echo $image['alt']; ?>"
            >
            <figcaption>
                <?php echo get_post_meta( $image['ID'], 'title', true ) ? : $image['alt']; ?>
            </figcaption>
        </figure>
    </div>
</div>