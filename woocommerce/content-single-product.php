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
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" class="row">
	<div class="col-md-7">
		<!--div id="carousel-1" class="carousel slide" data-bs-ride="false"  data-bs-interval="false">
			<!--div class="carousel-inner shadow rounded"-->
				<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
		?>			
	</div>
	<div class="col-md-5">
		<div class="summary entry-summary">
			<?php
				/**
				 * Description tab
				 *
				 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/description.php.
				 *
				 * HOWEVER, on occasion WooCommerce will need to update template files and you
				 * (the theme developer) will need to copy the new files to your theme to
				 * maintain compatibility. We try to do this as little as possible, but it does
				 * happen. When this occurs the version of the template file will be bumped and
				 * the readme will list any important changes.
				 *
				 * @see https://docs.woocommerce.com/document/template-structure/
				 * @package WooCommerce\Templates
				 * @version 2.0.0
				 *

				defined( 'ABSPATH' ) || exit;

				global $post;

				$heading = apply_filters( 'woocommerce_product_description_heading', __( 'Description', 'woocommerce' ) );

				?>
				<?php the_content(); */
			?>
			
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

			<?php
				//echo $short_description;
				
				$price = get_post_meta( get_the_ID(), '_regular_price', true);
				
				if ( $price == null ) { ?>
					<button type="submit" class="btn btn-lg btn-corporate-1" data-bs-toggle="modal" data-bs-target="#getPriceModal">Узнать стоимость</button>
				<?php }
			?>
		</div>
	</div>
</div>


<?php do_action( 'woocommerce_after_single_product' ); ?>
