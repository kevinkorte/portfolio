<?php get_header(); ?>
<!-- home -->

<div class="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="single-post-wrapper">
  <div class="single-img-wrapper">
    <?php the_post_thumbnail('full', array('id'=>'single-image')); ?>
    <span class="highlight"></span>
  </div>
  <div class="single-post-meta">
    <h2 class="title"><?php the_title();?></h2>
  </div>
</div>

<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>

<?php get_footer(); ?>