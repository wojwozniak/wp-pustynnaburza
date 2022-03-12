<?php get_header(); ?>
<div class="single-wrapper">
	<article class="article">
		<header>
			<h1 class="post-title"><?php the_title(); ?> </h1>
		</header>
		<?php
			if( have_posts() ){
				while( have_posts() ) {
					the_post();
					get_template_part('template-parts/content', 'article');
				}
			}
		?>		
	</article>
</div>
<?php get_footer(); ?>
    
