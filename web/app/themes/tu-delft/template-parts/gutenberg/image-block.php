<?php
/**
 * Block Name: Image Block
 * 
 */
$image = get_field('tu-delft-image_image');
?>

<div class="tutorial__content image">
    <?php if ( $title = get_field('tu-delft-image_title') ) : ?>
        <h4><?php echo $title; ?></h4>
    <?php endif; ?>
    <figure>
        <img width="<?php echo $image['sizes'][ 'large-width' ]; ?>" height="<?php echo $image['sizes'][ 'large-height' ]; ?>" data-image-src="<?php echo $image['url']; ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        <figcaption>
            <?php echo get_post_meta( $image['ID'], 'title', true ) ? : $image['alt']; ?>
        </figcaption>
    </figure>
</div>