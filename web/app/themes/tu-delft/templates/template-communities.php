<?php
/*
    Template Name: Communities Template
*/


$communities = get_posts(
	[
		'post_type' => 'communities',
		'numberposts' => -1,
		'post_status' => 'publish',
		'fields' => 'ids'
	]
);

$knowledgeHubs = get_field('knowledge_hubs');

get_header();

get_template_part('template-parts/hero-overview', false,
	[
		'data' => [
			'title' => get_field('title'),
			'description' => get_field('description'),
			'breadcrumbs' => [
				[
					'title' => 'Home',
					'url' => get_home_url(),
				],
				[
					'title' => get_the_title(),
				]
			]
		],
		'class' => 'hero-overview--small-gap hero-overview--large-width-text'
	]
);

get_template_part('template-parts/communities-cards', false,
	[
		'data' => [
			'communities' => $communities,
		],
		'class' => 'communities-cards--equal-size'
	]
);

get_template_part('template-parts/knowledge-cards', false, ['data' => $knowledgeHubs]);
get_footer();
