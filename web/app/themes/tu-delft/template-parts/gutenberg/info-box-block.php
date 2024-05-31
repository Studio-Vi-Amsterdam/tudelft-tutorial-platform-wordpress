<?php
/**
 * Block Name: Info Box Block
 * 
 */

$theme_url = get_template_directory_uri();
?>
<div class="tutorial__content infobox flex items-start">
    <div class="infobox__icon">
        <svg width="24" height="24">
                <use href="<?= $theme_url ?>/src/sprite.svg#infobox"></use>
        </svg>
    </div>
    <div class="infobox__content">
        <p>
            <?php the_field('tu-delft-info-box_content'); ?>
        </p>
    </div>
</div>