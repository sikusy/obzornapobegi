<?php
/**
 * 
 *
 * @link 
 *
 * @package keep_it_simply
 */

//define theme version
add_action( 'wp_footer' , 'add_scripts_theme' );
add_action( 'after_setup_theme', 'register_main_menu');
function register_theme_sidebar(){
    register_sidebar( array(
     'name' => 'Right Sidebar',
    'id' => "right_sidebar", 
    'description'=> "Сайдбар в правой части сайта",
    'class'=> '',
    'before_widget'=> '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>\n",
     'before_title' => '<h3 class="widgettitle">', 
     'after_title' =>"</h3>\n", 
     ) );
    }
    function register_main_menu() {
    register_nav_menu( 'main_menu', 'Верхнее меню сайта' );
    register_nav_menu( 'footer_menu', 'Меню в подвале сайта' );
    register_nav_menu( 'social_menu', 'Меню социальных сетей' );
    add_theme_support( 'post-thumbnails', array('post') );
 }
  
 
   




/**
 */
require get_template_directory() . '/inc/partials.php';

/**
 * Fontawesome
 */
require get_template_directory() . '/inc/fontawesome.php';

/**
 * Custom Controls
 */
require get_template_directory() . '/inc/custom-controls/custom-control.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Widgets
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Metabox
 */
require get_template_directory() . '/inc/metabox.php';

/**
 * Typography Functions
 */
require get_template_directory() . '/inc/typography.php';

/**
 * Dynamic Styles
 */
require get_template_directory() . '/css/style.php';

/**
 * Plugin Recommendation
*/
require get_template_directory() . '/inc/tgmpa/recommended-plugins.php';

/**
 * Getting Started
*/
require get_template_directory() . '/inc/getting-started/getting-started.php';

/**
 * Add theme compatibility function for woocommerce if active
*/

