<?php
$data = $args['data'] ?? false;
if(!$data) return;
$link = $data['link'];
$imgId = $data['img'];
$title = $data['title'];
$description = $data['description'];
?>
<a href="<?= $link['url']; ?>" <?= $link['target'] ? 'target="'.$link['target'].'"' : '';  ?> class="card-with-image card-with-image--reverse card-with-image--not-full-image">
	<div class="card-with-image__wrapper sm:flex">
		<?php if($imgId): ?>
			<figure class="card-with-image__image">
				<?= wp_get_attachment_image($imgId, [204, 160]); ?>
			</figure>
		<?php endif; ?>

		<div class="card-with-image__content">
			<?php if($title): ?>
				<h4><?= $title; ?></h4>
			<?php endif; ?>

			<?php if($description): ?>
				<p><?= $description; ?></p>
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