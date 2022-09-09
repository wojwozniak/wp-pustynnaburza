<?php
	/* Template Name: Kontakt */
	get_header();
?>
 
<article class="site">
    <div class="wrapper">
        <div class="title-wrapper">
            <h2>KONTAKT</h2>
        </div>
    <div class="c-first">
        <section class="contact-info">
        <?php get_template_part('template-parts/contact-data'); ?>
            <div class="c-socials">
                <?php get_template_part('template-parts/social-links'); ?>
            </div> <!-- End of c-socials -->
        </section> <!-- End of contact-info -->
        <?php echo the_content(); ?>
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