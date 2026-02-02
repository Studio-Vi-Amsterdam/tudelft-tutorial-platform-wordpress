<?php
$ID = $args['id'] ?? get_the_ID();
$url = get_the_permalink($ID);
$authors = get_field('resource__authors', $ID);
$file = get_field('resource__pdf', $ID);
?>
<div class="search-link resource-item" data-card>
	<div class="search-link__row">
		<a href="<?= $url; ?>" class="search-link__col">
			<h2><?= get_the_title($ID); ?></h2>
		</a>
		<div class="search-link__col">
			<h3>OER</h3>
		</div>
	</div>

	<div class="search-link__row">
		<div class="search-link__col">
			<?php if(!empty($file)): ?>
				<a href="<?= $file['url']; ?>" class="file-url" target="_blank" rel="noreferrer">
					[<?= $file['subtype'] ?>] <?= round($file['filesize'] / 1024 / 1024, 2); ?>MB
				</a>
			<?php endif; ?>
		</div>
		<div class="search-link__col">
			<?php if($authors): ?>
				<div class="span authors">
					<?php foreach ($authors as $index => $author): ?>
						<span>
							<?= $author['author']; ?><?= $index < count($authors) - 1 ? ', ' : ''; ?>
						</span>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

			<p class="mt-2 resource-content">
				<?= get_field('resource__content', $ID)['subtitle']; ?>
			</p>
		</div>
	</div>

	<div class="search-link__arrow">
		<a href="<?= $url; ?>" class="arrow">
			<svg width="14" height="22">
				<use href="<?= THEME_URL; ?>/src/sprite.svg#arrow-large"></use>
			</svg>
			<svg width="38" height="3">
				<use href="<?= THEME_URL; ?>/src/sprite.svg#line"></use>
			</svg>
		</a>
	</div>
</div>