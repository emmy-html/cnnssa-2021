<?php /* Template Name: Other Ways To Get Involved */ ?>
<?php get_header(); ?>

<main id="content">
<section id="general-page-template">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1>

<?php the_content(); ?>


<?php endwhile; endif; ?>
</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>