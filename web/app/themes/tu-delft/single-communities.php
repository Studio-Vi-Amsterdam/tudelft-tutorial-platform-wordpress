<?php


$ID = get_the_ID();
$title = get_the_title($ID);
$gridLinksData = get_field('single-communities__cards', $ID);
$breadcrumbs = [
	[
		'title' => 'Our Communities',
		'url' => get_home_url() . '/communities'
	],
	[
		'title' => $title
	]
];

get_header();

get_template_part('template-parts/hero-overview', false,
	[
		'data' => [
			'title' => '<mark>Community</mark><br>' . $title,
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

get_template_part('template-parts/grid-links', false, ['data' => $gridLinksData]);


get_footer();

