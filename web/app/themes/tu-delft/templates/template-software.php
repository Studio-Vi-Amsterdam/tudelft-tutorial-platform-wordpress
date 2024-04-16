<?php
/*
    Template Name: Testing Software Template
*/
?>

<?php get_header(); ?>

<?php the_content(); ?>

<?= get_template_part('template-parts/software/hero') ?>
<?= get_template_part('template-parts/software/cards-with-categories') ?>


<?php get_footer(); ?>