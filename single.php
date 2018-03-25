<?php
/**
 * The main template file
 */
get_header(); ?>

<main>

    <?php while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>

        <?php echo the_content(); ?>

    <?php endwhile; ?>
    
    <?php comments_template(); ?>

</main>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
