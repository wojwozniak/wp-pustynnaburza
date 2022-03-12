<?php get_header(); ?>
<!-- Podstawa strony z listą postów-->
		<article id="qna" class="single-wrapper">
			<div class="post-wrapper">
			<?php
				if( have_posts() ){
					while( have_posts() ) {
						the_post();
                        get_template_part('template-parts/content', 'archive');
					}
				}
			?>
			<?php the_posts_pagination(); ?>
			</div>
	    </article>
	
<?php get_footer(); ?>
    