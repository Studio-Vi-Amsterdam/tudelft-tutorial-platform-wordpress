<?php
$items = $args['items'];
if(!$items) return;
?>
<nav class="breadcrumbs" aria-label="Breadcrumb">
	<ol class="breadcrumbs__list">
		<li class="breadcrumbs__item">
			<a class="breadcrumbs__link" href="<?= get_home_url(); ?>">Home</a>
		</li>

		<?php foreach ($items as $item): ?>
			<li class="breadcrumbs__item">
				<?php if($item['url']): ?>
					<a href="<?= $item['url']; ?>"><?= $item['title']; ?></a>
				<?php else: ?>
					<span class="breadcrumbs__current" aria-current="page"><?= $item['title']; ?></span>
				<?php endif; ?>
			</li>
		<?php endforeach; ?>
	</ol>
</nav>