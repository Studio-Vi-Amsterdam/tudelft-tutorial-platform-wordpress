<?php
/**
 * Block Name: Text Block
 *
 */
?>
<div class="tutorial__content text">
    <?php
        get_template_part('template-parts/gutenberg/chapter-subtitle');
    ?>
    <?php the_field('tu-delft-text_content'); ?>
</div>