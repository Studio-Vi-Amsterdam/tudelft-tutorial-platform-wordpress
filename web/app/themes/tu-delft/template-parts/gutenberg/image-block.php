<?php
/**
 * Block Name: Image Block
 * 
 */

$image = get_field('tu-delft-image_image');
?>

<div class="image-block">
    <?php
        get_template_part('template-parts/gutenberg/chapter-subtitle');
    ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="100%" height="auto"/>
</div>