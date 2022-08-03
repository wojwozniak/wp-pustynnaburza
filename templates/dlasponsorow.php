<?php
	/* Template Name: Dla sponsorów */
	get_header();
?>
<article id="media" class="site">
	<div class="wrapper">
        <div class="title-wrapper">
            <h2>DLA SPONSORÓW</h2>
        </div>
        <section class="sponsor">
            <div class="sponsor-intro">
            <p>
                    Związek Harcerstwa Polskiego to organizacja wychowawcza. Inwestując w naszą grę, inwestujesz w rozwój i wychowanie młodego człowieka. 
                    Nasze działania wpisują się także w cele zrównoważonego rozwoju.
                 </p>
                <p>
                    Pustynna Burza to gra dla każdego, powyżej 16 roku życia,
                    kto chce pokonać własne słabości, sprawdzić swoją kondycję fizyczną 
                    i wiele innych umiejętności. Orgazniowana przez Hufiec ZHP Dąbrowa Górnicza (Chorągwiew Śląska).
                </p>
                     <div class="title-wrapper-small">
                         <h5>Jak przystąpić do współpracy?</h5>
                     </div>
                         <p>
                             Npisz do nas za pośrednictwem maila <a href="mailto:pustynna.burza@dabrowagornicza.zhp.pl">pustynna.burza@dabrowagornicza.zhp.pl</a>,
                             w którym zawrzesz nazwę swojej firmy/organizacji/drużyny oraz imię i nazwisko, a także dane kontaktowe.
                             Na pewno się do Ciebie odezwiemy!
                         </p>
                     <div class="title-wrapper-small">
                         <h5>Co zyskujesz?</h5>
                     </div>
                         <p>
                             Promocję własnej działalności poprzez social media Pustynnej Burzy, jak i podczas samej gry.
                             Jesteśmy nastawieni na promocję wśród społeczności harcerskiej w województwie Śląskim, ale także na terenie całego kraju.
                             Skupiamy się przede wszystkim na promocji online, ze względu na oczekiwany duży zasięg gry, jak i szybki przesył informacji poprzez
                             media społecznościowe
                         </p>

                <div class="media-wrapper">
                    <div class="media-wrapper-text">
                        <a href="#">
                            <i class="fa-solid fa-file-pdf"></i>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
                            <p class="text">Poznaj Pusynną Burzę</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="sponsor-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/PUZZLE.svg" alt="">
            </div>
            
        </section> <!-- End of sponsor section -->
        <section class="sponsor">
            <?php get_template_part('template-parts/contact-data'); ?>
            <?php get_template_part('template-parts/map'); ?>
        </section>
	</div> <!-- End of wrapper -->
</article>
<?php get_footer(); ?>