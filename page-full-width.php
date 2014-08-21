<?php
/*
Template Name: Full Width
*/
?>
<?php get_header(); ?>

  <div class="row">
    <div class="large-12 columns" role="content">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
      <article>

        <h3><?php the_title(); ?></h3>

      <?php the_content(); ?>
      </article>

      <hr/>
    <?php endwhile; endif; ?>

    </div>

  </div>

<?php get_footer(); ?>
