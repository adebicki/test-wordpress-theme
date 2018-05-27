<?php get_header(); ?>

    <h2>Index file</h2>

    <div class="main-container">
        <div class="content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', get_post_format() ); ?>

            <?php endwhile; endif; ?>
        </div>

        <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>