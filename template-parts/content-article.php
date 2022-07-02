<div class="site">
    <div class="wrapper" id="single-post-wrapper">
        <?php the_post_thumbnail('thumbnail',['class' => 'thumbnail', 'title' => 'Feature image']); ?>
        <div class="meta">
            <h2><?php the_title() ?></h2>
            <span class="date"><?php the_date(); ?></span>
        </div>
        <?php the_content(); ?>
    </div>
</div>