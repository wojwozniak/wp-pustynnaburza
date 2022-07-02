<?php
   /* Template Name: Strona startowa */
	get_header();
?>

<!-- Remember to add new page and set it's slug to front-page, and then set this page as home in reading menu -->

<div id="container">
	<!-- Pierwsza sekcja -->
	<section id="home" class="section">
		<h1 class="title"> Pustynna Burza </h1>
	</section> <!-- end of home section -->
	<!-- Sekcja z odliczaniem -->
	<section id="opis" class="section small-section opis">
		<!-- Odliczanie -->
		<article class="opis-content">
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
				Reaktywowana edycja imprezy odbędzie się w maju 2023 roku w Dąbrowie Górniczej!
			</p>
			<button class="btn d-more"><i class="fa-solid fa-info"></i>&nbsp Dowiedz się więcej</button>	
		</div>	<!-- end of desc content -->
		<div class="desc-photo"></div>
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
						echo "<div class='end-post'>";
							if(has_post_thumbnail()){ the_post_thumbnail('thumbnail',['class' => 'thumbnail', 'title' => 'Feature image']);} 
			   				echo "<div class='end-title'><a href=";
							the_permalink();
							echo "target='_blank'>";
							the_title();
						echo "</a></div></div>";
						endwhile;
						wp_reset_postdata();
					endif; 
				?>
			</div> <!-- end of posts wrapper -->
			<button class="btn d-more">
				<i class="fa-solid fa-folder-plus"></i>&nbsp Więcej postów
			</button>
		</div> <!-- end of posts section -->
		<div id="end-section-question">
			<h2>PYTANIA?</h2>
			<button class="btn d-more">
				<i class="fa-solid fa-address-card"></i>&nbsp Skontaktuj się z nami
			</button>
		</div> <!-- end of question div -->
	</section> <!-- end of ending section -->
</div> <!-- end of container div -->

<?php
	get_footer();
?>
    

