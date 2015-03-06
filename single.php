<?php get_header(); ?>
<!-- home -->

<div class="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php the_post_thumbnail('full', array('id'=>'single-image')); ?>

<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>

<?php get_footer(); ?>