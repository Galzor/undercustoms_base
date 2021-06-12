<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package undercustoms
 */

get_header();
?>

<div id="frontpage" class="frontpage-area">

  <section id="hero" class="hero-section">
    <div class="hero-slider">

      <div id="carouselHeroSlider" class="carousel slide carousel-fade carousel-dark" data-bs-ride="carousel" data-bs-interval="7000">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselHeroSlider" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#carouselHeroSlider" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#carouselHeroSlider" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo (!empty(get_theme_mod('undercustoms_slider1_image'))) ? get_theme_mod('undercustoms_slider1_image') : get_template_directory_uri() . '/img/default.jpg'; ?>" alt="">
            <div class="carousel-caption">
              <div class="container">
                <div class="caption-box">
                  <?php echo get_theme_mod('undercustoms_slider1_caption'); ?>
                </div>
              </div>
              <!--
              <h4>Sub Heading</h4>
              <h2>Main Heading</h2>
              <p>A small paragraph as complimentory text</p>
              <a href="#" class="btn">Know More</a>
              -->
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo (!empty(get_theme_mod('undercustoms_slider2_image'))) ? get_theme_mod('undercustoms_slider2_image') : get_template_directory_uri() . '/img/default.jpg'; ?>" alt="">
            <div class="carousel-caption">
              <div class="container">
                <div class="caption-box">
                  <?php echo get_theme_mod('undercustoms_slider2_caption'); ?>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo (!empty(get_theme_mod('undercustoms_slider3_image'))) ? get_theme_mod('undercustoms_slider3_image') : get_template_directory_uri() . '/img/default.jpg'; ?>" alt="">
            <div class="carousel-caption">
              <div class="container">
                <div class="caption-box">
                  <?php echo get_theme_mod('undercustoms_slider3_caption'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-controls">
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselHeroSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselHeroSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!-- <div class="carousel-overlay"> </div> -->
      </div>
    </div>
  </section>

  <section class="common-section bg-light border-top">
    <div class="container py-4">
      <div class="section-title text-start text-md-center pt-3">
        <h6 class="text-color">Services</h6>
        <h2>What we can do for you</h2>
        <span class="line"></span>
      </div>
      <div class="service-box pt-5">

        <div class="service-item mb-5 py-4">
          <div class="row">
            <div class="col-md-3">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home1.png" alt="">
            </div>
            <div class="col-md ps-lg-4 pt-lg-4">
              <h3><strong>Data Center Services</strong></h3>
              <p>Digital Edge offers the best-in-class Data Center services by collaborating with the world leading hardware & software vendors, while keeping resiliency, efficiency & safety as driving force. We handle not just technology ambitions... </p>
              <div class="row">
                <div class="col-lg-6 col-xxl-4">
                  <ul class="list-unstyled mb-0">
                    <li> <i class="fa fa-angle-double-right text-color"></i> Design, Build, Operate  </li>
                    <li> <i class="fa fa-angle-double-right text-color"></i> Co-Location & Hosting Services  </li>
                  </ul>
                </div>
                <div class="col-lg-6 col-xxl-4">
                  <ul class="list-unstyled mb-0">
                    <li> <i class="fa fa-angle-double-right text-color"></i> Infrastructure Management  </li>
                    <li> <i class="fa fa-angle-double-right text-color"></i> Service Desk  </li>
                  </ul>
                </div>
                <div class="col-lg-6 col-xxl-4">
                  <ul class="list-unstyled">
                    <li> <i class="fa fa-angle-double-right text-color"></i> Network Operation Center (NOC)  </li>
                    <li> <i class="fa fa-angle-double-right text-color"></i> Security Operation Center (SOC)  </li>
                  </ul>
                </div>
              </div>
              <a class="btn btn-dark btn-sm" href="<?php echo site_url(); ?>/services/data-center/"> Know More </a>
            </div>
          </div>
        </div>

        <div class="service-item mb-5 py-4">
          <div class="row">
            <div class="col-md pe-lg-4 pt-lg-4 order-2 order-lg-1">
              <h3><strong>Technology Services</strong></h3>
              <p>Technology services are offered in the IT sector in accordance with business or company objectives. IT experts provide an important service to your organisation, but retaining an in-house IT team is costly and may not always meet all of your demands... </p>
              <div class="row">
                <div class="col-lg-6 col-xxl-4">
                  <ul class="list-unstyled mb-0">
                    <li> <i class="fa fa-angle-double-right text-color"></i> IT Staffing </li>
                  </ul>
                </div>
                <div class="col-lg-6 col-xxl-4">
                  <ul class="list-unstyled mb-0">
                    <li> <i class="fa fa-angle-double-right text-color"></i> IT Managed Services </li>
                  </ul>
                </div>
                <div class="col-lg-6 col-xxl-4">
                  <ul class="list-unstyled">
                    <li> <i class="fa fa-angle-double-right text-color"></i> IT Operations & Maintenance Services </li>
                  </ul>
                </div>
              </div>
              <a class="btn btn-dark btn-sm" href="<?php echo site_url(); ?>/services/technology-services/"> Know More </a>
            </div>
            <div class="col-md-3 order-1 order-lg-2">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home2.png" alt="">
            </div>
          </div>
        </div>

        <div class="service-item mb-5 py-4">
          <div class="row">
            <div class="col-md-3">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home3.png" alt="">
            </div>
            <div class="col-md ps-lg-4 pt-lg-4">
              <h3><strong>Commercial Security Services</strong></h3>
              <p>Security is the elimination of risk or threat. Doing any legitimate business entails some amount of danger. Every organization is concerned about commercial risk in terms of inventory, raw materials, and monetary robberies.We at Digital Edge Tech provide you with the best commercial security services that one can implement...  </p>
              <div class="row">
                <div class="col-lg-6 col-xxl-5">
                  <ul class="list-unstyled mb-0">
                    <li> <i class="fa fa-angle-double-right text-color"></i> Industrial & Commercial Security </li>
                  </ul>
                </div>
                <div class="col-lg-6 col-xxl-5">
                  <ul class="list-unstyled">
                    <li> <i class="fa fa-angle-double-right text-color"></i> Security Products & Solutions </li>
                  </ul>
                </div>
              </div>
              <a class="btn btn-dark btn-sm" href="<?php echo site_url(); ?>/services/security-serivces/"> Know More </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="common-section parallax-section bg-dark">
    <div class="parallax-box">
      <img class="parallax-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/team-bg.jpg">
    </div>
    <div class="container text-white text-shadow py-5">
      <div class="row text-center text-md-start">

        <div class="col-md-12 col-lg-4 col-xl-3 mb-4">
          <div class="section-title text-center text-md-start mb-4">
            <h6> Some </h6>
            <h2> Interesting <br class="d-none d-lg-block"> Facts </h2>
            <!-- <span class="line"></span> -->
            <!-- <a class="btn btn-primary" href="<?php echo site_url(); ?>/contact/"> Contact </a> -->
          </div>
        </div>

        <div class="col-md col-lg mb-4">
          <div class="cardx thing-card text-white">
            <div class="card-icon">
              <i class="fa fa-project-diagram fa-2x"></i>
            </div>
            <div class="card-body ps-md-0">
              <h2 class="card-title"> 460+ </h2>
              <h6 class="card-text bigp"> Projects <br class="d-xl-none"> Done </h6>
            </div>
          </div>
        </div>

        <div class="col-md col-lg mb-4">
          <div class="cardx thing-card text-white">
            <div class="card-icon">
              <i class="fa fa-user fa-2x"></i>
            </div>
            <div class="card-body ps-md-0">
              <h2 class="card-title"> 280+ </h2>
              <p class="card-text bigp"> Happy <br class="d-xl-none"> Clients </p>
            </div>
          </div>
        </div>

        <div class="col-md col-lg mb-4">
          <div class="cardx thing-card text-white">
            <div class="card-icon">
              <i class="fa fa-mug-hot fa-2x"></i>
            </div>
            <div class="card-body ps-md-0">
              <h2 class="card-title"> 999+ </h2>
              <p class="card-text bigp"> Coffee <br class="d-xl-none"> Drinks </p>
            </div>
          </div>
        </div>

        <div class="col-md col-lg mb-4">
          <div class="cardx thing-card text-white">
            <div class="card-icon">
              <i class="fa fa-clock fa-2x"></i>
            </div>
            <div class="card-body ps-md-0">
              <h2 class="card-title"> 1200+ </h2>
              <p class="card-text bigp"> Work <br class="d-xl-none"> Hours </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="common-section bg-white border-top">
    <div class="container py-4">
      <div class="section-title text-center mb-4">
        <h6 class="text-color"> Foundation </h6>
        <h2> Our Foundation </h2>
        <!-- <span class="line"></span> -->
        <p> We can offer best IT practices and advise you on how to effectively capitalise on current and forthcoming possibilities in the realm of technology. </p>
      </div>
      <div class="row g-lg-5 project-box pt-4">

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card bg-dark text-white h-100">
            <img class="card-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature1.jpg">
            <div class="card-img-overlay text-shadow p-4">
              <h3 class="card-title">Co-Location & Hosting Services </h3>
              <!-- <p class="card-text"> SECURITY </p> -->
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card bg-dark text-white h-100">
            <img class="card-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature2.jpg">
            <div class="card-img-overlay text-shadow p-4">
              <h3 class="card-title">Global Network Operation Centers </h3>
              <!-- <p class="card-text"> DATA CENTER </p> -->
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card bg-dark text-white h-100">
            <img class="card-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature3.jpg">
            <div class="card-img-overlay text-shadow p-4">
              <h3 class="card-title">Industrial & Commercial Security </h3>
              <!-- <p class="card-text"> TECHNOLOGY </p> -->
            </div>
          </div>
        </div>

      </div>
      <!-- <div class="text-center pt-5">
        <a class="btn btn-primary" href="<?php echo site_url(); ?>/services/"> View More </a>
      </div> -->
    </div>
  </section>

  <section class="common-section bg-color border-top d-none">
    <div class="container py-4">
      <div class="section-title text-center mb-4 text-white">
        <h6> Testimonials </h6>
        <h2>Our Satisfied Clients</h2>
        <!-- <span class="line"></span> -->
      </div>
      <div class="text-center py-4">
        <!-- Slider main container -->
        <div class="swiper-container">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="card testimonial-card">
                <div class="card-icon text-center pt-4">
                  <img class="img-thumbnail rounded-circle" src="<?php echo get_stylesheet_directory_uri(); ?>/img/user2.jpg">
                  <span class="quoty"><i class="fa fa-quote-left"></i></span>
                </div>
                <div class="card-body text-center">
                  <p class="card-text"> They guided us in learning more about the benefits of our business infrastructure so leave us a mail so we can get back to us as soon as possible. </p>
                  <h6 class="card-title mt-4 mb-0"> Julie Connor </h6>
                  <h6 class="card-title"> <small>Client</small> </h6>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card testimonial-card">
                <div class="card-icon text-center pt-4">
                  <img class="img-thumbnail rounded-circle" src="<?php echo get_stylesheet_directory_uri(); ?>/img/user.jpg">
                  <span class="quoty"><i class="fa fa-quote-left"></i></span>
                </div>
                <div class="card-body text-center">
                  <p class="card-text"> They assisted us in making the most of technological developments to better fulfil the demands of our consumers and grab a greater market shares. </p>
                  <h6 class="card-title mt-4 mb-0"> Bruce Mash </h6>
                  <h6 class="card-title"> <small>Partner</small> </h6>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card testimonial-card">
                <div class="card-icon text-center pt-4">
                  <img class="img-thumbnail rounded-circle" src="<?php echo get_stylesheet_directory_uri(); ?>/img/user2.jpg">
                  <span class="quoty"><i class="fa fa-quote-left"></i></span>
                </div>
                <div class="card-body text-center">
                  <p class="card-text"> They guided us in learning more about the benefits of our business infrastructure so leave us a mail so we can get back to us as soon as possible. </p>
                  <h6 class="card-title mt-4 mb-0"> Scarlett Sonn </h6>
                  <h6 class="card-title"> <small>Client</small> </h6>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card testimonial-card">
                <div class="card-icon text-center pt-4">
                  <img class="img-thumbnail rounded-circle" src="<?php echo get_stylesheet_directory_uri(); ?>/img/user.jpg">
                  <span class="quoty"><i class="fa fa-quote-left"></i></span>
                </div>
                <div class="card-body text-center">
                  <p class="card-text"> They assisted us in making the most of technological developments to better fulfil the demands of our consumers and grab a greater market shares. </p>
                  <h6 class="card-title mt-4 mb-0"> Chris Thorn </h6>
                  <h6 class="card-title"> <small>Partner</small> </h6>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>

      </div>
    </div>
  </section>

  <section class="common-section bg-light border-top">
    <div class="container py-4">
      <div class="section-title text-center mb-4">
        <h6 class="text-color">Updates</h6>
        <h2>Latest from Blog </h2>
        <span class="line"></span>
      </div>
      <div class="blog-posts">
        <div class="row g-lg-5">
          <?php
          // TO SHOW THE PAGE CONTENTS
          $args = array(
            'posts_per_page' => 5,
            // 'category_name' => 'exercises',
            'orderby' => 'date',
            'order' => 'DESC'
          );
          query_posts($args);
          while (have_posts()) : the_post();
            ?>
            <div class="col-md-6 col-lg-4 mb-4">
              <?php get_template_part('template-parts/content', 'item'); ?>
            </div>
            <?php
          endwhile;
          wp_reset_query();
          ?>
        </div>
      </div>
      <div class="text-center pt-2">
        <a class="btn btn-dark" href="<?php echo site_url(); ?>/blog/"> View More </a>
      </div>
    </div>
  </section>

  <section class="common-section bg-white border-top">
    <div class="container py-4">
      <div class="row">
        <div class="col-md-3 col-lg-4">
          <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mission.jpg" alt="">
        </div>
        <div class="col-md col-lg ps-lg-5">
          <div class="section-title">
            <h6 class="text-color"> Mission </h6>
            <h3> Our Mission </h3>
            <!-- <span class="line"></span> -->
            <p>Our mission at Digital Edge Tech is to help each new or expanding business, big or small, through every stage of the business journey. Our team of industry specialists is prepared to support any individual or company interested in pursuing local, regional, or global business possibilities. we can guide you in learning more about the benefits of our business infrastructure so leave us a mail so we can get back to you as soon as possible. </p>
          </div>
          <div class="pt-2 mb-4">
            <a class="btn btn-dark" href="<?php echo site_url(); ?>/about/"> Know More </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="callto" class="common-section callto-section py-5" style="background: linear-gradient(90deg, #0088de 0%, #005fd1 100%);">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-lg-7 pt-3">
          <div class="section-title">
            <h3 class="mt-2 text-white font-light mb-1"> Digital Edge Technology Services </h3>
            <h5 class="mb-2 text-white" style="letter-spacing: 1px; font-weight:600;"> SUSTAINABLE. AFFORDABLE. FUTUREPROOF. </h5>
          </div>
        </div>
        <div class="col-md col-lg pt-4">
          <div class="newsletter-form">
            <h6 class="text-white"> <small>LEAVE US YOUR EMAIL & WE'LL REACH YOU!</small> </h6>
            <?php echo do_shortcode('[contact-form-7 id="18" title="Newsletter form 1"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

<?php
get_footer();
