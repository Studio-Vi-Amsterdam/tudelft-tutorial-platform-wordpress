<?php
/**
 * Block Name: Text Block
 *
 */
?>
<div class="tutorial__content text">
    <?php if ( $title = get_field('tu-delft-text_title') ) : ?>
        <?php if (is_user_logged_in()): ?>
            <div class="tutorial__subchapter-title">
                <h4><?php echo $title; ?></h4>
                <?= get_template_part('template-parts/user-menu') ?>
            </div>
        <?php else: ?>
            <h4><?php echo $title; ?></h4>
        <?php endif; ?>
    <?php endif; ?>
    <?php the_field('tu-delft-text_content'); ?>
</div>