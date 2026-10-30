<?php
$current_page = $args['current'] ?? 1;
$max_num_pages = $args['max_num_pages'] ?? 1;
?>
<div data-pagination class="search__pagination pagination flex items-center justify-center">
	<a href="#" class="pagination__button disabled pagination__button--prev flex items-center justify-center">
		<svg width="20" height="20">
			<use href="<?= THEME_URL; ?>/src/sprite.svg#arrow-right"></use>
		</svg>
	</a>

	<div class="pagination__list">
		<div id="dynamic-pagination">
			<?= generate_pagination($current_page, $max_num_pages); ?>
		</div>
	</div>

	<a href="#" class="pagination__button pagination__button--next flex items-center justify-center">
		<svg width="20" height="20">
			<use href="<?= THEME_URL; ?>/src/sprite.svg#arrow-right"></use>
		</svg>
	</a>
</div>