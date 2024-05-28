<?php
/**
 * Block Name: Text Video Block
 * 
 */
?>
<div class="text-video-block-wrapper">
    <?php
        get_template_part('template-parts/gutenberg/chapter-subtitle');
    ?>
    <div class="two-blocks-wrapper">
        <div class="text-wrapper">
            <p><?php the_field('tu-delft-text-video_content'); ?></p>
        </div>
        <div class="video-wrapper">
            <video controls>
                <source src="<?php the_field('tu-delft-text-video_video'); ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>