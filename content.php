<div class="post-entry">
    <h2>content.php file</h2>
    <h6><?php the_author(); ?>, <?php the_date(); ?></h6>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php the_excerpt(); ?></p>
    <a href="<?php comments_link(); ?>">
        <?php
        printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( 						get_comments_number() ) ); ?>
    </a>
</div>