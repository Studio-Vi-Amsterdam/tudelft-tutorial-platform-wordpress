<?php
/**
 * Block Name: Content Card Block
 */
?>
<div class="tutorial__content text">
    <?php if ( $title = get_field('tu-delft-content-card_title') ) : ?>
        <h4><?php echo $title; ?></h4>
    <?php endif; ?> 
    <div class="grid-links grid lg:grid-cols-2 ">
        <?php 
            foreach(get_field('tu-delft-content-card_content_card_row') as $content_card):
                if ( empty($content_card['tu-delft-content-card_card_link']) ) {
                    continue;
                }
        ?>
            <a class="link-box" href="<?php the_permalink($content_card['tu-delft-content-card_card_link']->ID); ?>">
                <div class="link-box__wrapper  flex items-center">
                    <h6>
                        <?php echo $content_card['tu-delft-content-card_card_title'] ? $content_card['tu-delft-content-card_card_title'] : $content_card['tu-delft-content-card_card_link']->post_title; ?>
                    </h6>
                    <div class="arrow">
                        <svg width="9" height="14">
                            <use href="<?= $theme_url ?>/src/sprite.svg#arrow"></use>
                        </svg>
                        <svg width="24" height="2">
                            <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                        </svg>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>