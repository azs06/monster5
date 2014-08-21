<?php get_header(); ?>

  <div class="row">
    <div class="large-9 columns" role="content">
      <h3><?php wp_title(''); ?></h3>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
      <article>

        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

      <?php the_excerpt(); ?>
      </article>

      <hr/>
    <?php endwhile; endif; ?>
<div class="navigation">
<div class="alignleft"><?php next_posts_link('&laquo; Previous') ?></div>
<div class="alignright"><?php previous_posts_link('Next &raquo;') ?></div>
</div>
    </div>

  <?php get_sidebar(); ?>

  </div>

<?php get_footer(); ?>
