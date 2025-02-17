<?php

/**
 * Block Name: Video URL Block
 * 
 */

$theme_url = get_template_directory_uri();
$video = get_field('tu-delft-video-url_url');
$subtitle = get_field('tu-delft-video-url_subtitle');
$title = get_field('tu-delft-video-url_title');
$placeholder = get_field('tu-delft-video-url_thumbnail');
$subtitle = get_field('tu-delft-video-url_subtitle') ?: '';
?>
<div class="tutorial__content">
        
				<?php if ($subtitle) : ?>
					<div class="tutorial__subchapter-title">
						<h4><?= $subtitle; ?></h4>
            			<?= get_template_part('template-parts/user-menu') ?>
        			</div>
				<?php endif; ?>
				<?php if ($title) : ?>
						<h5><?= $title; ?></h5>
        		<?php endif; ?>
				<div class="tutorial__content">
                <iframe src="<?php echo $video; ?>" width="100%" height="500px" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
        </div>
</div>