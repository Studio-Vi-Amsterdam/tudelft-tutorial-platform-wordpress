<?php
/*
    Template Name: Labs Template
*/
?>

<?php get_header(); ?>

<?php the_content(); ?>

<?= get_template_part('template-parts/labs/hero') ?>
<?= get_template_part('template-parts/labs/cards-with-categories') ?>


<?php get_footer(); ?>