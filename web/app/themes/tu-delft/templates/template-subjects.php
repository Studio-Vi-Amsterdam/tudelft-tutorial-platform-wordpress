<?php
/*
    Template Name: Subjects Template
*/
?>

<?php get_header(); ?>

<?php the_content(); ?>

<?= get_template_part('template-parts/subjects/hero') ?>
<?= get_template_part('template-parts/subjects/cards-with-categories') ?>


<?php get_footer(); ?>