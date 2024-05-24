<?php
/**
 * Block Name: Video Text Block
 * 
 */
?>
<div class="text-video-block-wrapper">
    <?php
        get_template_part('template-parts/gutenberg/chapter-subtitle');
    ?>
    <div class="two-blocks-wrapper">
        <div class="video-wrapper">
            <video controls>
                <source src="<?php the_field('tu-delft-video-text_video'); ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="text-wrapper">
            <p><?php the_field('tu-delft-video-text_content'); ?></p>
        </div>
    </div>
</div>