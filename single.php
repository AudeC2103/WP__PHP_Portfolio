<?php get_header(); ?>

<h1><?php the_title(); ?></h1>

<div>
<?php the_content(); ?>
</div>

<?php echo get_the_date(); ?>
<?php the_author(); ?>

<?php get_footer(); ?>