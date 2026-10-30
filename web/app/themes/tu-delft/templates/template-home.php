<?php
/*
    Template Name: Home Template
*/

$communitiesCards = get_field('communities__items');
$facultiesCards = get_field('faculties__items');


get_header();

the_content();

get_template_part('template-parts/main-hero'); 
get_template_part('template-parts/two-columns-text');
get_template_part('template-parts/communities-cards', false, ['data' => $communitiesCards]);
get_template_part('template-parts/faculties-cards', false, ['data' => $facultiesCards]);

get_footer();