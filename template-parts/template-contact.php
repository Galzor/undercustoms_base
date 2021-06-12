<?php
/**
 * Template Name: Contact Us
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package undercustoms */
get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <div class="titlemon">
      <div class="container">
        <div class="title text-centerxx">
          <!-- <h3 class="entry-title"> <?php //the_title(); ?> </h3> -->
          <h3 class="entry-title"> <strong>Get in Touch</strong> with us </h3>
        </div>
      </div>
    </div>

    <section class="common-section py-0">
      <div class="container py-5">
        <div class="row">
          <div class="col-md-2">
            <h4 class="title-faden">Write to us</h4>
          </div>
          <div class="col-md-8 ps-md-5">
            <div class="card card-body">
              <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="common-section py-3 mb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <h4 class="title-faden">Reach us</h4>
          </div>

          <div class="col-md-4 ps-md-5">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title"> <i class="fa fa-phone"></i> <strong>Phone</strong></h5>
                <?php $phone_mod = ( !empty(get_theme_mod('undercustoms_contact_info_phone')) ) ? get_theme_mod('undercustoms_contact_info_phone') : 'Set Phone in theme options' ; ?>
                <p class="card-text mb-4"> <a href="tel:<?php echo $phone_mod; ?>"><?php echo $phone_mod; ?></a> </p>

                <h5 class="card-title"> <i class="fa fa-envelope"></i> <strong>Email</strong></h5>
                <?php $email_mod = ( !empty(get_theme_mod('undercustoms_contact_info_email')) ) ? get_theme_mod('undercustoms_contact_info_email') : 'Set Email in theme options' ; ?>
                <p class="card-text"> <a href="mailto:<?php echo $email_mod; ?>"><?php echo $email_mod; ?></a> </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 ps-md-5">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title"> <i class="fa fa-map-marker"></i> <strong>Address</strong></h5>
                <?php $address_mod = ( !empty(get_theme_mod('undercustoms_contact_info_address')) ) ? get_theme_mod('undercustoms_contact_info_address') : 'Set Address in theme options' ; ?>
                <p class="card-text"> <?php echo $address_mod; ?> </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="common-section border-top py-0">
      <div class="containerxxx">
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3630.6480552708117!2d54.36925401483795!3d24.497648365736005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e665f0223c5a1%3A0x220867721f16a675!2sAl%20Ferdous%20Tower%20-%20Al%20Salam%20Street%20-%20Zone%201E9-02%20-%20Abu%20Dhabi%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1622795706104!5m2!1sen!2sin" frameborder="0" style="width: 100%; height: 500px; border:none; display:block;" allowfullscreen></iframe>
        </div>
      </div>
    </section>


  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();