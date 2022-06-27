<?php
	/* Template Name: Kontakt */
	get_header();
?>
 
<article id="contact-section" class="single-wrapper site">
    <div id="contact-wrapper" class="c-wrapper">
    <h1 class="contact-title h3">KONTAKT</h1>
        <div class="c-first">
            <section class="contact-info">
                <div class="contact-data">
                    <p class="smalltext normalplus">Hufiec ZHP Dąbrowa Górnicza</p>
                    <p class="smalltext normalplus">Komenda Gry "Pustynna Burza"</p>
                    <p class="smalltext normalplus">41-300 Dąbrowa Górnicza</p>
                    <p class="smalltext normalplus">ul. Królowej Jadwigi 8</p>
                </div> <!-- End of contact-data -->
                <p class="smalltext"><a href="mailto:pustynna.burza@dabrowagornicza.zhp.pl">pustynna.burza@dabrowagornicza.zhp.pl</a></p>
                <p class="smalltext">+48 123 123 123</p> 
                <div class="c-socials">
                <?php get_template_part('template-parts/social-links'); ?>
                </div> <!-- End of c-socials -->
            </section> <!-- End of contact-info -->
            <section class="contact-form">
                <div class="contact-form-wrapper"></div>
            </section> <!-- End of contact-form -->
        </div> <!-- End of c-first -->
        <section class="c-us">
            <h2 class="h3 c-us-title">KOMENDA GRY</h2>
            <div class="c-us-list">
                <div class="c-us-div">
                    <!-- # Start of single person -->
                    <div class="c-person">
                        <div class="c-person-pic">
                            <img class = "c-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/kszymczak.jpg">
                        </div>
                        <div class="c-person-data">
                            <p class="smalltext normalplus">phm. Kacper Szymczak</p>
                            <p class="smalltext normalplus">Komendant Pustynnej Burzy</p>
                        </div>
                        <div class="c-person-contactdata">
                            <p class="smalltext">k.szymczak@zhp.net.pl</p>
                        </div>
                    </div> 
                    <!-- # End of single person -->
                </div> <!-- End of c-us-div -->
                <div class="div c-us-staff">
                    <!-- # Start of single person -->
                    <div class="c-person">
                        <div class="c-person-pic">
                            <img class = "c-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/jswiercz.jpg">
                        </div>
                        <div class="c-person-data">
                            <p class="smalltext normalplus">Janek "Kenaj" Świercz</p>
                            <p class="smalltext normalplus">Funkcja</p>
                        </div>
                        <div class="c-person-contactdata">
                            <p class="smalltext">jan.swiercz@zhp.net.pl</p>
                        </div>
                    </div> 
                    <!-- # End of single person -->
                    <!-- # Start of single person -->
                    <div class="c-person">
                        <div class="c-person-pic">
                            <img class = "c-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/dbelicki.jpg">
                        </div>
                        <div class="c-person-data">
                            <p class="smalltext normalplus">pwd. Dominik "Bela" Belicki</p>
                            <p class="smalltext normalplus">Funkcja</p>
                        </div>
                        <div class="c-person-contactdata">
                            <p class="smalltext">dominik.belicki@zhp.net.pl</p>
                        </div>
                    </div> 
                    <!-- # End of single person -->
                    <!-- # Start of single person -->
                    <div class="c-person">
                        <div class="c-person-pic">
                            <img class = "c-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/mgradal.jpg">
                        </div>
                        <div class="c-person-data">
                            <p class="smalltext normalplus">pwd. Maciej Grądal</p>
                            <p class="smalltext normalplus">Funkcja</p>
                        </div>
                        <div class="c-person-contactdata">
                            <p class="smalltext">maciej.gradal@zhp.net.pl</p>
                        </div>
                    </div> 
                    <!-- # End of single person -->
                </div> <!-- End of c-us-staff -->
            </div> <!-- End of c-us-list -->
        </section> <!-- End of c-us -->
    </div> <!-- End of c-wrapper -->
    
</article>

<?php get_footer(); ?>