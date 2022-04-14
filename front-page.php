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
		<article class="opis-content">
        <h2 class="h2 timer-title">Odliczamy czas do rozpoczęcia zgłoszeń!</h2>
		<?php get_template_part('template-parts/front-page', 'timer'); ?>
        <div class="button-container"><button class="btn join-btn"><i class="fa-solid fa-check bigicon"></i>&nbsp Zgłaszam swój patrol!</button></div>
		<!--W zgloszenia pojawi się napis zgłoszenia kończą się i obliczona data -->
		<h4 class="h2 zgloszenia"></h4>
      </article>
	</section>
	<!-- Sekcja z opisem -->
	<section id="description" class="section">
		<div class="desc-content">
			<h2 class="h2">O PUSTYNNEJ BURZY</h2>
				<p class="text">
					Pustynna Burza to gra survivalowo-militarna z 25 letnią tradycją i historią, która testuje wytrzymałość uczestników podczas trzydniowych zmagań na terenie Jury Krakowsko-Częstochowskiej.
					Podczas gry uczestnicy będą realizować zajęcia survivalowe, obronne, czy takie z zakresu pierwszej pomocy lub terenoznawstwa.
					Reaktywowana edycja imprezy odbędzie się w maju 2023 roku w Dąbrowie Górniczej!
				</p>
				<button class="btn d-more">
					Dowiedz się więcej!
				</button>
				
		</div>	
	</section>
	<section id="end-section">
		<h2 class="h2">MASZ JESZCZE JAKIEŚ PYTANIA?</h2>
		<button class="btn d-more">
					Skontaktuj się z nami!
				</button>
	</section>

</div> <!-- container div -->

<?php
	get_footer();
?>
    

