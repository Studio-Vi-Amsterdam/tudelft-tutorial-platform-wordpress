<?php
/**
 * Block Name: Text Block
 *
 */
?>
<div class="tutorial__content text">
    <?php if ( $title = get_field('tu-delft-text_title') ) : ?>
        <h4><?php echo $title; ?></h4>
    <?php endif; ?>
    <?php the_field('tu-delft-text_content'); ?>
</div>