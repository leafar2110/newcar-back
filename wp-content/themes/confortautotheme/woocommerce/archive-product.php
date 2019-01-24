<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

?>

<?php
get_header();
?>

<div id="banner-header page-nav">
			<div class="navbar-main">             
              <div class="container">
                <div id="navbar" class="navbar-collapse collapse">
					<?php
						$args = array(
						  'theme_location' => 'primary',
						  'menu' => 'top_menu',
						  'depth' => 2,
						  'container' => false,
						  'menu_class' => 'nav navbar-nav'
						);
						?>
					
						<?php wp_nav_menu($args); ?>
                </div> 
              </div>   
			</div>  
		</div>

<div class="page-heading text-center">

	<div class="container zoomIn animated">
		<div class="nc_links">
			<a href="<?php echo get_home_url()?>">Inicio</a>
			<a class="arrow">></a>
			<a href="<?php echo get_home_url('/tienda')?>"><?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) { woocommerce_page_title(); }?></a>
		</div>
		
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) { ?>
		<h2 class="page-title"><?php woocommerce_page_title(); ?><span class="title-under"></span></h2>	
					
					<?php }?>
	</div>

</div>

<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked wc_print_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	?>

	<div class="head_before_shop">
		<div class="container">
			<?php do_action( 'woocommerce_before_shop_loop' ); ?>
		</div>
	</div>

	<div style="padding: 20px 40px;">

	<?php

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 *
			 * @hooked WC_Structured_Data::generate_product_data() - 10
			 */
			
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	?>

	</div>

	<?php
	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

get_footer( 'shop' );
