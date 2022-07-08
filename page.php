<?php get_header(); ?>
<article class="site">
	<div class="wrapper">
        <div class="title-wrapper">
            <h2><?php wp_title(''); ?></h2>
        </div>
        <div>
            <?php echo the_content(); ?>
        </div>
    </div>
</article>
	    
<?php get_footer(); ?>
    
