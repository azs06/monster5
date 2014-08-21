<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico">
    <title>  <?php wp_title('|',true,right) ?>
     <?php bloginfo('name'); ?>
     </title>
  <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >
<div class="navigatoon">
<div class="row">
  <div class="large-12 columns">
<nav class="top-bar" data-topbar>
  <ul class="title-area">
  <li class="name"> <h1><a href="<?php bloginfo('url') ?>"><?php bloginfo('name'); ?></a></h1> </li>
<li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
</ul>
<section class="top-bar-section">
<?php foundation_top_bar_l(); ?>

<?php foundation_top_bar_r(); ?>
</section>
</nav>
</div>
</div>
</div>
