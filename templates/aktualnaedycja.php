<?php
	/* Template Name: Aktualna edycja */
	get_header();
?>
<article class="site">
	<div class="wrapper">
		<section class="ce-content">
			<div class="ce-toptext">
				<h2>PUSTYNNA BURZA 2023</h2>
				<div class="ce-desc">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pb2023.png
					" alt="">
					<p class="normalplus">29.04.2023r. godz. 7.30 - 01.05.2023r. godz. 15.00 </br> Dąbrowa Górnicza, woj. Śląskie</p>
					<p>Pustynna Burza to gra survivalowo-militarna z 25 letnią tradycją i historią,</br>która testuje wytrzymałość uczestników podczas trzydniowych zmagań.</p>
					<p>Zapraszamy wędrowników i starszyznę harcerską (powyżej 16 roku życia),</br> tych, którzy chcą pokonać własne słabości, sprawdzić swoje umiejętności. 
					<p>Podczas gry uczestnicy będą realizować zadania survivalowe, obronne,</br> czy takie z zakresu pierwszej pomocy lub terenoznawstwa.</p>
					<p>Pustynna Burza to gra dla każdego powyżej 16 roku życia, kto chce pokonać własne słabości, sprawdzić swoją kondycję fizyczną i umiejętności. Wznowiona edycja gwarantuje przeżycie niezapomnianej przygody i wspomnienia na długie lata. Szansę na pokonanie wszystkich wyzwań mają tylko Ci najwytrwalsi!</p>
				</div> <!-- End of ce-desc -->
				<div class="ce-countdown-container">
					<h3>ODLICZAMY CZAS DO ROZPOCZĘCIA ZGŁOSZEŃ!</h3>
					<div class="ce-countdown">
					<?php get_template_part('template-parts/front-page', 'timer'); ?>
					<!--W zgloszenia pojawi się napis zgłoszenia kończą się i obliczona data -->
			<h4 class="h2 zgloszenia"></h4>
					</div> <!-- End of ce-countdown -->
				</div> <!-- End of ce-countdown-container -->
			</div> <!-- End of ce-toptext -->
		</section> <!-- End of ce-content -->
	</div>
	<section class="ce-about">
		<div class="ce-about-text">
			<p id="ce-quote-text">
				"Dwieście gardeł z siłą i mocą wykrzykujące w noc słowa piosenki, zjednoczone pomimo rywalizacji. I właśnie te chwile, kiedy uczestnicy zapominali o punktacji, kiedy pomimo różnic i tego, że się nie znali, zaczynali współpracować i działać jak jeden zmęczony, niewyspany, przemoczony organizm z wiecznie obtartymi stopami – to była cała kwintesencja Pustynnej Burzy.”
			</p>
			<p id="ce-quote-author" class="bold">~ Makos</p>
		</div> <!-- End of ce-about-text -->
	</section>  <!-- End of ce-about -->
	<div class="wrapper">
		<section id="ce-aspects">
			<div class="title-wrapper">
				<h2>ASPEKTY GRY</h2>
				<p>Zastanawiasz się, jakie atrakcje mogą Cię spotkać podczas Pustynnej Burzy?</br>
				To przede wszystkim techniki harcerskie w rozszerzonej wersji.</br>
				Gwarantujemy przeżycie niezapomnianej przygody i wspomnienia na długie lata. Szansę na pokonanie wszystkich wyzwań mają tylko najwytrwalsi!</p>
			</div>
			<div class="ce-aspects-div">
				<div class="ce-aspect">
					<img class="ce-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/aspektsamarytanka.jpg">
					<div class="ce-aspect-text">
					<h4>SAMARYTANKA</h4>
					<p class="smalltext">Doskonalenie i test wiedzy z zakresu udzielania pierwszej pomocy.</p>
					</div>
				</div>
				<div class="ce-aspect">
					<img class="ce-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/aspektprzetrwanie.jpg">
					<div class="ce-aspect-text">
					<h4>PRZETRWANIE</h4>
					<p class="smalltext">Możliwośc poznania siebie samego, swojej wytrzymałości, siły ciała, ducha i rozumu.</p>
					</div>
				</div>
				<div class="ce-aspect">
				<img class="ce-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/aspektwoda.jpg">
					<div class="ce-aspect-text">
					<h4>TECHNIKI WODNE</h4>
					<p class="smalltext">Zbadanie własnych możliwości, a także nowe wyzwanie i pokonanie swoich słabości.</p>
					</div>
				</div>
				<div class="ce-aspect">
				<img class="ce-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/aspektzagadki.jpg">
					<div class="ce-aspect-text">
					<h4>ZAGADKI LOGICZNE</h4>
					<p class="smalltext">Ćwiczenia, nie tylko te fizyczne, które pobudzą waszą wyobraźnię.</p>
					</div>
				</div>
				<div class="ce-aspects-div">
				<div class="ce-aspect">
					<img class="ce-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/aspektwedrowka.jpg">
					<div class="ce-aspect-text">
					<h4>WĘDRÓWKA</h4>
					<p class="smalltext">Wędrówka z plecakiem, czyli ta fizyczna, ale także ta intelektualna.</p>
					</div>
				</div>
				<div class="ce-aspect">
					<img class="ce-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/aspektwspinaczka.jpg">
					<div class="ce-aspect-text">
					<h4>WSPINACZKA</h4>
					<p class="smalltext">Doskonalenie ciała, poprawienie sprawności fizycznej, a może także nowe doświadczenie.</p>
					</div>
				</div>
				<div class="ce-aspects-div">
				<div class="ce-aspect">
					<img class="ce-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/aspektbraterstwo.jpg">
					<div class="ce-aspect-text">
					<h4>BRATERSTWO</h4>
					<p class="smalltext">Idealne miejsce do współdziałania i poznania nowych harcerskich przyjaciół.</p>
					</div>
				</div>
				<div class="ce-aspect">
					<img class="ce-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/aspektprzygoda.jpg">
					<div class="ce-aspect-text">
					<h4>PRZYGODA</h4>
					<p class="smalltext">Niezapomniane przezycia i nowe doświadczenia, które, mamy nadzieję, przyciągną Was ponownie.</p>
					</div>
				</div>
			</div>
		</section>
	</div>
</article>
<?php get_footer(); ?>