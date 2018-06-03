<?php get_header(); ?>

    <h2>single.php file</h2>

    <div class="main-container">
        <div class="content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content-single', get_post_format() ); ?>

                <?php if ( comments_open() || get_comments_number() ) : ?>
                    <?php comments_template(); ?>
                <?php endif; ?>

            <?php endwhile; endif; ?>
        </div>

    </div>

<?php get_footer(); ?>