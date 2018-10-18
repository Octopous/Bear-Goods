<?php add_action( 'after_setup_theme', function() {
	add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-slider' );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
    add_filter( 'woocommerce_show_page_title', '__return_false' );
    remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
    add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<div class="producten">';
}

function my_theme_wrapper_end() {
  echo '</div>';
}
    
    /**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}
    
 

// Change 'add to cart' text on archive product page
add_filter( 'woocommerce_product_add_to_cart_text', 'bryce_archive_add_to_cart_text' );
function bryce_archive_add_to_cart_text() {
        return __( '', 'your-slug' );
}
    
    
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

} );

?>

