<div class="sidebar">

    <div class="sidebar__box">
        <h3><?php the_author_meta('user_nicename'); ?></h3>
        <p><?php the_author_meta('description'); ?></p>
    </div>

    <div class="sidebar__box">
        <h3>Archives</h3>
        <ul>
            <?php wp_get_archives(); ?>
        </ul>
    </div>

</div>