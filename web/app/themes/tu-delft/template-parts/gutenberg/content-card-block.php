<?php
/**
 * Block Name: Content Card Block
 */
?>
<div class="content-card-block-wrapper">
    <?php
        get_template_part('template-parts/gutenberg/chapter-subtitle');
    ?>
    <div class="content-card-wrapper">
        <?php 
            foreach(get_field('content_card_row') as $content_card):
                if ( empty($content_card['card_link']) ) {
                    continue;
                }
        ?>
            <a class="content-card" href="<?php the_permalink($content_card['card_link']->ID); ?>">
                <span> <?php echo $content_card['card_title'] ? $content_card['card_title'] : $content_card['card_link']->post_title; ?> </span>
            </a>
        <?php endforeach; ?>
    </div>
</div>