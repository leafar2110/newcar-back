<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class(); ?>>

<div class="container">

		<h2 class="page-title2 text-center">
		
		<?php
		$terms = get_the_terms( get_the_ID(), 'product_cat' );

		foreach($terms as $term){
			if($term->slug == 'neumaticos'){
				echo 'Neumático ';
			}
		}
		?>
		
		<?php the_title(); ?><span class="title-under"></span></h2>	
	
</div>

<div class="container">
	<div class="row">

		<div class="col-sm-4 text-center">
			<?php
				/**
				 * Hook: woocommerce_before_single_product_summary.
				 *
				 * @hooked woocommerce_show_product_sale_flash - 10
				 * @hooked woocommerce_show_product_images - 20
				 */
				echo '<img src="'.get_post_meta(get_the_id(), "urlpicture")[0].'" alt="Thumbnail" class="woocommerce-placeholder wp-post-image" width="200px" height="100%">';
			?>
		</div>
		<div class="col-sm-4" style="padding: 20px;">
			<?php echo '<img src="'.get_post_meta(get_the_id(), "urlpicturebrand")[0].'" alt="Marca" class="woocommerce-placeholder wp-post-image brand">';	?>
	
			<?php
			$terms = get_the_terms( get_the_ID(), 'product_cat' );

			foreach($terms as $term){
				if($term->slug == 'neumaticos'){
				?>
				<div style="margin: 40px 0;">
					<p><?php the_content(); ?></p>
					<p style="font-weight: bold; margin-bottom: 7px">Mas información</p>
					<ul class="tiredetail">
					
						<li class="det1"><p><span class="fas fa-gas-pump"></span> <?php echo get_post_meta(get_the_id(), "cfa_label_crr")[0]; ?></p></li>
						<li class="det2"><p><span class="fas fa-cloud"></span> <?php echo get_post_meta(get_the_id(), "cfa_label_g")[0]; ?></p></li>
						<li class="det0"><p><span class="fas fa-volume-up"></span> <?php echo get_post_meta(get_the_id(), "cfa_label_n")[0]; ?></p></li>
						<li><?php echo get_post_meta(get_the_id(), "cfa_label_n")[0]; ?></li>
					</ul>
				</div>
				<?php
				}
			}?>
		</div>
		<div class="col-sm-4">
			
	<div class="summary entry-summary">
		<?php
			/**
			 * Hook: woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */

			do_action( 'woocommerce_single_product_summary' );
		?>
		
	</div>

		</div>

	</div>

	<?php
			$terms = get_the_terms( get_the_ID(), 'product_cat' );

			foreach($terms as $term){
				if($term->slug == 'neumaticos'){
				?>

	<div class="tecnics">
			<div class="info">Información Técnica</div>
			<div style="padding: 30px">
				<table class="table1">
				<tr>
					<th>Marca</th>
					<td><?php echo get_post_meta(get_the_id(), "cfa_marca")[0]; ?></td>
					<th>Modelo</th>
					<td><?php echo get_post_meta(get_the_id(), "cfa_modelo")[0]; ?></td> 
				</tr>
				<tr>
				<th>Tipo de neumático</th>
					<td>Neumático para <?php echo get_post_meta(get_the_id(), "cfa_tipo")[0]; ?></td>
					<th>Anchura del neumático</th>
					<td><?php echo get_post_meta(get_the_id(), "cfa_width")[0]; ?></td>
				</tr>
				<tr>
				<th>Altura del perfil del neumático</th>
					<td><?php echo get_post_meta(get_the_id(), "cfa_hb")[0]; ?></td>
				<th>Diámetro de la llanta</th>
					<td><?php echo get_post_meta(get_the_id(), "cfa_seat")[0]; ?></td>
				</tr>
				<tr>
				<th>Eficiencia energetica</th>
					<td><?php echo get_post_meta(get_the_id(), "cfa_label_crr")[0]; ?></td>
				<th>Adherencia a superficie mojada</th>
					<td><?php echo get_post_meta(get_the_id(), "cfa_label_g")[0]; ?></td>
				</tr>
				<tr>
				<th>Nivel de ruido</th>
					<td><?php echo get_post_meta(get_the_id(), "cfa_label_n")[0]; ?></td>
				<th>Código de velocidad</th>
					<td><?php echo get_post_meta(get_the_id(), "cfa_speedi")[0]; ?></td>
				</tr>
				</table>
				<table class="table2">
				<tr>
					<th>Marca</th>
					<td><?php echo get_post_meta(get_the_id(), "cfa_marca")[0]; ?></td>
					</tr>
					<tr>
					<th>Modelo</th>
					<td><?php echo get_post_meta(get_the_id(), "cfa_modelo")[0]; ?></td> 
				</tr>
				<tr>
				<th>Tipo de neumático</th>
					<td>Neumático para <?php echo get_post_meta(get_the_id(), "cfa_tipo")[0]; ?></td>
					</tr>
					<tr>
					<th>Anchura del neumático</th>
					<td><?php echo get_post_meta(get_the_id(), "cfa_width")[0]; ?></td>
				</tr>
				<tr>
				<th>Altura del perfil del neumático</th>
					<td><?php echo get_post_meta(get_the_id(), "cfa_hb")[0]; ?></td>
					<tr>
					</tr>
					<th>Diámetro de la llanta</th>
					<td><?php echo get_post_meta(get_the_id(), "cfa_seat")[0]; ?></td>
				</tr>
				<tr>
				<th>Eficiencia energetica</th>
					<td><?php echo get_post_meta(get_the_id(), "cfa_label_crr")[0]; ?></td>
					<tr>
					</tr>
					<th>Adherencia a superficie mojada</th>
					<td><?php echo get_post_meta(get_the_id(), "cfa_label_g")[0]; ?></td>
				</tr>
				<tr>
				<th>Nivel de ruido</th>
					<td><?php echo get_post_meta(get_the_id(), "cfa_label_n")[0]; ?></td>
					<tr>
					</tr>
					<th>Código de velocidad</th>
					<td><?php echo get_post_meta(get_the_id(), "cfa_speedi")[0]; ?></td>
				</tr>
				</table>
			</div>
	</div>

	<?php
				}
			}?>

</div>

	<?php
		/**
		 * Hook: woocommerce_after_single_product_summary.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
