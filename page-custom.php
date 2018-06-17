<?php get_header(); ?>

    <h2>page-custom.php file</h2>

    <div class="main-container">
        <div class="content">

            <?php
            $args =  array(
                'post_type' => 'my-custom-post',
                'orderby' => 'menu_order',
                'order' => 'ASC'
            );
            $custom_query = new WP_Query( $args );
            while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                <div class="post-entry">
                    <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </div>

            <?php endwhile; ?>
        </div>

    </div>

<?php get_footer(); ?>