<?php
$data = $args['data'];
$title = $data['title'];
$items = $data['items'];
$terms = [];
$params = $args['params'];
if (!$items) {
	$ID = get_the_ID();
	$terms = get_the_terms($ID, 'community-category');
	$terms = array_filter($terms, function ($term) {
		return $term->parent === 0;
	});
}
?>
<section class="section-wrapper">
	<?php if($title): ?>
		<div class="section-wrapper__title">
			<h2><?= $title; ?></h2>
		</div>
	<?php endif; ?>


	<div class="grid-links grid lg:grid-cols-2">
		<?php
			if($items):
				foreach ($items as $item):
					$queryParams = '?' . $params['name'] . '=' . $params['slug'];
					$item['url']['url'] = $item['url']['url'] . $queryParams;
					get_template_part('template-parts/items/grid-link', false, [
						'data' => [
							'title' => $item['title'],
							'link' => $item['url'],
							'description' => $item['description'],
							'img' => $item['image'] ? $item['image']['ID'] : false,
						]
					]);
				endforeach;
			endif;

			if($terms):
				foreach ($terms as $term):
					$img = get_field('community-cat__image', $term);
					get_template_part('template-parts/items/grid-link', false, [
						'data' => [
							'title' => $term->name,
							'link' => ['url' => get_term_link($term, 'community-category')],
							'description' => $term->description,
							'img' => $img ? $img['ID'] : false,
						]
					]);
				endforeach;
			endif;
		?>
	</div>
</section>