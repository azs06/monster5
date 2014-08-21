<?php get_header(); ?>

  <div class="row">
    <div class="large-12 columns" role="content">
<h1 class="text-center">Oh! Snap,Look! What you have done!</h1>
<div class="panel"><h5 class="text-center">
<font face="Tahoma" color="red">Error 404</font>
</h5>
</div>
<p class="text-center">The page you requested could not be found, either contact your webmaster or try again. Use your browsers Back button to navigate to the page you have prevously come from</p>
</div>
<div class="text-center">
<a href="<?php bloginfo( 'url' ); ?> " class="button text-center">Go Home</a> <h3>Or</h3>
<h6>You can search <a href="<?php bloginfo( 'url' ); ?> "><?php bloginfo('title'); ?></a> using the search box below </h6>
<div class="panel">
<?php get_search_form(true); ?>
</div>
</div>
  </div>

<?php get_footer(); ?>
