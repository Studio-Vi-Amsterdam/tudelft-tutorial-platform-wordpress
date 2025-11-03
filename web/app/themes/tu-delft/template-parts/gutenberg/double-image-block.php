<?php
/**
 * Block Name: Double Image Block
 * 
 */
$imageLeft = get_field('tu-delft-double-image_image-left');
$imageRight = get_field('tu-delft-double-image_image-right');
?>
<div class="tutorial__content text">
    <?php if ( $title = get_field('tu-delft-double-image_title') ) : ?>
        <div class="tutorial__subchapter-title">
            <h4><?php echo $title; ?></h4>
            <?= get_template_part('template-parts/user-menu') ?>
        </div>
    <?php endif; ?>
    <div class="two-column two-column--double-image flex flex-col sm:flex-row items-start justify-between">
        <div class="two-column__item two-column__item--image image">
            <figure>
							<?= wp_get_attachment_image(
								$imageLeft['ID'],
								[400, 300],
								false,
								[
									'class' => !get_field('tu-delft-double-image-left_has_image_zoom') ? 'disable-zoom' : '',
									'data-image-src' => $imageLeft['url']
								]
							);
							?>
                <figcaption>
                    <?php echo htmlspecialchars(get_post_meta( $imageLeft['ID'], 'title', true ) ? : $imageLeft['alt']); ?>
                </figcaption>
            </figure>
        </div>
        <div class="two-column__item two-column__item--image image">
            <figure>
							<?= wp_get_attachment_image(
								$imageRight['ID'],
								[400, 300],
								false,
								[
									'class' => !get_field('tu-delft-double-image-right_has_image_zoom') ? 'disable-zoom' : '',
									'data-image-src' => $imageRight['url']
								]
							);
							?>
                <figcaption>
                    <?php echo htmlspecialchars(get_post_meta( $imageRight['ID'], 'title', true ) ? : $imageRight['alt']); ?>
                </figcaption>
            </figure>
        </div>
    </div>
</div>