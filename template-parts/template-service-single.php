<?php

/**
 * Template Name: Services Single Page
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
        <div class="row">
          <div class="col-md">
            <div class="title text-centerx">
              <h3 class="entry-title"> <?php the_title(); ?> </h3>
            </div>
          </div>
          <div class="col-md">
            <div class="text-end pt-3">
              <a href="<?php echo site_url(); ?>/services/"> <i class="fa fa-arrow-left"></i> Back to Services </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="common-section service-section bg-white">
      <div class="container py-4">
        <div class="row">
          <div class="col-md-3 col-lg-2">
            <h4 class="title-faden">Service</h4>
          </div>
          <div class="col-md ps-md-5">

            <div class="bigp">
              <?php
                // TO SHOW THE PAGE CONTENTS
                while ( have_posts() ) : the_post();
                  the_content();
                endwhile;
                wp_reset_query();
              ?>
            </div>

            <div class="row py-4">
              <div class="col-md-1">
                <h3 class="h2"> <i class="fa fa-angle-double-right text-color"></i></h3>
              </div>
              <div class="col-md">
                <div class="bigp">
                  <?php echo get_post_meta($post->ID, 'content-one', true); ?>
                </div>
              </div>
            </div>

            <div class="row py-4">
              <div class="col-md-1">
                <h3 class="h2"> <i class="fa fa-angle-double-right text-color"></i></h3>
              </div>
              <div class="col-md">
                <div class="bigp">
                  <?php echo get_post_meta($post->ID, 'content-two', true); ?>
                </div>
              </div>
            </div>

            <?php if ( !empty(get_post_meta($post->ID, 'content-three', true)) ) { ?>
              <div class="row py-4">
                <div class="col-md-1">
                  <h3 class="h2"> <i class="fa fa-angle-double-right text-color"></i></h3>
                </div>
                <div class="col-md">
                  <div class="bigp">
                    <?php echo get_post_meta($post->ID, 'content-three', true); ?>
                  </div>
                </div>
              </div>
            <?php } ?>

            <?php if ( !empty(get_post_meta($post->ID, 'content-four', true)) ) { ?>
              <div class="row py-4">
                <div class="col-md-1">
                  <h3 class="h2"> <i class="fa fa-angle-double-right text-color"></i></h3>
                </div>
                <div class="col-md">
                  <div class="bigp">
                    <?php echo get_post_meta($post->ID, 'content-four', true); ?>
                  </div>
                </div>
              </div>
            <?php } ?>

            <?php if ( !empty(get_post_meta($post->ID, 'content-five', true)) ) { ?>
              <div class="row py-4">
                <div class="col-md-1">
                  <h3 class="h2"> <i class="fa fa-angle-double-right text-color"></i></h3>
                </div>
                <div class="col-md">
                  <div class="bigp">
                    <?php echo get_post_meta($post->ID, 'content-five', true); ?>
                  </div>
                </div>
              </div>
            <?php } ?>

            <?php if ( !empty(get_post_meta($post->ID, 'content-six', true)) ) { ?>
              <div class="row py-4">
                <div class="col-md-1">
                  <h3 class="h2"> <i class="fa fa-angle-double-right text-color"></i></h3>
                </div>
                <div class="col-md">
                  <div class="bigp">
                    <?php echo get_post_meta($post->ID, 'content-six', true); ?>
                  </div>
                </div>
              </div>
            <?php } ?>

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
