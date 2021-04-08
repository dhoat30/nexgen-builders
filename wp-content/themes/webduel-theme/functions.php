<?php 
/**
 * Inspiry functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package inspiry

 */

require get_theme_file_path('/inc/custom-post-type.php');

require get_theme_file_path('/inc/nav-registeration.php');
require get_theme_file_path('/inc/gallery.php');





 //enqueue scripts

 function nexgen_scripts(){ 
   wp_enqueue_script("jQuery");
   
   wp_enqueue_script('isotope', 'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js', array( 'jquery' ), '1.0', false);
   wp_enqueue_script('lightbox', 'https://cdn.jsdelivr.net/npm/lightgallery.js@1.4.0/dist/js/lightgallery.min.js', array( 'jquery' ), '1.0', false);
   wp_enqueue_style("lightbox-css", 'https://cdn.jsdelivr.net/npm/lightgallery.js@1.4.0/src/css/lightgallery.min.css', false);

   wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/e0ba298563.js', NULL, '1.0', false);
   wp_enqueue_style("google-fonts", "https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap", false);
  
   if (strstr($_SERVER['SERVER_NAME'], 'localhost')) {
      wp_enqueue_script('main', 'http://localhost:3000/bundled.js',  NULL, '1.0', true);
    } 
    else {
      wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.4986f70258041b321038.js'),  array( 'jquery' ), '1.0', true);
      wp_enqueue_script('main', get_theme_file_uri('/bundled-assets/scripts.f5ae5b251960516de313.js'), NULL, '1.0', true);
      wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.f5ae5b251960516de313.css'));      
      wp_enqueue_style('our-vendor-styles', get_theme_file_uri('/bundled-assets/styles.4986f70258041b321038.css'));
    }
    wp_localize_script("main", "nexgenData", array(
      "root_url" => get_site_url(),
      "nonce" => wp_create_nonce("wp_rest")
    ));
}
add_action( "wp_enqueue_scripts", "nexgen_scripts" ); 

  //admin bar
  if ( ! current_user_can( "manage_options" ) ) {
   show_admin_bar( false );
}
//sidebar


add_action( "widgets_init", "mat_widget_areas" );
function mat_widget_areas() {
    register_sidebar( array(
        "name" => "Theme Sidebar",
        "id" => "mat-sidebar",
        "description" => "The main sidebar shown on the right in our awesome theme",
        "before_widget" => '<li id="%1$s" class="widget %2$s">',
		"after_widget"  => "</li>",
		"before_title"  => '<h3 class="widget-title">',
		"after_title"   => "</h3>",
    ));
}



