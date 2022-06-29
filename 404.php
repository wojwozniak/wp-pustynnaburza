<?php
	get_header();
?>

<section class="site">
    <div class="wrapper c404">
        <div class="c404-left">
            <h2 class="h2">BŁĄD 404 - STRONA NIE ISTNIEJE</h2>
            <div class="c404-item">
                <h4 class="h4">NIESTETY NIE ZNALEZIONO STRONY KTÓREJ SZUKASZ. SPRAWDŹ CZY WPROWADZIŁEŚ POPRAWNY ADRES.</h4>
                <?php
                    get_search_form();
                ?>
            </div>
            <div class="c404-item c404-btn-container">
                <button class="btn"><a class="c404-home-btn" href="<?php echo get_home_url(); ?>">STRONA GŁÓWNA</a></button>
            </div>
        </div>
        <div class="c404-img-container">
            <img class="c404-img" src="<?php bloginfo('template_url'); ?>/assets/images/kompas.jpg" alt="Grafika z kompasem"/>
        </div>
    </div>
</section>

<?php
    get_footer();
?>
    