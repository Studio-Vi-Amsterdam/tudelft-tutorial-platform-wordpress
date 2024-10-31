<?php
/**
 * Block Name: Content Card Block
 */
$theme_url = get_template_directory_uri();
?>
<div class="tutorial__content text">
    <?php if ( $title = get_field('tu-delft-content-card_title') ) : ?>
        <h4><?php echo $title; ?></h4>
    <?php endif; ?> 
    <div class="grid-links grid lg:grid-cols-2 ">
        <?php 
            foreach(get_field('tu-delft-content-card_content_card_row') as $content_card):
                $card_link = '';
								$card_title = '';
                if ( $content_card['tu-delft-content-card_card_is_custom_link'] ) {
                    $card_link = $content_card['tu-delft-content-card_card_custom_link'];
										$card_title = $content_card['tu-delft-content-card_card_title'];
                }
                else {
                    $card_link_obj = $content_card['tu-delft-content-card_card_link'];
                    if ( !empty($card_link_obj) ) {
                        $card_link = get_permalink($card_link_obj->ID);
												$card_title = $card_link_obj->post_title;
                    }
                }
                if ( empty($card_link) ) {
                    continue;
                }
        ?>
            <a class="link-box" href="<?php echo $card_link; ?>">
                <div class="link-box__wrapper  flex items-center">
                    <h6>
                        <?= $card_title; ?>
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