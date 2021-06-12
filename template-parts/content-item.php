<?php
/**
 * Template part for items in blog or category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package undercustoms
 */
?>
<div class="card blog-item h-100 bg-white shadow-card">
  <a href="<?php the_permalink() ?>"><img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt=""></a>
  <div class="card-body p-4">
    <!-- <h5> <?php //the_category( ', ' ); ?> </h5>    -->
    <h5 class="card-title"> <a class="text-dark" href="<?php the_permalink() ?>"><strong><?php the_title(); ?></strong></a> </h5>
    <p class="card-text"><?php echo excerpt(20); ?></p>
    <!-- <a class="btn btn-primary btn-sm" href="<?php the_permalink() ?>">Read More</a> -->
  </div>
</div>
