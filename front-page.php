<?php get_header(); ?>

  <div class="row">
    <?php
$term = term_exists('Featured', 'category');
if ($term !== 0 && $term !== null):

$args = array(
         'post_type' => 'post',
         'category_name' => 'featured',
        'posts_per_page' => 3

       );
       $the_query = new WP_Query($args);
?>
    <div class="large-12 columns">

  <ul class="example-orbit" data-orbit>
<?php if(have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>
 <?php
      $thumbnail_id = get_post_thumbnail_id();
      $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail-size',true);
      $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);
  ?>
<li><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>"></a>
<div class="orbit-caption">
<?php the_title(); ?>
    </div>
</li>
<?php endwhile; endif; ?>
</ul>
    <hr/>
    </div>
<?php else: ?>
      <h3>Please create some posts with Featured category</h3>
    <?php endif; ?>
  </div>
<div class="row">
<div class="large-12 columns">
<div class="container">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<h3><?php the_title(); ?></h3>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>
</div>
</div>


  <div class="row">
    <div class="large-4 columns">
    <?php if(dynamic_sidebar('front-left')); ?>
    </div>

    <div class="large-4 columns">
<?php if(dynamic_sidebar('front-center')); ?>
    </div>

    <div class="large-4 columns">
<?php if(dynamic_sidebar('front-right')); ?>
    </div>
</div>

<div class="row">
    <div class="large-12 columns">

      <div class="panel">

        <div class="row">
        <?php if(dynamic_sidebar('front-bottom')); ?>
        </div>
      </div>

    </div>
  </div>

<?php get_footer(); ?>
