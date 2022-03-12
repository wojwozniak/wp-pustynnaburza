<?php
	get_header();
?>

<section class="single-wrapper c404">
    <h1> Nie znaleziono takiej strony! </h1>
    <div class="c404-content">
        <div class="c404-item">
            <h3>Możesz spróbować skorzystać z wyszukiwarki</h2>
            <?php
                get_search_form();
            ?>
        </div>
        <div class="c404-item">
            <h3>lub wrócić na stronę główną</h2>
            <button class="btn"><a class="c404-home-btn" href="<?php echo get_home_url(); ?>">Strona główna</a></button>
        </div>
    </div>
</section>

<?php
    get_footer();
?>
    