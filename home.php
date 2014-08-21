<?php get_header(); ?>

  <div class="row">
    <div class="large-9 columns" role="content">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
      <article>

        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <h6>Written by <?php the_author(); ?> on <?php echo the_time('l,F jS,Y'); ?>
        in <?php the_category(', '); ?>
        <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
        </h6>

      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>" class="button tiny"><b>Read More</b></a>
      </article>

      <hr/>
    <?php endwhile; endif; ?>

<?php
zurb_pagination();
?>

    </div>

  <?php get_sidebar('blog'); ?>

  </div>

<?php get_footer(); ?>
