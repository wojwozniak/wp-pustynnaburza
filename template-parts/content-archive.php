<!-- Tutaj pojawia się lista postów -->

<article class="post-preview">
    <div class="post-elements">
        <?php the_post_thumbnail('thumbnail',['class' => 'thumbnail', 'title' => 'Feature image']); ?>
        <div class="media-body">
            <h3 class="preview-title"><a href=<?php the_permalink() ?>><?php the_title(); ?> </a></h3>
            <div class="meta">
                <span class="date"><?php the_date(); ?> </span>
                <span class="tags">
                <?php
                the_tags('<span class="tag"> <i class="fa fa-tag"></i> ', '    </span><span class="tag"><i class="fa fa-tag"></i> ', '</span>');
                ?>
                </span>
            </div>
            <div class="intro">    
                <?php the_excerpt(); ?>
            </div>
            <a class="more-link" href=<?php the_permalink() ?> > Czytaj więcej &rarr;</a>
        </div> <!-- media-body -->
    </div> <!-- post-elements -->
</article>