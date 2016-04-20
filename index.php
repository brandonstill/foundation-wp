<?php get_header(); ?>

  <section role="main" class="main">
    <div class="row">
      <div class="aside" role="complementary">
        <?php get_sidebar(); ?>
      </div>
      <div class="content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; else: ?>
            <p><?php _e('Nothing here to see.'); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>