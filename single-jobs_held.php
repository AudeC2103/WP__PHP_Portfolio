<?php get_header(); ?>
<h1><?php the_title(); ?></h1>

<p><?php the_field('job__subtitle'); ?></p>
<p><?php the_field('job__start_date'); ?></p>

<?php echo get_the_date(); ?>
<?php the_author(); ?>
 
<?php get_footer(); ?>
