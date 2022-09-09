<?php
	/* Template Name: Najczęściej zadawane pytania */
	get_header();
?>

<article class="site">
    <div class="wrapper">
        <div class="title-wrapper">
            <h2>PYTANIA I ODPOWIEDZI</h2>
        </div>
        <p>Jeżeli nie znalazłeś odpowiedzi na swoje pytanie, napisz do nas!</p>
        <!--Javascript uses this div to setup question opening/closing-->
        <div class="qna-wrapper">
            <?php echo the_content(); ?>
        </div>
    </div>
</article>

<?php get_footer(); ?>