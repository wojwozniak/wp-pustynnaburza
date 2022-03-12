<?php
	get_header();
?>

<section class="section c404">
    <h1> Nie znaleziono takiej strony! </h1>
    <div class="c404-content">
        <div class="search-form">
            <h3>Możesz spróbować skorzystać z wyszukiwarki</h2>
            <?php
                get_search_form();
            ?>
        </div>
        <div class="return-homepage">
            <h3>lub wrócić na stronę główną</h2>
            <a href="<?php echo get_home_url(); ?>"><button class="btn">Strona główna</button></a>
        </div>
    </div>
</section>

<?php
    get_footer();
?>
    