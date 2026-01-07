<?php

global $post;
$post_slug = $post->post_name;
$ID = get_the_ID();
$title = get_the_title($ID);
$gridLinksData = get_field('single-communities__cards', $ID);

if(!$gridLinksData['items']) {
	$gridLinksData['items'] = get_field('faculties_cards', 'options')['items'];
}
if(!$gridLinksData['title']) {
	$gridLinksData['title'] = get_field('faculties_cards', 'options')['title'];
}

$breadcrumbs = [
	[
		'title' => 'Our Faculties',
		'url' => get_home_url() . '/faculties'
	],
	[
		'title' => $title
	]
];

get_header();

get_template_part('template-parts/hero-overview', false,
	[
		'data' => [
			'title' => '<mark>Faculty</mark><br>' . $title,
			'img' => get_post_thumbnail_id($ID),
			'breadcrumbs' => $breadcrumbs,
		],
		'class' => 'hero-overview--image-to-bord'
	]
);

get_template_part('template-parts/content-block', false,
	[
		'data' => [
			'content' => get_field('single-communities__content', $ID),
			'btn' => get_field('single-communities__button', $ID),
		]
	]
);

get_template_part('template-parts/grid-links', false, ['data' => $gridLinksData, 'params' => ['name' => 'faculty', 'slug' => $post_slug]]);

get_footer();

