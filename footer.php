<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package undercustoms
 */

?>
  </div><!-- #content -->

  <!-- footer -->
  <footer id="site-footer" class="site-footer">
    <div class="footer-top py-5">
      <div class="container">

        <div class="row">
          <div class="col-lg-3 col-md-6 pt-1">
            <div class="footer-logo text-centerxx text-md-start">
              <?php
              if (has_custom_logo()) :
                $logo_img = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
                $logo_img = $logo_img[0];
              else :
                $logo_img = get_stylesheet_directory_uri() . "/img/logo-wht.png";
              endif;
              ?>
              <a class="logo" href="<?php echo site_url(); ?>">
                <!-- <img src="<?php echo $logo_img; ?>" alt=""> -->
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-wht.png" alt="">
              </a>
            </div>
            <div class="social-menu text-centerxx pt-3">
              <?php wp_nav_menu( array( 'theme_location' => 'menu-social', 'menu_class' => 'list-inline' ) ); ?>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 pe-md-5">
            <h5 class="footer-title mt-5 mt-lg-0">About us</h5>
            <div class="footer-text pe-md-5">
              <?php $footer_info = ( !empty(get_theme_mod('undercustoms_contact_info_address')) ) ? get_theme_mod('undercustoms_contact_info_footer_info') : 'Set Footer Info text in theme Customize Options' ; ?>
              <p> <?php echo $footer_info; ?> </p>
            </div>
          </div>

          <div class="col-12 col-lg col-md-6">
            <h5 class="footer-title mt-5 mt-lg-0">Browse</h5>
            <div class="footer-menu">
              <?php wp_nav_menu( array( 'theme_location' => 'menu-footer', 'menu_class' => 'list-unstyled' ) ); ?>
            </div>
          </div>

          <div class="col-12 col-lg-3 col-md-6">
            <h5 class="footer-title mt-5 mt-lg-0">Reach us</h5>
            <div class="footer-text">
              <?php $phone_mod = ( !empty(get_theme_mod('undercustoms_contact_info_phone')) ) ? get_theme_mod('undercustoms_contact_info_phone') : '+1 123 456 7890' ; ?>
              <p class="mb-1"><i class="fa fa-phone"></i> <a href="tel:<?php echo $phone_mod; ?>"><?php echo $phone_mod; ?></a></p>
              <?php $email_mod = ( !empty(get_theme_mod('undercustoms_contact_info_email')) ) ? get_theme_mod('undercustoms_contact_info_email') : 'youremail@mail.com' ; ?>
              <p class="mb-1"><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $email_mod; ?>"><?php echo $email_mod; ?></a></p>
              <?php $address_mod = ( !empty(get_theme_mod('undercustoms_contact_info_address')) ) ? get_theme_mod('undercustoms_contact_info_address') : 'Address Line, Country' ; ?>
              <p class="mb-1"><i class="fa fa-map-marker"></i> <?php echo $address_mod; ?> </p>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-12">
            <h5 class="footer-title mt-5 mt-lg-0">Newsletter</h5>
            <div class="newsletter-form">
              <?php echo do_shortcode('[contact-form-7 id="50" title="Newsletter form 1"]'); ?>
            </div>
          </div> -->

        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row py-4">

          <div class="col-md-3">
          </div>

          <div class="col-md">
            <div class="copyrights-text">
              <p class="text-muted text-start text-md-start m-0">
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>, All Rights Reserved.
              </p>
            </div>
          </div>

          <div class="col-md-3">
            <div class="copyrights-text">
              <p class="text-muted text-start text-md-start m-0">
                Designed by <a href="http://intiger.com" target="_blank">Intiger Web</a>.
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>

  </footer>

</div> <!-- #site -->

<!-- back to top -->
<div class="back-to-top"> <i class="fa fa-chevron-up"></i> </div>

<!-- Final Scripts -->
<!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script> -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/simpleParallax.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/fontawesome.all.min.js" async></script>

<script>
jQuery(document).ready(function( $ ) { //noconflicts
  console.log('footer js initilized.');

  // Bootstrap menu on hover
  $("#site-navigation .nav.navbar-nav > li ul li.dropdown > a").addClass('dropdown-toggle');
  const $dropdown = $(".dropdown");
  const $dropdownMenu = $(".dropdown-menu");
  $(window).on("load resize", function() {
    if (this.matchMedia("(min-width: 768px)").matches) {
      $dropdown.hover(
        function() {
          const $this = $(this);
          $this.addClass('show');
          $this.children($dropdownMenu).addClass('show');
        },
        function() {
          const $this = $(this);
          $this.removeClass('show');
          $this.children($dropdownMenu).removeClass('show');
        }
      );
    } else {
      $dropdown.off("mouseenter mouseleave");
    }
  });

  // Swiper
  const swiper = new Swiper('.swiper-container', {
    loop: true,
    pagination: {
      el: '.swiper-pagination',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 5000,
    },
    centeredSlides: false,
    slidesPerView: 1,
    spaceBetween: 15,
    // Responsive breakpoints
    breakpoints: {
      576: { slidesPerView: 1, },
      768: { slidesPerView: 2, },
      992: { slidesPerView: 3, },
      1200: { slidesPerView: 4, }
    }
  });

  // enable popovers
  var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
  var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl)
  })



});
</script>

<?php wp_footer(); ?>
</body>
</html>