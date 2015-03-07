<?php get_header(); ?>
<!-- home -->

<div class="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="single-post-wrapper pure-g" style="width:<?php echo set_single_total_width( $post_id );?>px;">
  <div class="single-img-wrapper pure-u-md-2-3">
    <?php the_post_thumbnail('full', array('id'=>'single-image')); ?>
    <span class="highlight"></span>
  </div>
  <div class="single-title pure-u-md-1-3">
    <h2><?php the_title();?></h2>
  </div>
  <div class="single-post-meta"></div>
</div>

<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>

<?php get_footer(); ?>