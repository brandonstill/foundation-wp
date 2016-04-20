<?php get_header(); ?>

  <section role="main" class="main">
    <div class="row">
      <div class="content columns medium-8">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; else: ?>
            <p><?php _e('Nothing here to see.'); ?></p>
        <?php endif; ?>
      </div>
      <div class="aside columns medium-4" role="complementary">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>