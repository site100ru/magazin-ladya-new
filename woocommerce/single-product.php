<?php get_header(); ?>

		
		
		<!-- Header -->
		<header class="second-header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col text-center">
						<h1><?php the_title(); ?></h1>
						
						<!--p class="header-description">Готовые и на заказ.</p>
						<button type="submit" class="btn btn-lg btn-corporate-1 mb-3 mb-md-0" data-bs-toggle="modal" data-bs-target="#designerModal">Запись к дизайнеру</button>
						<button type="submit" class="btn btn-lg btn-corporate-outline-1 mb-3 mb-md-0">Узнать стоимость кухни</button>
						<button type="submit" class="btn btn-lg btn-corporate-1" data-bs-toggle="modal" data-bs-target="#measurerModal">Вызов замерщика</button-->
					</div>
					<!--div class="col-12 col-lg-4 offset-xxl-1 col-xxl-3">
						<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/order-mail.php" class="header-form">
							<h5><strong class="d-block">Бесплатно сделаем</strong> дизайн-проект и&nbsp;расчет стоимости в&nbsp;течение 24&nbsp;часов!</h5>
							<input type="text" name="name" class="form-control-lightgrey" id="exampleFormControlInput1" placeholder="Имя">
							<input type="text" name="tel" class="form-control-lightgrey telMask" id="exampleFormControlInput2" placeholder="Телефон*" required>
							
						</form>
					</div-->
				</div>
			</div>
		</header>
		<!-- /Header -->
		
		
		<!-- Catalogy section 2 -->
		<section class="catalogy-section-2 py-5">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="row">
							
							<?php
							/**
							 * The Template for displaying all single products
							 *
							 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
							 *
							 * HOWEVER, on occasion WooCommerce will need to update template files and you
							 * (the theme developer) will need to copy the new files to your theme to
							 * maintain compatibility. We try to do this as little as possible, but it does
							 * happen. When this occurs the version of the template file will be bumped and
							 * the readme will list any important changes.
							 *
							 * @see         https://docs.woocommerce.com/document/template-structure/
							 * @package     WooCommerce\Templates
							 * @version     1.6.4
							 */

							if ( ! defined( 'ABSPATH' ) ) {
								exit; // Exit if accessed directly
							}

							//get_header( 'shop' ); ?>

								<?php
									/**
									 * woocommerce_before_main_content hook.
									 *
									 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
									 * @hooked woocommerce_breadcrumb - 20
									 */
									//do_action( 'woocommerce_before_main_content' );
								?>

									<?php while ( have_posts() ) : ?>
										<?php the_post(); ?>

										<?php wc_get_template_part( 'content', 'single-product' ); ?>

									<?php endwhile; // end of the loop. ?>

								<?php
									/**
									 * woocommerce_after_main_content hook.
									 *
									 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
									 */
									//do_action( 'woocommerce_after_main_content' );
								?>

								<?php
									/**
									 * woocommerce_sidebar hook.
									 *
									 * @hooked woocommerce_get_sidebar - 10
									 */
									//do_action( 'woocommerce_sidebar' );
								?>

							<?php
							//get_footer( 'shop' );

							/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
							?>

						</div>
					</div>
				</div>
			</div>
			
		</section>
		<!-- /Catalogy section 2 -->
		

			<?php
				/**
				 * Hook: woocommerce_after_single_product_summary.
				 *
				 * @hooked woocommerce_output_product_data_tabs - 10
				 * @hooked woocommerce_upsell_display - 15
				 * @hooked woocommerce_output_related_products - 20
				 */
				do_action( 'woocommerce_after_single_product_summary' );
			?>
		
		
		<!-- Advantages -->
		<div id="advantages-sp" class="scroll-point"></div>
		<section class="advantages bg-white py-5">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="mb-1 text-corporate-2 text-center">Наши преимущества</h2>
						<div class="title-line m-auto mb-5">
							<div class="title-quadro" style="left: 0;"></div>
							<div class="title-quadro" style="left: 25px;"></div>
							<div class="title-quadro" style="right: 0px;"></div>
						</div>
						<div class="row">
							<div class="col-md-6 mb-5">
								<div class="row">
									<div class="col-2 text-center">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/adv-1.png" class="img-fluid">
									</div>
									<div class="col-10">
										<h3>Большой выбор мебели</h3>
										<p class="mb-0">Кухни, шкафы, гардеробные, гостиные, мягкая мебель, прихожие, спальни, детские, обеденные группы и другая мебель готовая и на заказ.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 mb-5">
								<div class="row">
									<div class="col-2 text-center">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/adv-2.png" class="img-fluid">
									</div>
									<div class="col-10">
										<h3>Сделаем на заказ</h3>
										<p class="mb-0">Сделаем любую корпусную мебель на заказ по Вашим размерам.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 mb-5">
								<div class="row">
									<div class="col-2 text-center">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/adv-3.png" class="img-fluid">
									</div>
									<div class="col-10">
										<h3>Бесплатная парковка</h3>
										<p class="mb-0">Удобная и бесплатная парковка для наших клиентов.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 mb-5">
								<div class="row">
									<div class="col-2 text-center">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/adv-4.png" class="img-fluid">
									</div>
									<div class="col-10">
										<h3>Сделаем дизайн</h3>
										<p class="mb-0">Сделаем дизайн любой корпусной мебели <strong>бесплатно!</strong></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Advantages -->
		
		
		<!-- Advantages -->
		<div id="advantages-sp" class="scroll-point"></div>
		<section class="actions-section bg-light pt-5">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="mb-1 text-corporate-2 text-center">Наши акции</h2>
						<div class="title-line m-auto mb-5">
							<div class="title-quadro" style="left: 0;"></div>
							<div class="title-quadro" style="left: 25px;"></div>
							<div class="title-quadro" style="right: 0px;"></div>
						</div>
						<div class="row">
							<div class="col-md-6 mb-5">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/actions/act-1.jpg" class="img-fluid mb-3">
								<p class="mb-0">При заказе кухни - мойка, посудосушитель и петли с доводчиком <strong>в ПОДАРОК!</strong></p>
							</div>
							<div class="col-md-6 mb-5">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/actions/act-2.jpg" class="img-fluid mb-3">
								<p class="mb-0">При заказе кухни - <strong>СКИДКИ до 30%!</strong></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Advantages -->


		<!-- getPriceModal Modal -->
        <div class="modal fade" id="getPriceModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/callback-mail.php" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="callbackModalLabel">Узнать стоимость</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <p><small>Оставьте Ваши контакты, наш менеджер свяжется с Вами в ближайшее время и ответит на все вопросы.</small></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <input type="text" name="name" class="form-control" placeholder="Ваше имя">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="tel" class="form-control telMask" placeholder="Ваш телефон*">
                            </div>
                        </div>

                        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response-callback">

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-corporate-2 px-3 mx-auto">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /getPriceModal Modal -->
            
		
		<!-- Gallery wrapper -->
		<div id="galleryWrapper" style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999;">
			
			<div id="gallery-<?php the_ID(); ?>" class="carousel slide" data-bs-ride="false" data-bs-interval="false" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
						
				<!--div class="carousel-indicators">
					<?php
						for ( $i=1; $i<=9; $i++ ) {
							if ( get_post_meta($post->ID, '_img-'.$i ) ) { ?>
								<button class="carousel-indicator-2<?php if ( $i == 1 ) echo ' active'; ?>" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $i-1; ?>" aria-label="Slide 1"></button>
							<?php }
						}
					?>
				</div-->
				
				<div class="carousel-inner h-100">
					<?php
						$attachment_ids = $product->get_gallery_image_ids();
						$count = false;
						foreach ( $attachment_ids as $attachment_id ) {
						
					?>
						<div class="carousel-item carousel-item-2 h-100<?php if ( $count == false ) { echo ' active'; $count = true; } ?>">
							<div class="row align-items-center h-100">
								<div class="col text-center">
									<img src="<?php echo wp_get_attachment_url( $attachment_id ); ?>" class="img-fluid" loading="lazy" style="max-width: 75vw; max-height: 75vh;" alt="...">
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#gallery-<?php the_ID(); ?>" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#gallery-<?php the_ID(); ?>" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>

			<!-- Кнопка закрытия галереи -->
			<button type="button" onClick="closeGallery();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999;" aria-label="Close"></button>
		</div> <!-- #galleryWrapper -->


		<script>
			/* Функция открытия галереи */
			function galleryOn(gal) {
				var gallery = gal; // Получаем ID галереи
				// Открываем обертку галереи
				document.getElementById('galleryWrapper').style.display = 'block';
				
				/* Открываем галерею */
				document.getElementById(gallery).style.display = "block";
				
			}

			/* Кнопка закрытия галереи */
			function closeGallery() {
				// Закрываем обертку галереи
				document.getElementById('galleryWrapper').style.display = 'none';
				document.getElementById("gallery-<?php the_ID(); ?>").style.display = "none";
			}
		</script>

<?php get_footer(); ?>