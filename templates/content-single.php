<?php while (have_posts()) : the_post(); ?>
<div class="container">
   <article <?php post_class(); ?>>
  <div class="panel panel-default post-panel">
    <div class="panel-heading"><header><h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><span><?php get_template_part('templates/entry-meta'); ?></span></div>
    <div class="panel-body">
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
     </div>
  </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
</div>
<?php endwhile; ?>
