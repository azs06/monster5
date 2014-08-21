<footer class="row">
  <div class="large-12 columns">
    <hr/>
    <div class="row">
      <div class="large-6 columns">
        <p>© <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<!-- Reveal Modals begin -->
<div id="contactus" class="reveal-modal" data-reveal>
  <div class="large-12 columns">
<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
  <a class="close-reveal-modal">&#215;</a>
</div>
</div>
</body>
</html>
