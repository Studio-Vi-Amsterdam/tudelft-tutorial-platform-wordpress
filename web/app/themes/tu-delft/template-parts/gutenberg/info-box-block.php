<?php
/**
 * Block Name: Info Box Block
 * 
 */
?>
<div class="info-box-block-wrapper">
    <?php
        get_template_part('template-parts/gutenberg/chapter-subtitle');
    ?>
   <div class="info-box-block">
        <div class="exclamation-mark">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/src/img/info.png"
                alt="Info"
            />
        </div>
        <div>
            <p><?php the_field('content'); ?></p>
        </div>
    </div>
</div>