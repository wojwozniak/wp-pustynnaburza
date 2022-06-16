
<footer class="footer">
      <div class="footer-content">
            <div class="footer-links">
                  <div class="socials">
                        <h3 class="h3">ZNAJDŹ NAS TUTAJ</h3>
                        <ul class="text">
                              <li>
                              <a href="https://www.facebook.com/grapustynnaburza" target="_blank"><li><i class="fa-brands fa-facebook"></i>&nbsp;Facebook</a></li>
                              <li><a href="https://www.instagram.com/_pustynnaburza_" target="_blank"><li><i class="fa-brands fa-instagram"></i>&nbsp;Instagram</a></li>
                        </ul>             
                  </div>
                  <div class="footer-menu-wrapper">
                        <h3 class="h3">NAWIGACJA</h3>
                  <?php
                        wp_nav_menu(
                              array(
                                    'menu' => 'footer',
                                    'container' => '',
                                    'theme_location' => 'footer',
                                    'items_wrap' => '<ul id="footer-menu" class="footer-menu text">%3$s</ul>',
                                    'container_aria_label' => 'footer-menu'
                              )
                        )
                  ?>
                  </div>
            </div>
            <div class="parters">
                  <h3 class="h3">PARTNERZY</h3>
            </div>
      </div>
      <div class="ending-wrapper">
            <div class="footer-logo"></div>
            <div class="ending-wrapper-text text">
                  <!--JS script automatically adds years to this paragraph - want to change text? Change it in js file! -->
                  <p class="copyright">&nbsp;Copyright © 2022 Pustynna Burza </p>
                  <p class ="footer-separator">&nbsp;|</p>
                  <p class="host"><a href="https://dabrowagornicza.zhp.pl/" target="_blank">&nbsp; ZHP Hufiec Dąbrowa Górnicza</a></p>
                  <p class ="footer-separator">&nbsp;|</p>
                  <a id="author" href="https://github.com/wojwozniak">&nbsp;Autor</a>
            </div>
      </div>            
      
</footer>

 <?php
    	wp_footer();
    ?>
</body>