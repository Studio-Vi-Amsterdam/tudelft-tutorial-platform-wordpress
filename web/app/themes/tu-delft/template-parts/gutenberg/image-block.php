<?php
/**
 * Block Name: Image Block
 * 
 */

$image = get_field('tu-delft-image_image');
?>

<div class="tutorial__content image">
    <figure>
        <img width="<?php echo $image['sizes'][ 'large-width' ]; ?>" height="<?php echo $image['sizes'][ 'large-height' ]; ?>" data-image-src="<?php echo $image['url']; ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    </figure>
</div>