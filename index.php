<?php
/**
 * The main template file.
 *
 * 
 * @package    
 * @author     sj
 *  
 */
get_header(); ?>
<?php
// параметры по умолчанию
$my_posts = get_posts( array(
	'numberposts' => 3,
	'category'    => 0,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

global $post;

foreach( $my_posts as $post ){
	setup_postdata( $post );

	// формат вывода the_title() ...
}

wp_reset_postdata(); // сброс
?>
    <main id="main" <?php auxin_content_main_class(); ?> >
	
        <div class="aux-wrapper">
            <div class="aux-container aux-fold">

                <div id="primary" class="aux-primary" >
                    <div class="content" role="main" data-target="index" >

                        <?php
                        // if is archive page
                        if ( have_posts() ) {
                            if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'archive' ) ) {
                                get_template_part( 'templates/theme-parts/loop', get_post_type() );
                            }
                        // if is 404 page
                        } elseif( is_404() ){
                            if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {
                                get_template_part( 'templates/theme-parts/entry/404' );
                            }
                        // if search result not found
                        } else {
                            if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {
                                get_template_part( 'templates/theme-parts/content', 'none' );
                            }
                        }
                        ?>

                    </div><!-- end content -->
                </div><!-- end primary -->


                <?php get_sidebar(); ?>

				
            </div><!-- end container -->
        </div><!-- end wrapper -->
    </main><!-- end main -->

<?php get_sidebar("footer"); ?>
<?php get_footer(); ?>
