<?php
   /* Template Name: Strona startowa */
	get_header();
?>

<!-- Remember to add new page and set it's slug to front-page, and then set this page as home in reading menu -->

<div id="container">
	<!-- Pierwsza sekcja -->
	<section id="home" class="section">
		<h1 class="title"> Pustynna Burza </h1>
	</section>
	<!-- Sekcja z odliczaniem -->
	<section id="opis" class="section small-section opis">
		<!-- Odliczanie -->
    	<?php get_template_part('template-parts/front-page', 'timer'); ?>
		<article class="opis-content">
        <h3>Zgłoszenia ruszyły!</h3>
        <div class="button-container"><button class="btn join-btn"><i class="fa-solid fa-check bigicon"></i>&nbsp Zgłaszam swój patrol!</button></div>
		<!--W zgloszenia pojawi się napis zgłoszenia kończą się i obliczona data -->
		<h4 class="zgloszenia"></h4>
      </article>
	</section>
	<section class="spacer layer1"></section>
	<!-- Sekcja z opisem -->
	<section id="description" class="section">
			<h2>O Pustynnej Burzy</h2>
	</section>
	<section class="end-section">
		<h2 class="end-title">Masz jeszcze jakieś pytania?</h2>
	</section>

</div> <!-- container div -->

<?php
	get_footer();
?>
    

