<?php while ( have_posts() ) : the_post(); ?>
    <div class="loop-post-single">
        <a href="<?php esc_url( the_permalink() ); ?>">
            <?php the_post_thumbnail( 'square-large' ); ?>
            <div class="loop-post-title"><?php the_title(); ?></div>
        </a>
    </div>
<?php endwhile; ?>
