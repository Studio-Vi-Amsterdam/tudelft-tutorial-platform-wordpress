<?php
/**
 * Block Name: Info Box Block
 * 
 */

$theme_url = get_template_directory_uri();
?>
<div class="tutorial__content">
    <?php if ( $title = get_field('tu-delft-info-box_title') ) : ?>
        <?php if (is_user_logged_in()): ?>
            <div class="tutorial__subchapter-title">
                <h4><?php echo $title; ?></h4>
                <?= get_template_part('template-parts/subchapter-title-menu') ?>
            </div>
        <?php else: ?>
            <h4><?php echo $title; ?></h4>
        <?php endif; ?>
    <?php endif; ?>
    <div class="tutorial__content infobox flex items-start">
        <div class="infobox__icon">
            <svg width="24" height="24">
                    <use href="<?= $theme_url ?>/src/sprite.svg#infobox"></use>
            </svg>
        </div>
        <div class="infobox__content">
            <?php the_field('tu-delft-info-box_content'); ?>
        </div>
    </div>
</div>