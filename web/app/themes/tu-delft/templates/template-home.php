<?php
/*
    Template Name: Home Template
*/
?>

<?php get_header(); ?>

<?php the_content(); ?>

<?= get_template_part('template-parts/banner') ?>
<?= get_template_part('template-parts/hero-text') ?>
<?= get_template_part('template-parts/section-wrapper') ?>
<?= get_template_part('template-parts/section-wrapper2') ?>


<?php get_footer(); ?>