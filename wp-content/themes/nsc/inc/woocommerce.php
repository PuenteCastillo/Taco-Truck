<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package nsc
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)
 * @link https://github.com/woocommerce/woocommerce/wiki/Declaring-WooCommerce-support-in-themes
 *
 * @return void
 */
function nsc_woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 150,
			'single_image_width'    => 300,
			'product_grid'          => array(
				'default_rows'    => 3,
				'min_rows'        => 1,
				'default_columns' => 4,
				'min_columns'     => 1,
				'max_columns'     => 6,
			),
		)
	);
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'nsc_woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function nsc_woocommerce_scripts() {
	wp_enqueue_style( 'nsc-woocommerce-style', get_template_directory_uri() . '/woocommerce.css', array(), _S_VERSION );

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style( 'nsc-woocommerce-style', $inline_font );
}
add_action( 'wp_enqueue_scripts', 'nsc_woocommerce_scripts' );

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
//add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function nsc_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', 'nsc_woocommerce_active_body_class' );

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function nsc_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 3,
		'columns'        => 3,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'nsc_woocommerce_related_products_args' );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'nsc_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function nsc_woocommerce_wrapper_before() {
		?>
			<section id="woocommerce_primary" class="inner_spacing"><div class="container">
		<?php
	}
}
add_action( 'woocommerce_before_main_content', 'nsc_woocommerce_wrapper_before' );

if ( ! function_exists( 'nsc_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function nsc_woocommerce_wrapper_after() {
		?>
			</div></section><!-- #main -->
		<?php
	}
}
//add_action( 'woocommerce_after_single_product', 'nsc_woocommerce_wrapper_after' );

/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	<?php
		if ( function_exists( 'nsc_woocommerce_header_cart' ) ) {
			nsc_woocommerce_header_cart();
		}
	?>
 */

if ( ! function_exists( 'nsc_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function nsc_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		nsc_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'nsc_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'nsc_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function nsc_woocommerce_cart_link() {
		?>
		<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'nsc' ); ?>">
			<?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'nsc' ),
				WC()->cart->get_cart_contents_count()
			);
			?>
			<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> <span class="count"><?php echo esc_html( $item_count_text ); ?></span>
		</a>
		<?php
	}
}

if ( ! function_exists( 'nsc_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function nsc_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php nsc_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);

				the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
}

add_action( 'wp', 'bbloomer_remove_sidebar_product_pages' );
 
function bbloomer_remove_sidebar_product_pages() {
if ( is_product() ) {
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
}
}

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

function action_woocommerce_after_single_product() { 
    echo '</div></section>';
    echo do_shortcode( '[flexmodules name=layout_modules]' );
    if ( get_field('enable_related_products_in_single_product_page','option') == "yes" ){
    ?>
    <!--<section class="divider_module" style="background-color: #ffffff; height: 100px;"><div class="container"><hr style="width: 100%; border-color: #e7e7e7; "></div></section>-->
    <section class="related_products related_products_style1 inner_spacing">
    	<div class="container">
    		<div class="module_title text-center"><h2 class="primary_color">Related Products</h2></div>
            <?php $posts = wc_get_related_products(get_the_id());
            if ( $posts ): ?>
                <div class="related_products_slider" id="related_products_slider">
            		<?php foreach ( $posts as $post ) : 
            		$productt = wc_get_product( $post );
            		?>
            			<a href="<?php echo get_permalink($post); ?>" class="thumb_column">
            			    <?php if ( has_post_thumbnail($post) ) { $featured_img_url = get_the_post_thumbnail_url($post);  ?>
                                <div class="thumb_image"><img src="<?php echo $featured_img_url; ?>" alt="img"></div>
                            <?php }else {?>
                                <div class="thumb_image"><img src="<?php echo get_field('blog_default_featured_image','options');?>" alt="img"></div>
                            <?php } ?>
            				<div class="thumb_body">
            					<div class="thumb_title">
            					    <span class="accent_color"><?php echo $productt->get_sku();?></span>
            						<h5><?php echo $productt->get_name(); ?></h5>
            					</div>
            					<span class="morelink <?php echo $productt->get_id();?>">See More <i class="far fa-long-arrow-right"></i></span>
            				</div>
                		</a>
            		<?php endforeach; wp_reset_postdata(); ?>
                </div>
                <?php if ( count($posts) > 3 )  {?>
                    <div class="pagination_nav text-center">
                    	<a href="javascript:void(0);" class="prev slick-arrow"><i class='fas fa-caret-left'></i> Prev</a>		
                    	<div id="related_products_dots"></div>
                    	<a href="javascript:void(0);" class="next slick-arrow">Next <i class='fas fa-caret-right'></i></a>
                    </div>
                <?php } wp_reset_postdata();
            endif;
            ?>
    	</div>
    </section>
    <?php }
    $urls = get_field('product_page_link_breadcrumb','option');
    if( $urls ): ?>
        <script>jQuery( document ).ready(function() { jQuery( '<a href="<?php echo $urls; ?>">Products</a><i class="fas fa-caret-right"></i>' ).insertAfter( ".woocommerce-breadcrumb i" ); });</script>
    <?php endif;
}; 
add_action( 'woocommerce_after_single_product', 'action_woocommerce_after_single_product', 10, 0 );


add_filter( 'woocommerce_get_breadcrumb', 'tm_child_remove_product_title', 10, 2 );
function tm_child_remove_product_title( $crumbs, $breadcrumb ) {
    if ( is_product() ) {
        array_pop( $crumbs );
    }
    return $crumbs;
}

add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
function wcc_change_breadcrumb_delimiter( $defaults ) {
	$defaults['delimiter'] = ' <i class="fas fa-caret-right"></i> ';
	//$defaults['home'] = 'Home '.$defaults['delimiter'].' Products';
	return $defaults;
}

add_action( 'woocommerce_before_single_product_summary', 'divwrapstart_singleproduct_function', 5 );
function divwrapstart_singleproduct_function() {
    echo '<div class="wrap-product-summary">';
}

add_action( 'woocommerce_after_single_product_summary', 'divwrapend_singleproduct_function', 9 );
function divwrapend_singleproduct_function() {
    echo '</div>';
}

/*Archive Product Page*/
//Remove breadcrumbs only from shop page
add_filter( 'woocommerce_before_main_content', 'remove_breadcrumbs');
function remove_breadcrumbs() {
	if(!is_product() && !is_product_category()) {
		remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);
	}
}

//Remove page title from all WooCommerce archive pages
add_filter( 'woocommerce_show_page_title', '__return_null' );