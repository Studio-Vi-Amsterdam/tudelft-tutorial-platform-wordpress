<?php
/*
    Template Name: Testing Software Template
*/

use TuDelft\Theme\Modules\Software\Software;
?>

<?php get_header(); ?>

<?php the_content(); ?>

<?= get_template_part('template-parts/software/hero') ?>

<?php get_template_part('template-parts/software/cards-with-categories', null, ['softwares' => Software::get_all_softwares()]); ?>


<?php get_footer(); ?>