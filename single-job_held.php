<?php get_header(); ?>

    <h1><?php the_field('job__title'); ?></h1>
    <p><?php the_field('job__subtitle'); ?></p>
    <p><?php the_field('job__start_date'); ?></p>

<?php get_footer(); ?>
