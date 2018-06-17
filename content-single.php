<div class="post-entry">
    <h2>content-single.php file</h2>
    <h6><?php the_author(); ?>, <?php the_date(); ?></h6>
    <h2><?php the_title(); ?></h2>

    <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive']);
    } ?>

    <p><?php the_content(); ?></p>
</div>