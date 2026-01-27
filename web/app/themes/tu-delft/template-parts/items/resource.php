<?php
$ID = $args['id'] ?? get_the_ID();
$url = get_the_permalink($ID);
$authors = get_field('resource__authors', $ID);
$file = get_field('resource__pdf', $ID);
?>
<div>
	<div>
		<a href="<?= $url; ?>" class="block">
			<h2><?= get_the_title($ID); ?></h2>
		</a>

		<?php if($authors): ?>
			<div class="flex">
				<?php foreach ($authors as $index => $author): ?>
					<div>
						<?= $author['author']; ?><?= $index < count($authors) - 1 ? ', ' : ''; ?>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<p>
			<?= get_the_excerpt($ID); ?>
		</p>


		<div class="search-link__arrow">
			<a href="<?= $url; ?>" class="arrow">
				<svg width="14" height="22">
					<use href="<?= THEME_URL ?>/src/sprite.svg#arrow-large"></use>
				</svg>
				<svg width="38" height="3">
					<use href="<?= THEME_URL ?>/src/sprite.svg#line"></use>
				</svg>
			</a>
		</div>
	</div>

	<div>
		<p>OER</p>
		<?php if(!empty($file)): ?>
			<a href="<?= $file['url']; ?>" target="_blank" rel="noreferrer">
				[<?= $file['subtype'] ?>] <?= round($file['filesize'] / 1024 / 1024, 2); ?>MB
			</a>
		<?php endif; ?>
	</div>
</div>
