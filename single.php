<?php get_header(); ?>

  <div class="row">
    <div class="large-9 columns" role="content">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
      <article>
        <?php
          $thumbnail_id = get_post_thumbnail_id();
          $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail-size',true);
          $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);
           ?>
  <p class="featured-image"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>"></a>
        <h3><?php the_title(); ?></h3>
        <h6>Written by <?php the_author(); ?> on <?php echo the_time('l,F jS,Y'); ?>
        in <?php the_category(', '); ?>
        </h6>

      <?php the_content(); ?>
      </article>

      <hr/>
    <?php endwhile; endif; ?>
<?php comments_template(); ?>
    </div>

  <?php get_sidebar('blog'); ?>

  </div>

<?php get_footer(); ?>
