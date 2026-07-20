<?php if ( $related_products ) : ?>
	
	<!-- Similar product -->
	<div id="portfolio-sp" class="scroll-point"></div>
	<section class="similar-section bg-light py-5">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="text-center text-darkbrown mb-1">Похожие варианты</h2>
					<div class="title-line m-auto mb-5">
						<div class="title-quadro" style="left: 0;"></div>
						<div class="title-quadro" style="left: 25px;"></div>
						<div class="title-quadro" style="right: 0px;"></div>
					</div>
					<div class="row">

							<?php foreach ( $related_products as $related_product ) : ?>

								<?php
									$post_object = get_post( $related_product->get_id() );

									setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

									global $product;
								?>

								<div class="col-md-4 mb-5">
									<div class="approximation shadow rounded">
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
										do_action( 'woocommerce_before_shop_loop_item_title' );

										/**
										 * Hook: woocommerce_shop_loop_item_title.
										 *
										 * @hooked woocommerce_template_loop_product_title - 10
										 */ ?>
										<div class="card-wrapper"><?php do_action( 'woocommerce_shop_loop_item_title' ); ?></div>
										
										<?php
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
									</div>
								</div>

							<?php endforeach; ?>

						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Catalogy -->
	
<?php
	endif;
	wp_reset_postdata();
?>
