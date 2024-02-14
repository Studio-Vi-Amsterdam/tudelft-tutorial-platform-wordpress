<?php
/**
 * Block Name: Video Block
 * 
 */
?>
<div class="video-block-wrapper">
    <?php
        get_template_part('template-parts/gutenberg/chapter-subtitle');
    ?>
    <div class="video-block">
        <video controls>
            <source src="<?php the_field('video_url'); ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>