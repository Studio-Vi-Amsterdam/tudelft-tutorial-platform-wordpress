<?php
/*
    Template Name: Courses Template
*/

get_header();
the_content();

$faculty = $_GET['faculty'];
$breadcrumbs = [];

if($faculty) {
	$faculty_post = $faculty ? get_page_by_path($faculty, OBJECT, 'faculties') : '';
	$faculty_id = $faculty_post ? (int) $faculty_post->ID : '';
	$breadcrumbs = [
		[
			'title' => 'Our Faculties',
			'url' => get_home_url() . '/faculties',
		],
		[
			'title' => get_the_title($faculty_id),
			'url' => get_the_permalink($faculty_id),
		],
		[
			'title' => get_the_title()
		]
	];
}

get_template_part('template-parts/hero', false, ['breadcrumbs' => $breadcrumbs]);
get_template_part('template-parts/cards-with-categories');

get_footer();