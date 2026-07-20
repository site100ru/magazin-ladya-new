<?php
	
	/*
		Template Name: Наши работы
		Template Post Type: page
	*/
?>

<?php get_header(); ?>
		

<!-- Header -->
		<header class="second-header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col text-center">
						<h1>Наши работы</h1>
						<p class="header-description">Примеры нашей продукции.</p>
						<!--button type="submit" class="btn btn-lg btn-corporate-1 mb-3 mb-md-0" data-bs-toggle="modal" data-bs-target="#designerModal">Запись к дизайнеру</button>
						<button type="submit" class="btn btn-lg btn-corporate-outline-1 mb-3 mb-md-0">Узнать стоимость кухни</button>
						<button type="submit" class="btn btn-lg btn-corporate-1" data-bs-toggle="modal" data-bs-target="#measurerModal">Вызов замерщика</button-->
					</div>
				</div>
			</div>
		</header>
		<!-- /Header -->
		
		
		<!-- Catalogy -->
		<div id="portfolio-sp" class="scroll-point"></div>
		<section class="portfolio-section py-5">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="text-center text-darkbrown mb-1">Наши работы</h2>
						<div class="title-line m-auto mb-4">
							<div class="title-quadro" style="left: 0;"></div>
							<div class="title-quadro" style="left: 25px;"></div>
							<div class="title-quadro" style="right: 0px;"></div>
						</div>
						<div class="row mb-5">
							<div class="col">
								<div class="nav-scroller">
									<ul class="nav d-flex justify-content-start justify-content-lg-center" id="myTab" role="tablist">
										<?php
											$args = [
												'taxonomy'      => [ 'cat-portfolio' ], // название таксономии с WP 4.5
												'order' => 'ASC',
												'orderby' => 'slug',
												/* Может быть много других параметров */
											];
											$terms = get_terms( $args );
											$active = false;
											foreach( $terms as $term ) { ?>
												<li class="nav-item" role="presentation">
													<a class="nav-link px-0 mx-2<?php if ( $active == false ) echo ' active'; ?>" id="<?php echo $term->name; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $term->name; ?>" role="tab" aria-controls="<?php echo $term->name; ?>" aria-selected="true"><?php echo $term->name; ?></a>
												</li>
											<?php $active = true; }
										?>
									</ul>
								</div>
								
								<div class="d-lg-none text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/left-right-finger.png" style="opacity: 1; max-width: 25px;"></div>
								
								<div class="tab-content pt-4" id="myTabContent">
									<?php
										$args = [
											'taxonomy'      => [ 'cat-portfolio' ], // название таксономии с WP 4.5
											'order' => 'ASC',
											'orderby' => 'slug',
											/* Может быть много других параметров */
										];
										$terms = get_terms( $args );
										$active = false;
										foreach( $terms as $term ) { ?>
											<div class="tab-pane fade<?php if ( $active == false ) echo ' show active'; ?>" id="<?php echo $term->name; ?>" role="tabpanel" aria-labelledby="<?php echo $term->name; ?>-tab">
												<div class="row">
													<?php
														
														$query = new WP_Query( array(
															
															'tax_query' => array(
																array(
																	'taxonomy' => 'cat-portfolio',
																	'field'    => 'slug', // Поле, по которому ищем термин
																	'terms'    => $term->slug
																)
															)
														) );
																						
														while ( $query->have_posts() ) { $query->the_post(); ?>
															<div class="col-md-4 mb-5">
																<a onClick="galleryOn('gallery-<?php echo $post->ID; ?>');">	
																	<div class="approximation shadow rounded">
																		<img data-src="<?php echo get_the_post_thumbnail_url(); ?>" loading="lazy">
																		<!--div class="card-wrapper"><h3><?php the_title(); ?></h3></div-->
																	</div>
																</a>
															</div>
														<?php }
													?>
												</div>
											</div>
										<?php $active = true; }
									?>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>
		<!-- /Catalogy -->
		
		
		<!-- Advantages -->
		<div id="advantages-sp" class="scroll-point"></div>
		<section class="advantages bg-light py-5">
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
		<section class="actions-section bg-white pt-5">
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
		
		<!-- Gallery wrapper -->
		<div id="galleryWrapper" style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999;">
			<?php
				$query = new WP_Query( array(
					'post_type' => 'portfolio'
				) );
											
				while ( $query->have_posts() ) { $query->the_post(); ?>
					<div id="gallery-<?php echo $post->ID; ?>" class="carousel slide" data-bs-ride="false" data-bs-interval="false" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
						
						
						<div class="carousel-indicators">
							<?php
								for ( $i=1; $i<=9; $i++ ) {
									if ( get_post_meta($post->ID, '_img-'.$i ) ) { ?>
										<button class="carousel-indicator-2<?php if ( $i == 1 ) echo ' active'; ?>" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $i-1; ?>" aria-label="Slide 1"></button>
									<?php }
								}
							?>
						</div>
						
						
						<div class="carousel-inner h-100">
							<?php
								for ( $i=1; $i<=9; $i++ ) {
									if ( get_post_meta($post->ID, '_img-'.$i ) ) { ?>
										<div class="carousel-item carousel-item-2 h-100 <?php if ( $i == 1 ) echo ' active'; ?>">
											<div class="row align-items-center h-100">
												<div class="col text-center">
													<img data-src="<?php echo str_replace('http://', 'https://', get_post_meta($post->ID, '_img-'.$i )[0]); ?>" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh;" alt="...">
												</div>
											</div>
										</div>
										
									<?php }
								}
							?>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				<?php wp_reset_postdata(); }
			?>
			<!-- Кнопка закрытия галереи -->
			<button type="button" onClick="closeGallery();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999;" aria-label="Close"></button>
		</div>


		<script>
			/* Функция открытия галереи */
			function galleryOn(gal) {
				var gallery = gal; // Получаем ID галереи
				// Открываем обертку галереи
				document.getElementById('galleryWrapper').style.display = 'block';
				
				/* Открываем галерею */
				<?php
					$query = new WP_Query( array(
						'post_type' => 'portfolio'
					) );
					while ( $query->have_posts() ) { $query->the_post();
						echo 'if ( gallery == "gallery-'.$post->ID.'" ) { document.getElementById("gallery-'.$post->ID.'").style.display = "block"; }';
					}
				?>
			}

			// Кнопка закрытия галереи
			function closeGallery() {
				// Закрываем обертку галереи
				document.getElementById('galleryWrapper').style.display = 'none';
				//document.getElementById("gallery-<?php echo $post->ID; ?>").style.display = "none";
				<?php
					$query = new WP_Query( array(
						'post_type' => 'portfolio'
					) );
					while ( $query->have_posts() ) { $query->the_post();
						echo 'document.getElementById("gallery-'.$post->ID.'").style.display = "none";';
					}
				?>
			}
		</script>
		
		<?php get_footer(); ?>