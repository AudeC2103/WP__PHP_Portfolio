<?php get_header(); ?>

    <h1><?php the_field('job_title'); ?></h1>
    <p><?php the_field('job_subtitle'); ?></p>
   
    <?php the_sub_field('poste'); ?>
    <?php the_sub_field('entreprise'); ?>
    <?php the_sub_field('entreprise_image'); ?>
    <?php the_sub_field('description'); ?>

<?php get_footer(); ?>
