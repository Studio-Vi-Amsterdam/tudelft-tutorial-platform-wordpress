<?php
/*
    Template Name: Courses Template
*/
?>

<?php get_header(); ?>

<?php the_content(); ?>

<?= get_template_part('template-parts/hero') ?>
<?= get_template_part('template-parts/cards-with-categories') ?>


<?php get_footer(); ?>