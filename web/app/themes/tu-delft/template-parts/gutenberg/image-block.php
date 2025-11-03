<?php
/**
 * Block Name: Image Block
 * 
 */
$image = get_field('tu-delft-image_image');
?>

<div class="tutorial__content image">
    <?php if ( $title = get_field('tu-delft-image_title') ) : ?>
        <?php if (is_user_logged_in()): ?>
            <div class="tutorial__subchapter-title">
                <h4><?php echo $title; ?></h4>
                <?= get_template_part('template-parts/subchapter-title-menu') ?>
            </div>
        <?php else: ?>
            <h4><?php echo $title; ?></h4>
        <?php endif; ?>
    <?php endif; ?>
    <div class="tutorial__content">
        <figure>
						<?= wp_get_attachment_image(
							$image['ID'],
							[800, 440],
							false,
							[
								'class' => !get_field('tu-delft-image_has_image_zoom') ? 'disable-zoom' : '',
								'data-image-src' => $image['url']
							]
						);
						?>
            <figcaption>
                <?php echo htmlspecialchars(get_post_meta( $image['ID'], 'title', true ) ? : $image['alt']); ?>
            </figcaption>
        </figure>
    </div>
</div>