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
                    Pustynna Burza to gra dla każdego, powyżej 16 roku życia,
                    kto chce pokonać własne słabości, sprawdzić swoją kondycję fizyczną 
                    i wiele innych umiejętności. Wznowiona edycja gwarantuje przeżycie niezapomnianej przygody i wspomnienia na długie lata. 
                    Szansę na pokonanie wszystkich wyzwań mają tylko Ci najwytrwalsi!
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pb10.jpg" alt="">
            </div>
            
        </section> <!-- End of sponsor section -->
        <section class="sponsor">
            <?php get_template_part('template-parts/contact-data'); ?>
            <?php get_template_part('template-parts/map'); ?>
        </section>
	</div> <!-- End of wrapper -->
</article>
<?php get_footer(); ?>