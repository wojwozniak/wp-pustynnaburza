<?php
	/* Template Name: Kontakt */
	get_header();
?>
 
<article class="site">
    <div class="wrapper">
    <h2>KONTAKT</h2>
    <div class="c-first">
        <section class="contact-info">
            <div id="contact-data">
                <p class="normalplus">Hufiec ZHP Dąbrowa Górnicza</p>
                <p class="normalplus">Komenda Gry "Pustynna Burza"</p>
                <p class="normalplus">41-300 Dąbrowa Górnicza</p>
                <p class="normalplus">ul. Królowej Jadwigi 8</p>
                <p class="smalltext">NIP: 634-019-54-83</p>
                <p class="smalltext">konto hufca: ING Bank Śląski 0/Dąbrowa Górnicza</p>
                <p class="smalltext">09 1050 1272 1000 0008 0033 3650</p>
            </div> <!-- End of contact-data -->
            <p class="smalltext"><a href="mailto:pustynna.burza@dabrowagornicza.zhp.pl">pustynna.burza@dabrowagornicza.zhp.pl</a></p>
            <p class="smalltext">+48 791 332 340</p> 
            <div class="c-socials">
            <?php get_template_part('template-parts/social-links'); ?>
            </div> <!-- End of c-socials -->
        </section> <!-- End of contact-info -->
        <section class="contact-form">
        <iframe src="https://forms.office.com/Pages/ResponsePage.aspx?id=Ho024XU55kyJPfw1H9RNzZnnXTZbvqdCr3YHVhTFAzhUN1NLTFI2NVQxUUEzV1pDQVZDNzNFUEtDVS4u&embed=true" frameborder="0" marginwidth="0" marginheight="0" style="border: none; max-width:100%; max-height:100vh" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen> </iframe>
        </section> <!-- End of contact-form -->
    </div> <!-- End of c-first -->
    <section class="c-us">
        <h2>KOMENDA GRY</h2>
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
                        <img class = "c-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/dbelicki.jpg">
                    </div>
                    <div class="c-person-data">
                        <p class="smalltext normalplus">pwd. Dominik "Bela" Belicki</p>
                        <p class="smalltext normalplus">Zespół ds. Programu</p>
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
                        <p class="smalltext normalplus">Zespół ds. Finansów</p>
                    </div>
                    <div class="c-person-contactdata">
                        <p class="smalltext">maciej.gradal@zhp.net.pl</p>
                    </div>
                </div> 
                <!-- # End of single person -->
                 <!-- # Start of single person -->
                 <div class="c-person">
                    <div class="c-person-pic">
                        <img class = "c-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/kkoza.jpg">
                    </div>
                    <div class="c-person-data">
                        <p class="smalltext normalplus">pwd. Karolina Koza</p>
                        <p class="smalltext normalplus">Zespół ds. Promocji</p>
                    </div>
                    <div class="c-person-contactdata">
                        <p class="smalltext">karolina.koza@zhp.net.pl</p>
                    </div>
                </div> 
                <!-- # End of single person -->
                 <!-- # Start of single person -->
                 <div class="c-person">
                    <div class="c-person-pic">
                        <img class = "c-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/mrobakowski.jpg">
                    </div>
                    <div class="c-person-data">
                        <p class="smalltext normalplus">Mateusz Robakowski</p>
                        <p class="smalltext normalplus">Zespół ds. Logistyki</p>
                    </div>
                    <div class="c-person-contactdata">
                        <p class="smalltext">mateusz.robakowski@zhp.net.pl</p>
                    </div>
                </div> 
                <!-- # End of single person -->
                 <!-- # Start of single person -->
                 <div class="c-person">
                    <div class="c-person-pic">
                        <img class = "c-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/jswiercz.jpg">
                    </div>
                    <div class="c-person-data">
                        <p class="smalltext normalplus">ćw. Janek "Kenaj" Świercz</p>
                        <p class="smalltext normalplus">Oboźny</p>
                    </div>
                    <div class="c-person-contactdata">
                        <p class="smalltext">jan.swiercz@zhp.net.pl</p>
                    </div>
                </div> 
                <!-- # End of single person -->
            </div> <!-- End of c-us-staff -->
        </div> <!-- End of c-us-list -->
    </section> <!-- End of c-us -->
    </div> <!-- End of c-wrapper -->
    
</article>

<?php get_footer(); ?>