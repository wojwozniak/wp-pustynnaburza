      <footer>
            <div class="footer">
                  <h3 class="h3">SPONSORZY</h3>
                  <div class="slider">
                        <div class="slide-track">
                              <div class="slide">
                                    <img class="sponsor-logo" src="https://pustynnaburza.dabrowagornicza.zhp.pl/wp-content/uploads/2023/04/logo4.png" alt="Sponsor 1">
                              </div>
                              <div class="slide">
                                    <img class="sponsor-logo" src="https://pustynnaburza.dabrowagornicza.zhp.pl/wp-content/uploads/2023/04/logo2.png" alt="Sponsor 2">
                              </div>
                              <div class="slide">
                                    <img class="sponsor-logo" src="https://pustynnaburza.dabrowagornicza.zhp.pl/wp-content/uploads/2023/04/logo3.png" alt="Sponsor 3">
                              </div>
                              <div class="slide">
                                    <img class="sponsor-logo" src="https://pustynnaburza.dabrowagornicza.zhp.pl/wp-content/uploads/2023/04/LOGO5.png" alt="Sponsor 4">
                              </div>
                              <div class="slide">
                                    <img class="sponsor-logo" src="https://pustynnaburza.dabrowagornicza.zhp.pl/wp-content/uploads/2023/04/sponor1.png" alt="Sponsor 5">  
                              </div>
                              <div class="slide">
                                    <img class="sponsor-logo" src="https://pustynnaburza.dabrowagornicza.zhp.pl/wp-content/uploads/2023/04/SPONSOR-4.png" alt="Sponsor 6">  
                              </div>  
                              
                        </div>
                  </div>
                  <div class="footer-top">
                        <div class="footer-logo-container">
                              <a href="https://zhp.pl/" target="_blank">
                                    <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_zhp.png" alt="Logo ZHP" />
                              </a>
                                    <div>
                                          <a href="https://slaska.zhp.pl/" target="_blank">
                                    <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_chsl.png" alt="Logo Chorągwi Śląskiej" />
                              </a>
                              <a href="https://dabrowagornicza.zhp.pl/" target="_blank">
                                    <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_hdg.png" alt="Logo Hufca Dąbrowa Górnicza" />
                              </a> 
                                    </div>    
                        </div> 
                        <div class="footer-links">
                              <div class="socials">
                                    <h3 class="h3">ZNAJDŹ NAS TUTAJ</h3>
                                    <?php get_template_part('template-parts/social-links'); ?>
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
                  </div>
                  <!-- Paste partners.txt here when needed -->
            </div>
            <div id="footer-end" class="text">
                  <p class ="footer-separator">&nbsp;&nbsp;</p>
                  <!--JS script (main.js) automatically adds years to this paragraph -->
                  <p class="copyright">Copyright © 1995-2022 Pustynna Burza</p>
                  <p class ="footer-separator">&nbsp;&nbsp;|&nbsp;&nbsp;</p>
                  <p class="host"><a href="https://zhp.pl/" target="_blank">Związek Harcerstwa Polskiego</a></p>
                  <p class ="footer-separator">&nbsp;&nbsp;|&nbsp;&nbsp;</p>
                  <p class="host"><a href="https://slaska.zhp.pl/" target="_blank">Chorągiew Śląska</a></p>
                  <p class ="footer-separator">&nbsp;&nbsp;|&nbsp;&nbsp;</p>
                  <p class="host"><a href="https://dabrowagornicza.zhp.pl/" target="_blank">ZHP Hufiec Dąbrowa Górnicza</a></p>
                  <p class ="footer-separator">&nbsp;&nbsp;|&nbsp;&nbsp;</p>
                  <p><a href="<?php echo get_home_url(); ?>/prywatnosc" target="_blank">Polityka prywatności</a></p>
                  <p class ="footer-separator">&nbsp;&nbsp;|&nbsp;&nbsp;</p>
                  <p id="author"><a href="https://github.com/wojwozniak" target="_blank">Autor</a></p>
                  <p class ="footer-separator">&nbsp;&nbsp;</p>
            </div>
      </footer>
      <?php
            wp_footer();
      ?>
</body>