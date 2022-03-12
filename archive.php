<?php
	get_header();
?>
<article class="single-wrapper">
	<h3 class="kronika-title">Archiwum postów</h3>
	<ul>
	<?php wp_get_archives('type=yearly'); ?>
	</ul>
</article>
<?php get_footer(); ?>
    
