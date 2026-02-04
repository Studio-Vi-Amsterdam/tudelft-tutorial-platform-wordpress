<?php
use \TuDelft\Theme\Modules\Communities\Communities;
get_header();

$community_slug = get_query_var('community');
$community_post = $community_slug
	? get_page_by_path($community_slug, OBJECT, 'communities')
	: null;
$community_id = $community_post ? (int) $community_post->ID : 0;
$term = get_queried_object();

get_template_part('template-parts/hero-overview', false,
	[
		'data' => [
			'title' => $term->name,
			'description' => $term->description,
			'breadcrumbs' => [
				[
					'title' => 'Our Communities',
					'url' => get_home_url() . '/communities'
				],
				[
					'title' => get_the_title($community_id),
					'url' => get_the_permalink($community_id),
				],
				[
					'title' => $term->name
				]
			]
		],
		'class' => ''
	]
);

$subcategories = Communities::get_child_categories_by_parent_term_id($term->term_id);

get_template_part('template-parts/community/cards-with-categories', false, [
	'subcategories' => $subcategories,
	'community_id' => $community_id,
	'term_id' => $term->term_id
]);

get_footer();