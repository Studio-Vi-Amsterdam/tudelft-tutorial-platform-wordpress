<?php
/**
 * Block Name: Text Video Block
 * 
 */

$theme_url = get_template_directory_uri();
$video = get_field('tu-delft-text-video_video');
$placeholder = get_field('tu-delft-text-video_thumbnail');
$subtitles = get_field('tu-delft-video_subtitles');

$page_id = get_the_ID();
?>
<div class="tutorial__content text-video-block-wrapper video">
    <?php if ( $title = get_field('tu-delft-text-video_title') ) : ?>
        <?php if (is_user_logged_in()): ?>
            <div class="tutorial__subchapter-title">
                <h4><?php echo $title; ?></h4>
                <?= get_template_part('template-parts/subchapter-title-menu') ?>
            </div>
        <?php else: ?>
            <h4><?php echo $title; ?></h4>
        <?php endif; ?>
    <?php endif; ?>
    <div class="tutorial__content two-blocks-wrapper">
        <div class="text-wrapper">
            <?php the_field('tu-delft-text-video_content'); ?>
        </div>
        <div class="video-wrapper">
            <figure class="video__wrapper" data-video-src="<?php echo $video['url']; ?>" data-video-subtitles="<?php echo $subtitles; ?>" data-videoid="<?php echo $video['ID']; ?>" data-pageid="<?php echo $page_id; ?>">

							<div class="video__preload">
									<?php if($placeholder):
										$attachment_id = attachment_url_to_postid( $placeholder );
										echo wp_get_attachment_image($attachment_id, [400, 215]);
										?>
									<?php else: ?>
										<img
											width="400"
											class="lazy"
											height="215"
											data-src="<?= $theme_url . '/src/img/tutorial/img-1.jpg'; ?>"
											alt="Preview image"
										>
									<?php endif; ?>

									<div class="video__play">
                        <svg width="35" height="42">
                            <use href="<?= $theme_url ?>/src/sprite.svg#play-video"></use>
                        </svg>
                    </div>
                </div>

                <figcaption>
                    <?php echo htmlspecialchars(get_post_meta( $video['ID'], 'title', true ) ? : $video['alt']); ?>
                </figcaption>
            </figure>
            <!-- <video controls>
                <source src="<?php //the_field('tu-delft-text-video_video'); ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video> -->
        </div>
    </div>
</div>