<?php
/**
 * Block Name: Image Text Block
 * 
 */

$image = get_field('image');
?>
<div class="image-text-block-wrapper">
    <?php
        get_template_part('template-parts/gutenberg/chapter-subtitle');
    ?>
    <div class="two-blocks-wrapper">
        <div class="image-wrapper">
            <img src="<?php echo $image['url']; ?>" alt="<?php $image['alt']; ?>">
        </div>
        <div class="text-wrapper">
            <p><?php the_field('content'); ?></p>
        </div>
    </div>
</div>