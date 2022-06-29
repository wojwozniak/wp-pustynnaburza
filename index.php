<?php get_header(); ?>
<!-- Podstawa strony z listą postów-->
		<article class="site">
			<div class="wrapper">
				<div class="title-wrapper">
					<h2>AKTUALNOŚCI</h2>
				</div>
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
    