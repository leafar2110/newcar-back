<?php

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class(); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	echo '<img src="'.get_post_meta(get_the_id(), "urlpicturebrand")[0].'" alt="Marca" class="woocommerce-placeholder wp-post-image brand">';
	echo '<img src="'.get_post_meta(get_the_id(), "urlpicture")[0].'" alt="Thumbnail" class="woocommerce-placeholder wp-post-image" width="150px" height="150px">';

	if(is_tax('product_cat', 'neumaticos')){
		?>
		
		<ul class="tiredetail">
			<li class="det1"><p><span class="fas fa-gas-pump"></span> <?php echo get_post_meta(get_the_id(), "cfa_label_crr")[0]; ?></p></li>
			<li class="det2"><p><span class="fas fa-cloud"></span> <?php echo get_post_meta(get_the_id(), "cfa_label_g")[0]; ?></p></li>
			<li class="det0"><p><span class="fas fa-volume-up"></span> <?php echo get_post_meta(get_the_id(), "cfa_label_n")[0]; ?></p></li>
		</ul>

		<?php
	}

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	echo '<h4 class="woocommerce-loop-product__title">';
	
	if(is_tax('product_cat', 'neumaticos')){
		echo 'NEUMÁTICO ';
	}

	echo get_the_title().'</h4>';

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
	<p class="post-paragraph">Disponible en tu autocentro</p>
</li>
