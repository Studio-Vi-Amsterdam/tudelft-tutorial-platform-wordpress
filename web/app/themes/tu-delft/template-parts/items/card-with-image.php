<?php
$ID = $args['ID'] ?? false;
if(!$ID) return;
$title = get_the_title($ID);
$url = get_the_permalink($ID);
$excerpt = get_the_excerpt($ID);
$img = get_post_thumbnail_id($ID);
?>
<a href="<?= $url; ?>" class="card-with-image">
	<div class="card-with-image__wrapper sm:flex">
		<?php
			if ( $img ) :
		?>
		<figure class="card-with-image__image">
			<?= wp_get_attachment_image($img, [208, 280]); ?>
		</figure>
		<?php endif; ?>

		<div class="card-with-image__content">
			<h4><?= $title; ?></h4>

			<?php if($excerpt): ?>
				<p><?= $excerpt; ?></p>
			<?php endif; ?>

			<div class="arrow">
				<svg width="14" height="22">
					<use href="<?= THEME_URL ?>/src/sprite.svg#arrow-large"></use>
				</svg>
				<svg width="38" height="3">
					<use href="<?= THEME_URL ?>/src/sprite.svg#line"></use>
				</svg>
			</div>
		</div>
	</div>
</a>