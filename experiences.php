<?php /* Template Name: Expériences */ ?>

<?php get_header(); ?>

    <h1><?php the_field('experiences__header_title'); ?></h1>
    <p><?php the_field('experiences__header_subtitle'); ?></p>
    <img src="<?php the_field('experiences__header_image'); ?>"

    <?php if(have_rows('postes_occupes')) : ?>
    <?php while (the_repeater_field('postes_occupes')) : ?>


    <?php the_sub_field('poste'); ?>
    <?php the_sub_field('entreprise'); ?>
    <?php the_sub_field('entreprise_image'); ?>
    <?php the_sub_field('description'); ?>

    <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?> 

<?php get_footer(); ?>