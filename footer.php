
<footer class="footer">
      <div class="footer-content">
            <div class="footer-links">
                  <div class="socials">
                        <h4>ZNAJDŹ NAS TUTAJ</h4>
                        <ul>
                              <a href="#"><li><i class="fa-brands fa-facebook"></i>&nbsp;Facebook</li></a>
                              <a href="#"><li><i class="fa-brands fa-instagram"></i>&nbsp;Instagram</li></a>
                        </ul>             
                  </div>
                  <div class="footer-menu-wrapper">
                        <h4>NAWIGACJA</h4>
                  <?php
                        wp_nav_menu(
                              array(
                                    'menu' => 'footer',
                                    'container' => '',
                                    'theme_location' => 'footer',
                                    'items_wrap' => '<ul id="footer-menu" class="footer-menu">%3$s</ul>'
                              )
                        )
                  ?>
                  </div>
            </div>
            <div class="parters">
                  <h4>PARTNERZY</h4>
            </div>
      </div>
      <div class="ending-wrapper">
            <div class="footer-logo"></div>
            <div class="ending-wrapper-text">
                  <!--Jest napisany skrypt automatycznie dodający kolejne lata do tego paragrafu - nie zmieniać klasy! -->
                  <p class="copyright">&nbsp;Copyright © 2022 Pustynna Burza </p>
                  <p class ="footer-separator">&nbsp;|</p>
                  <a href="https://dabrowagornicza.zhp.pl/" target="_blank"><p class="host">&nbsp; ZHP Hufiec Dąbrowa Górnicza</p></a>
            </div>
      </div>            
      
</footer>

 <?php
    	wp_footer();
    ?>
</body>