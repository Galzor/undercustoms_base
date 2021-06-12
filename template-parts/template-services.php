<?php

/**
 * Template Name: Services Page
 *
 * This is the template that displays full width page without sidebar
 *
 * @package undercustoms
 */
get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <div class="titlemon">
      <div class="container">
        <div class="title text-centerx">
          <!-- <h3 class="entry-title"> <?php the_title(); ?> </h3> -->
          <h3 class="entry-title"> What <strong>Services</strong> do we offer </h3>
        </div>
      </div>
    </div>

    <section class="common-section about-section bg-white">
      <div class="container pt-4">
        <div class="row">
          <div class="col-md-3 pe-md-5">
            <h4 class="title-faden">Data, IT & Security</h4>
          </div>
          <div class="col-md">
            <div class="bigp">
              <?php
                // TO SHOW THE PAGE CONTENTS
                while ( have_posts() ) : the_post();
                  the_content();
                endwhile;
                wp_reset_query();
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="common-section py-0">
      <div class="container py-5 border-top border-4">
        <div class="row">
          <div class="col-md-3 pe-md-5">
            <img class="img-thumbnail rounded-circle" src="<?php echo get_stylesheet_directory_uri(); ?>/img/service1.jpg" alt="">
            <!-- <h4 class="title-faden">Driving Principles</h4> -->
          </div>
          <div class="col-md">
            <div class="bigp">
              <?php // echo get_post_meta($post->ID, 'content-one', true); ?>
              <h3 class="card-title"><strong>Data Center Services</strong></h3>
              <p class="card-text"> Digital Edge offers the best-in-class Data Center services by collaborating with the world leading hardware & software vendors, while keeping resiliency, efficiency & safety as driving force. We handle not just technology ambitions and economic concerns, but also assist in reaping the benefits of data center infrastructure investments. </p>
              <p><strong>Our key data center service offerings:</strong></p>
              <div class="row">
                <div class="col-md-6">
                  <ul class="list-unstyled">
                    <li> <i class="fa fa-check-circle text-success"></i> Design, Build, Operate  </li>
                    <li> <i class="fa fa-check-circle text-success"></i> Co-Location & Hosting Services  </li>
                    <li> <i class="fa fa-check-circle text-success"></i> Infrastructure Management  </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="list-unstyled">
                    <li> <i class="fa fa-check-circle text-success"></i> Service Desk  </li>
                    <li> <i class="fa fa-check-circle text-success"></i> Network Operation Center (NOC)  </li>
                    <li> <i class="fa fa-check-circle text-success"></i> Security Operation Center (SOC)  </li>
                  </ul>
                </div>
              </div>
              <div class="pt-3">
                <a class="btn btn-dark btn-sm" href="<?php echo site_url(); ?>/services/data-center/"> Know More </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="common-section py-0">
      <div class="container py-5 border-top border-4">
        <div class="row">
          <div class="col-md-3 pe-md-5">
            <img class="img-thumbnail rounded-circle" src="<?php echo get_stylesheet_directory_uri(); ?>/img/service2.jpg" alt="">
            <!-- <h4 class="title-faden">Driving Principles</h4> -->
          </div>
          <div class="col-md">
            <div class="bigp">
              <?php // echo get_post_meta($post->ID, 'content-one', true); ?>
              <h3 class="card-title"><strong>Technology Services</strong></h3>
              <p class="card-text"> Technology services are offered in the IT sector in accordance with business or company objectives. IT experts provide an important service to your organisation, but retaining an in-house IT team is costly and may not always meet all of your demands. Enter Digital Edge Tech Services, we have hired IT professionals to create, manage, upgrade, and support your software, hardware, and systems. </p>
              <p><strong>Our key technology services offerings:</strong></p>
              <div class="row">
                <div class="col-md">
                  <ul class="list-unstyled">
                    <li> <i class="fa fa-check-circle text-success"></i> IT Staffing </li>
                    <li> <i class="fa fa-check-circle text-success"></i> IT Managed Services </li>
                    <li> <i class="fa fa-check-circle text-success"></i> IT Operations & Maintenance Services </li>
                  </ul>
                </div>
              </div>
              <div class="pt-3">
                <a class="btn btn-dark btn-sm" href="<?php echo site_url(); ?>/services/technology-services/"> Know More </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="common-section pt-0">
      <div class="container py-5 border-top border-4">
        <div class="row">
          <div class="col-md-3 pe-md-5">
            <img class="img-thumbnail rounded-circle" src="<?php echo get_stylesheet_directory_uri(); ?>/img/service3.jpg" alt="">
            <!-- <h4 class="title-faden">Driving Principles</h4> -->
          </div>
          <div class="col-md">
            <div class="bigp">
              <?php // echo get_post_meta($post->ID, 'content-one', true); ?>
              <h3 class="card-title"><strong>Commercial Security Services</strong></h3>
              <p class="card-text"> Security is the elimination of risk or threat. Doing any legitimate business entails some amount of danger. Every organization is concerned about commercial risk in terms of inventory, raw materials, and monetary robberies. We at Digital Edge Tech provide you with the best commercial security services that one can implement. We provide a variety of commercial security services to guarantee that you can focus on your core business without concern. </p>
              <p class="card-text"> By associating with Digital Edge Tech Services, you will acquire the best and most effective security professionals that are trained and prepared to protect your workplace. </p>
              <p><strong>Our key commercial security service offerings:</strong></p>
              <div class="row">
                <div class="col-md">
                  <ul class="list-unstyled">
                    <li> <i class="fa fa-check-circle text-success"></i> Industrial & Commercial Security </li>
                    <li> <i class="fa fa-check-circle text-success"></i> Security Products & Solutions </li>
                  </ul>
                </div>
              </div>
              <div class="pt-3">
                <a class="btn btn-dark btn-sm" href="<?php echo site_url(); ?>/services/security-serivces/"> Know More </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- DISPLAY CALLTO SECTION -->
    <?php get_template_part('template-parts/content', 'callto-section'); ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
