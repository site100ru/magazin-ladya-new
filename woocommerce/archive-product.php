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
	 * @package WooCommerce\Templates
	 * @version 3.4.0
	 */

	defined('ABSPATH') || exit;

	//get_header( 'shop' );
	
	/**
	 * Hook: woocommerce_before_main_content.
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 * @hooked WC_Structured_Data::generate_website_data() - 30
	 */
	//do_action( 'woocommerce_before_main_content' );
	
	?>

    <?php get_header(); ?>



	<!-- Header -->
	<header class="second-header woocommerce-products-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col text-center">
					<h1><?php woocommerce_page_title(); ?></h1>
					<?php do_action('woocommerce_archive_description'); ?>
					<!--p class="header-description mt-5" style="background: #dd127b; padding: 10px; max-width: 675px; margin-x: auto; border-radius: 5px;">При заказе мебели скажи кодовое слово "МЕБЕЛЬ"<br>и получи <span class="fw-bold text-uppercase">подарок!</span></p-->
				</div>
			</div>
		</div>
	</header>
	<!-- /Header -->




	<!-- Catalogy section 2 -->
	<section class="catalogy-section-2 py-5">
		<div class="container">
			<div class="row">
				<div class="col">
					<?php
					$obj = get_queried_object();
					$cat_name = $obj->name;
					?>

					<h2 class="text-center text-corporate-2 mb-1"><?php echo $cat_name; ?></h2>
					<div class="title-line m-auto mb-5">
						<div class="title-quadro" style="left: 0;"></div>
						<div class="title-quadro" style="left: 25px;"></div>
						<div class="title-quadro" style="right: 0px;"></div>
					</div>


					<div class="row">
						<div class="col-md-3">
							<!--ul class="nav flex-column catalogy-menu">
							<?php

							$obj = get_queried_object();
							$cat_id = $obj->term_id;
							$cat_name = $obj->name;

							/*
							echo '<hr>';
							echo $cat_id;
							echo '<br>';
							echo $cat_name;
							echo '<hr>';
							*/

							// Определяем радителя текущей категории
							$ancestors = get_ancestors($cat_id, 'product_cat');
							$term = get_term($cat_id);

							/*
							echo '<hr>';
							//print_r( $ancestors );
							echo '<br>';
							print_r( $term );
							echo '<hr>';
							*/

							$term = get_term($ancestors[0]);



							// Имя родителя текущей категории
							$parent = $term->name;
							// ID родителя текущей категории
							$parent_id = $term->term_id;


							// Если есть родитель, то...
							if ($parent) {

								// Выводим в меню родительскую категорию
								//$cat_name = $obj->name;
								//$cat_id = $obj->term_id;
							
								if ($parent == 'Мягкая мебель') {
									echo '<a href="' . get_category_link($parent_id) . '" class="nav-link">Вся <span class="text-lowercase">' . $parent . '</span></a>';
								} else {
									echo '<a href="' . get_category_link($parent_id) . '" class="nav-link">Все <span class="text-lowercase">' . $parent . '</span></a>';
								}







								$args = [
									'taxonomy' => ['product_cat'],
									'orderby' => 'menu_order', // Сортировка как в админке
									'order' => 'ASC',
									'hide_empty' => true,
									'object_ids' => null,
									'include' => array(),
									'exclude' => array(),
									'exclude_tree' => array(),
									'number' => '',
									'fields' => 'all',
									'count' => false,
									'slug' => '',
									'parent' => '',
									'hierarchical' => true,
									'child_of' => $parent_id,
									'get' => '', // ставим all чтобы получить все термины
									'name__like' => '',
									'pad_counts' => false,
									'offset' => '',
									'search' => '',
									'cache_domain' => 'core',
									'name' => '',    // str/arr поле name для получения термина по нему. C 4.2.
									'childless' => true, // true не получит (пропустит) термины у которых есть дочерние термины. C 4.2.
									'update_term_meta_cache' => true, // подгружать метаданные в кэш
									'meta_query' => '',
								];

								$terms = get_terms($args);

								foreach ($terms as $term) { ?>
										<li class="nav-item">
											<a href="<?php echo get_category_link($term->term_id); ?>" class="nav-link active" aria-current="page"><?php echo $term->name; ?></a>
										</li>
									<?php }

								// Если нет родителя, то ...
							} else {

								// Выводим в меню родительскую категорию
								$cat_name = $obj->name;
								$cat_id = $obj->term_id;

								if ($cat_name == 'Мягкая мебель') {
									echo '<a href="' . get_category_link($cat_id) . '" class="nav-link active">Вся <span class="text-lowercase">' . $cat_name . '</span></a>';
								} else {
									echo '<a href="' . get_category_link($cat_id) . '" class="nav-link active">Все <span class="text-lowercase">' . $cat_name . '</span></a>';
								}

								$args = [
									'taxonomy' => ['product_cat'],
									'orderby' => 'menu_order', // Сортировка как в админке
									'order' => 'ASC',
									'hide_empty' => true,
									'object_ids' => null,
									'include' => array(),
									'exclude' => array(),
									'exclude_tree' => array(),
									'number' => '',
									'fields' => 'all',
									'count' => false,
									'slug' => '',
									'parent' => '',
									'hierarchical' => true,
									'child_of' => $cat_id,
									'get' => '', // ставим all чтобы получить все термины
									'name__like' => '',
									'pad_counts' => false,
									'offset' => '',
									'search' => '',
									'cache_domain' => 'core',
									'name' => '',    // str/arr поле name для получения термина по нему. C 4.2.
									'childless' => true, // true не получит (пропустит) термины у которых есть дочерние термины. C 4.2.
									'update_term_meta_cache' => true, // подгружать метаданные в кэш
									'meta_query' => '',
								];

								$terms = get_terms($args);

								foreach ($terms as $term) { ?>
										<li class="nav-item">
											<a href="<?php echo get_category_link($term->term_id); ?>" class="nav-link" aria-current="page"><?php echo $term->name; ?></a>
										</li>
									<?php }
							}

							?>
						</ul-->
						</div>
						<div class="col-md-9">

							<?php
							if (woocommerce_product_loop()) {

								/**
								 * Hook: woocommerce_before_shop_loop.
								 *
								 * @hooked woocommerce_output_all_notices - 10
								 * @hooked woocommerce_result_count - 20
								 * @hooked woocommerce_catalog_ordering - 30
								 */
								//do_action( 'woocommerce_before_shop_loop' );
							
								woocommerce_product_loop_start();

								if (wc_get_loop_prop('total')) {

									global $query_string;
									// Добавляем базовые параметры в массив $query_string_args
									parse_str($query_string, $query_string_args);
									// Добавляем параметры в новый массив
									$query_string_args['order'] = 'ASC';
									$query_string_args['orderby'] = 'menu_order';
									// Не выводим продукты, которые имеют тэги 'витринные-образцы'
									$query_string_args['tax_query'] = array(
										'relation' => 'AND',
										array(
											'taxonomy' => 'product_tag',
											'field' => 'slug',
											'terms' => 'витринные-образцы',
											'operator' => 'NOT IN'
										)
									);

									query_posts($query_string_args);

									while (have_posts()) {
										the_post();

										/**
										 * Hook: woocommerce_shop_loop.
										 */
										do_action('woocommerce_shop_loop');

										wc_get_template_part('content', 'product');
									}
									wp_reset_query();
								}

								woocommerce_product_loop_end();

								/**
								 * Hook: woocommerce_after_shop_loop.
								 *
								 * @hooked woocommerce_pagination - 10
								 */
								do_action('woocommerce_after_shop_loop');
							} else {
								/**
								 * Hook: woocommerce_no_products_found.
								 *
								 * @hooked wc_no_products_found - 10
								 */
								do_action('woocommerce_no_products_found');
							}
							?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Catalogy section 2 -->


	<?php
	/**
	 * Hook: woocommerce_after_main_content.
	 *
	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	 */
	//do_action( 'woocommerce_after_main_content' );
	
	/**
	 * Hook: woocommerce_sidebar.
	 *
	 * @hooked woocommerce_get_sidebar - 10
	 */
	//do_action( 'woocommerce_sidebar' );
	
	//get_footer( 'shop' );
	?>


	<!-- Order section -->
	<section class="order-section bg-light">
		<div class="order-section-img d-none d-md-block"
			style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/order-img-1.jpg) center; background-size: cover; right: 0%; left: 50%;">
		</div>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-5 text-md-end">
					<h2 class="text-corporate-2 mb-4">Не нашли подходящего варианта из нашего каталога?</h2>
					<p class="mb-4">Наш дизайнер создаст для Вас дизайн любой корпусной мебели Вашей мечты абсолютно
						<strong>бесплатно!</strong>
					</p>
					<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/order-mail.php">
						<div class="row justify-content-end">
							<div class="col-md-6">
								<label for="exampleFormControlInput1116" class="form-label">Ваше имя</label>
								<input type="text" name="name" class="form-control-corporate-2" id="exampleFormControlInput1116"
									placeholder="">
							</div>
							<div class="col-md-6">
								<label for="exampleFormControlInput3216" class="form-label">Ваш телефон*</label>
								<input type="text" name="tel" class="form-control-corporate-2 telMask" id="exampleFormControlInput3216"
									required>
							</div>
							<div class="col-md-6 mb-5 mb-md-0">
								<button type="submit" class="d-block w-100 btn btn-lg btn-corporate-2">Записаться к дизайнеру</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/order-img-1.jpg" class="img-fluid d-md-none">
				</div>
			</div>
		</div>
	</section>
	<!-- /Order section -->


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
									<p class="mb-0">Кухни, шкафы, гардеробные, гостиные, мягкая мебель, прихожие, спальни, детские,
										обеденные группы и другая мебель готовая и на заказ.</p>
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
							<p class="mb-0">При заказе кухни - мойка, посудосушитель и петли с доводчиком <strong>в ПОДАРОК!</strong>
							</p>
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

	<?php
	$obj = get_queried_object();
	$cat_name = $obj->name;

	$query = new WP_Query(array(
		'product_cat' => $cat_name,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_tag',
				'field' => 'slug', // Поле, по которому ищем термин
				'terms' => 'витринные-образцы'
			)
		)
	));

	// Считаем кол-во записей
	$posts_count = 0;
	while ($query->have_posts()) {
		$query->the_post();
		$posts_count = $posts_count + 1;
	}
	wp_reset_postdata();

	// Если есть записи для распродажи, то добавляем раздел
	if ($posts_count != 0) { ?>
		<!-- SALE SECTION -->
		<section class="sale-section pt-5 pb-2 bg-light">
			<div class="container shkafy-cupe-section site-section">
				<div class="row">
					<div class="col">
						<h2 class="text-center text-corporate-2 mb-0">Распродажа витринных образцов</h2>
						<p class="section-subtitle text-center mb-2">Покупайте готовую мебель со скидкой до 50%!</p>
						<div class="title-line m-auto mb-5">
							<div class="title-quadro" style="left: 0;"></div>
							<div class="title-quadro" style="left: 25px;"></div>
							<div class="title-quadro" style="right: 0px;"></div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<?php
					// Выводим записи
					while ($query->have_posts()) {
						$query->the_post();
						$price = number_format(get_post_meta(get_the_ID(), '_regular_price', true), 0, ',', ' ');
						$sale = number_format(get_post_meta(get_the_ID(), '_price', true), 0, ',', ' ');

						if (get_post_meta(get_the_ID(), '_stock_status', true) == 'instock') { ?>
							<div class="col-md-<?php if ($posts_count <= 2) {
								echo '6';
							} else {
								echo '4';
							} ?> mb-5">
								<div class="approximation<?php if ($posts_count <= 2) {
									echo ' approximation-lg';
								} ?> shadow rounded">

									<a href="<?php echo get_permalink(); //echo get_permalink( $product->post->id ); ?>">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
										<div class="card-wrapper">
											<?php
											if ($sale != $price) { ?>
												<div class="flag">
													<div class="flag-old-price"><?php echo $price; ?> руб</div>
													<div class="flag-price"><?php echo $sale; ?> руб</div>
												</div>
											<?php } else { ?>
												<div class="flag pt-3">
													<div class="flag-price"><?php echo $price; ?> руб</div>
												</div>
											<?php }
											?>
											<h2><?php the_title(); ?></h2>
										</div>
									</a>
								</div>
							</div>
						<?php } else { // Если продукта НЕТ в наличии ?>
							<div class="col-md-<?php if ($posts_count <= 2) {
								echo '6';
							} else {
								echo '4';
							} ?> mb-5">
								<div class="approximation<?php if ($posts_count <= 2) {
									echo ' approximation-lg';
								} ?> shadow rounded">
									<a href="<?php echo get_permalink(); //echo get_permalink( $product->post->id ); ?>">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
										<div class="card-wrapper">
											<div class="flag pt-3">
												<div class="flag-price">Продано</div>
											</div>
											<h2><?php the_title(); ?></h2>
										</div>
									</a>
								</div>
							</div>
						<?php }
					}
					?>
				</div>
			</div>
		</section>
		<!-- END SALE SECTION -->
	<?php }
	?>

<?php get_footer(); ?>