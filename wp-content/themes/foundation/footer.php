<?php
$header_1 = get_field('header_1', 'option');
$text_1 = get_field('text_1', 'option');
$header_2 = get_field('header_2', 'option');
$header_3 = get_field('header_3', 'option');
$text_2 = get_field('text_2', 'option');
$header_4 = get_field('header_4', 'option');
$footer_form = get_field('footer_form', 'option');
$header_5 = get_field('header_5', 'option');
?>

<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-8">
                <?php if($header_1) { ?>
                  <h2 class="footer-heading mb-4"><?php printf(esc_html__('%1$s', 'wayup'), $header_1); ?></h2>
                <?php } ?>
                <?php if($text_1) { ?>
                  <p><?php printf(esc_html__('%1$s', 'wayup'), $text_1); ?></p>
                <?php } ?>
              </div>
              <div class="col-md-4 ml-auto">
                <?php if($header_2) { ?>
                  <h2 class="footer-heading mb-4"><?php printf(esc_html__('%1$s', 'wayup'), $header_2); ?></h2>
                <?php } ?>
                <?php
                  wp_nav_menu( [
                    'theme_location'  => 'menu-footer',
                    'container'       => '',
                    'menu_class'      => 'list-unstyled',
                    'menu_id'         => '',
                    'echo'            => true,
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  ] );
                ?>
              </div>
              
            </div>
          </div>
          <div class="col-md-4 ml-auto">

            <form class="mb-5">
              <div class="mb-5">
                <?php if($header_3) { ?>
                  <h2 class="footer-heading mb-4"><?php printf(esc_html__('%1$s', 'wayup'), $header_3); ?></h2>
                <?php } ?>
                <?php if($text_2) { ?>
                  <p><?php printf(esc_html__('%1$s', 'wayup'), $text_2); ?></p>
                <?php } ?>
              </div>
              <?php if($header_4) { ?>
                <h2 class="footer-heading mb-4"><?php printf(esc_html__('%1$s', 'wayup'), $header_4); ?></h2>
              <?php } ?>
              <?php if($footer_form) {
                echo do_shortcode($footer_form);
              } ?>
              <!-- <form action="#" method="post">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="submit" id="button-addon2">Subscribe</button>
                  </div>
                </div>
              </form> -->

              <?php if($header_5) { ?>
                <h2 class="footer-heading mb-4"><?php printf(esc_html__('%1$s', 'wayup'), $header_5); ?></h2>
              <?php } ?>
                <a href="#" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <?php esc_html_e('Copyright', 'elementor') ?> &copy;<script>document.write(new Date().getFullYear());</script> <?php esc_html_e('All rights reserved | This template is made with', 'elementor') ?> <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" ><?php esc_html_e('Colorlib', 'elementor') ?></a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div>

<?php wp_footer(); ?>

</body>
</html>
