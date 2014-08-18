<div class="panel panel-default post-panel">
    <div class="panel-heading"><header><h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><span><?php get_template_part('templates/entry-meta'); ?></span></div>
    <div class="panel-body">
   <article <?php post_class(); ?>>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>		
    </div>
  </div>
