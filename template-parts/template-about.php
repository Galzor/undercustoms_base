<?php
/**
 * Template Name: About Page
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
      <div class="title">
        <div class="container">
          <!-- <h3 class="entry-title"> <?php the_title(); ?> </h3> -->
          <h3 class="entry-title"> Know more <strong>About us</strong> </h3>
        </div>
      </div>
    </div>

    <section id="vision" class="common-section about-section bg-white">
      <div class="container py-4">
        <div class="row">
          <div class="col-md-3 pe-md-5">
            <!-- <img class="img-thumbnail w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/glocal.jpg" alt=""> -->
            <h4 class="title-faden">Vision</h4>
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

    <section id="driving" class="common-section py-0">
      <div class="container py-5 border-top border-4">
        <div class="row">
          <div class="col-md-3 pe-md-5">
            <!-- <img class="img-thumbnail w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sheikh1.jpg" alt=""> -->
            <h4 class="title-faden">Driving Principles</h4>
          </div>
          <div class="col-md">
            <div class="bigp">
              <p><?php echo get_post_meta($post->ID, 'content-one', true); ?> </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="background" class="common-section py-0">
      <div class="container py-5 border-top border-4">
        <div class="row">
          <div class="col-md-3 pe-md-5">
            <!-- <img class="img-thumbnail w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img1.jpg" alt=""> -->
            <h4 class="title-faden">Background</h4>
          </div>
          <div class="col-md-8">
            <div class="bigp">
              <p><?php echo get_post_meta($post->ID, 'content-two', true); ?> </p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section id="culture" class="common-section pt-0 pb-5">
      <div class="container py-5 border-top border-4">
        <div class="row">
          <div class="col-md-3 pe-md-5">
            <!-- <img class="img-thumbnail w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img1.jpg" alt=""> -->
            <h4 class="title-faden">Culture</h4>
          </div>
          <div class="col-md-8">
            <div class="bigp">
              <p><?php echo get_post_meta($post->ID, 'content-three', true); ?> </p>
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
