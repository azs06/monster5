<?php

function theme_styles() {

	wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundation.min.css' );
  wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}

function theme_js(){
  wp_enqueue_script('foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script('modernizer_js', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '1.0.0', false );
  wp_enqueue_script('theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery','foundation_js'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );
add_action('wp_enqueue_scripts','theme_js');

add_theme_support('menus');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );
function register_theme_menus(){
  register_nav_menus(
  array(
  'header-menu' => __('Header Menu')
  )
  );
}

function create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

}
require_once('include/foundation-menu.php');
require_once('include/foundation-nav-walker.php');
create_widget( 'Page Sidebar', 'page-right', 'Displays on the right of pages with sidebar' );
create_widget( 'Blog Sidebar', 'blog', 'Displays on the right of Blog page' );
create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage' );
create_widget( 'Front Page Center', 'front-center', 'Displays in the center of the homepage' );
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage' );
create_widget( 'Front Page Bottom', 'front-bottom', 'Displays on the bottom of the homepage' );

function zurb_pagination(){
global $wp_query;
	$big = 999999999; // need an unlikely integer
	$pages = paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages,
					'prev_next' => false,
					'type'  => 'array',
					'prev_next'   => TRUE,
		'prev_text'    => __('«'),
		'next_text'    => __('»'),
			) );
			if( is_array( $pages ) ) {
					$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
					echo '<ul class="pagination">';
					foreach ( $pages as $page ) {
									echo "<li>$page</li>";
					}
				echo '</ul>';
			}
}
?>
