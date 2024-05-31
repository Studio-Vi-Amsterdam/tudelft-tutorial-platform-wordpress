<?php
/**
 * Block Name: Image Text Block
 * 
 */

$image = get_field('tu-delft-image-text_image');
?>
<div class="tutorial__content text">
    <?php
        get_template_part('template-parts/gutenberg/chapter-subtitle');
    ?>
    <div class="two-column flex flex-col sm:flex-row items-start justify-between">
        <div class="two-column__item two-column__item--image image">
            <figure>
                <img data-image-src="<?php echo $image['url']; ?>" width="<?php echo $image['sizes']['large-width']; ?>" height="<?php echo $image['sizes']['large-height']; ?>" src="<?php echo $image['url']; ?>" alt="<?php $image['alt']; ?>">
                <figcaption>
                    <?php echo $image['caption']; ?>
                </figcaption>
            </figure>
        </div>
        <div class="two-column__item two-column__item--text text">
            <p>
                <small>
                    <?php the_field('tu-delft-image-text_content'); ?>
                </small>
            </p>
        </div>
    </div>
</div>