<?php
use TuDelft\Theme\Modules\Resources\Resources;

$faculty = $_GET['faculty'];
$faculty_post = $faculty ? get_page_by_path($faculty, OBJECT, 'faculties') : '';
$faculty_id = $faculty_post ? (int) $faculty_post->ID : '';
$title = '';
$meta_query = [];
if($faculty) {
	$title = 'from Faculty ' . get_the_title($faculty_id);
	$meta_query = [
		[
			'key'     => 'faculty',
			'value'   => '"' . $faculty_id . '"',
			'compare' => 'LIKE',
		]
	];
}
$per_page = 5;
$resources = Resources::get_resources(1, $per_page, $meta_query);
$max_num_pages = $resources->max_num_pages;
?>

<section class="py-20">
	<h1>All Resources <?= $title; ?></h1>
	<div id="archive-resources"
			 class=""
			 data-archive="resources_paginate"
			 data-page="1"
			 data-meta-query='<?= json_encode($meta_query); ?>'
			 data-per-page="<?= $per_page; ?>"
			 data-total="<?= $max_num_pages; ?>"
	>
		<?php
			if($resources->have_posts()):
				while ($resources->have_posts()): $resources->the_post();
					get_template_part('template-parts/items/resource', false, ['id' => get_the_ID()]);
				endwhile;
			endif;
		?>
	</div>

	<?php
		if($max_num_pages > 1):
			get_template_part('template-parts/pagination', false, ['current' => 1, 'max_num_pages' => $max_num_pages]);
		endif;
	?>
</section>

