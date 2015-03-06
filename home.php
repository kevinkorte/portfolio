<?php get_header(); ?>
<!-- home -->

<div class="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <article id="article-<?php echo $post->ID; ?>" class="project-article">
    <a id="project-<?php echo $post->ID; ?>" class="project-permalink" href="<?php the_permalink();?>">
      <div class="cover" style="background-image: url( <?php echo get_this_projects_cover_img($post->ID); ?> )"></div>
      <div class="title"><?php the_title();?></div>
    </a>
  </article>

<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>

<?php get_footer(); ?>