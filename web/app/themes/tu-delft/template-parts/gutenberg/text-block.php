<?php
/**
 * Block Name: Text Block
 *
 */
?>
<div class="text-block-wrapper">
    <?php
        get_template_part('template-parts/gutenberg/chapter-subtitle');
    ?>
    <div class="text-wrapper">
        <p><?php the_field('content'); ?></p>
    </div>
</div>