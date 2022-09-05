<?php
   /* Template Name: Strona startowa */
	get_header();
?>

<!-- Remember to add new page and set it's slug to front-page, and then set this page as home in reading menu -->

<div id="container">
	<!-- Pierwsza sekcja -->
	<section id="home" class="section">
		<h1 class="title"> Pustynna Burza </h1>
		<p id="title-scrolldown"><i class="fa-solid fa-angle-down"></i></p>
	</section> <!-- end of home section -->
	<!-- Sekcja z odliczaniem -->
	<section id="opis" class="section small-section opis">
		<!-- Odliczanie -->
		<article class="opis">
			<h2 class="timer-title">Odliczamy czas do rozpoczęcia zgłoszeń!</h2>
			<?php get_template_part('template-parts/front-page', 'timer'); ?>
			<!--
			<div class="button-container"><button class="btn join-btn"><i class="fa-solid fa-check bigicon"></i>&nbsp Zgłaszam swój patrol</button></div>
			-->
			<!--W zgloszenia pojawi się napis zgłoszenia kończą się i obliczona data -->
			<h2 class="zgloszenia"></h2>
    	</article> <!-- end of opis content -->
	</section> <!-- end of opis section -->
	<!-- Sekcja z opisem -->
	<section id="description" class="section">
		<div class="desc-content">
			<h2>O PUSTYNNEJ BURZY</h2>
			<p>
				Pustynna Burza to gra survivalowo-militarna z 25 letnią tradycją i historią, która testuje wytrzymałość uczestników podczas trzydniowych zmagań na terenie Jury Krakowsko-Częstochowskiej.
				Podczas gry uczestnicy będą realizować zajęcia survivalowe, obronne, czy takie z zakresu pierwszej pomocy lub terenoznawstwa.
				Zapraszamy wszystkich wędrowników i starszyznę harcerską.
				Reaktywowana edycja imprezy będzie odbywać się od 29 kwietnia do 1 maja 2023 roku w Dąbrowie Górniczej! 
			</p>
			<button type="button" class="btn d-more" onclick="location.href='<?php echo get_home_url(); ?>/informacje';">Dowiedz się więcej</button>	
		</div>	<!-- end of desc content -->
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pb2023.png" alt="Konkurencje pustynnej burzy" class="desc-photo">
	</section> <!-- end of description section -->
	<section id="end-section" class="section small-section">
		<div id="end-section-posts">
			<h2>AKTUALNOŚCI</h2>
			<div id="end-section-posts-wrapper">
				<?php
					$args = array('posts_per_page' => 3, 'order' => 'DESC');
					$rp = new WP_Query( $args );
					if($rp->have_posts()) :
						while($rp->have_posts()) : 
						$rp->the_post();
						echo "<div class='end-post'><a class='end-post-wrap' href='";
						the_permalink();
						echo "' target='_blank'>";
							if(has_post_thumbnail()){ the_post_thumbnail('thumbnail',['class' => 'thumbnail', 'title' => 'Zdjecie postu']);} 
			   				echo "</div></a>";
						endwhile;
						wp_reset_postdata();
					endif; 
				?>
				<a href="" id="end-section-more-posts"><i class="fa-solid fa-angle-right"></i></a>
			</div> <!-- end of posts wrapper -->
		</div> <!-- end of posts section -->
		<div id="end-section-question">
			<h2>MASZ JESZCZE JAKIEŚ PYTANIA?</h2>
			<div id="end-section-question-wrapper">
					<section class="contact-info">
					<?php get_template_part('template-parts/contact-data'); ?>
						<div class="c-socials">
							<?php get_template_part('template-parts/social-links'); ?>
						</div> <!-- End of c-socials -->
					</section> <!-- End of contact-info -->
					<p style="position: relative;">
						Zanim zadasz nam swoje pytania - sprawdz, czy już na nie odpowiadaliśmy.
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/liniaczarna.svg" alt="Wędrówka" class="linear-photo">
					</p>
							<button type="button" class="btn d-more" onclick="location.href='<?php echo get_home_url(); ?>/faq';">
							Pytania i odpowiedzi
							</button>
						</div>
				</section> <!-- end of ending section -->
			</div> <!-- end of container div -->

<?php
	get_footer();
?>