<div class="post-container">
	<header class="content-header">
		<div class="meta">
            <span class="date"><?php the_date(); ?></span>
            <span class="tags">
                <?php
                the_tags('<span class="tag"> <i class="fa fa-tag"></i> ', '    </span><span class="tag"><i class="fa fa-tag"></i> ', '</span>');
                ?>
            </span>
        </div>
	</header>
    <?php
    the_content();
    ?>


</div>