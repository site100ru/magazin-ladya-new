<?php
	
	/**
	 * Template Name: Главная
	 * Template Post Type: page
	 */
	
?>

<?php get_header(); ?>

        <!-- Header -->
		<header class="main-header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col text-center">
						<h1>Вся мебель в одном магазине!</h1>
						<p class="header-description">Кухни, шкафы, гардеробные, гостиные, мягкая мебель, прихожие, спальни, детские, обеденные группы и другая мебель готовая и на заказ.</p>
						
						<button type="submit" class="btn btn-lg btn-corporate-1 mb-3 mb-md-0" data-bs-toggle="modal" data-bs-target="#designerModal">Запись к дизайнеру</button>
						
						<a href="#quiz-sp" type="button" class="btn btn-lg btn-corporate-outline-1 mb-3 mb-md-0">Рассчитать стоимость</a>
						
						<button type="submit" class="btn btn-lg btn-corporate-1" data-bs-toggle="modal" data-bs-target="#measurerModal">Вызов замерщика</button>
						
						<!--p class="header-description mt-5" style="background: #dd127b; padding: 10px; max-width: 675px; margin-x: auto; border-radius: 5px;">При заказе мебели скажи кодовое слово "МЕБЕЛЬ"<br>и получи <span class="fw-bold text-uppercase">подарок!</span></p-->
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
		
		
		<!-- Catalogy -->
		<div id="portfolio-sp" class="scroll-point"></div>
		<section class="py-5 bg-white">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="text-center text-darkbrown mb-1">Каталог</h2>
						<div class="title-line m-auto mb-5">
							<div class="title-quadro" style="left: 0;"></div>
							<div class="title-quadro" style="left: 25px;"></div>
							<div class="title-quadro" style="right: 0px;"></div>
						</div>
						<div class="row">
							<?php
								$terms = get_terms( array(
									'taxonomy' => 'product_cat',
									'hide_empty' => true,
									'pad_counts'=> true,
									'orderby' => 'menu_order',
									'parent' => 0
								) );

								if( $terms ) :
									foreach( $terms as $term ) : 
										$thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
										$thumbnail_url = wp_get_attachment_url( $thumbnail_id );
									?>
										<!--div class="col-lg-4 col-md-6 mt-5 project-entry">
											<h3 class="mb-3">
												<?php echo $term->name;?>
												<span class="fw-light">(<?php if ($term->count > 0) : ?><?php echo $term->count; ?><?php else: ?>0<?php endif; ?>)</span>
											</h3>
											<a class="subcategory-image" href="<?php echo get_term_link($term->term_id);?>">
												<div class="d-block figure rounded shadow" style="" onClick="galleryOn('num1');">
													<?php woocommerce_subcategory_thumbnail( $term );  ?>
												</div>
											</a>
										</div-->
										
										<div class="col-md-6 mb-5">
											<a href="<?php echo get_term_link($term->term_id); ?>">
												<div class="approximation shadow rounded">
													<img data-src="<?php echo $thumbnail_url;; ?>" src="<?php echo $thumbnail_url;; ?>" loading="lazy" style="height: 460px; width: 636px;">
													<div class="card-wrapper"><h2><?php echo $term->name;?></h2></div>
												</div>
											</a>
										</div>
									<?php endforeach;
								endif;
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Catalogy -->
		
		
		<!-- Order section -->
		<section class="order-section bg-light">
			<div class="order-section-img d-none d-md-block" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/order-img-1.jpg) center; background-size: cover; right: 0%; left: 50%;"></div>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-5 text-md-end">
						<h2 class="text-darkbrown mb-4">Не нашли подходящего варианта из нашего каталога?</h2>
						<p class="mb-4">Наш дизайнер создаст для Вас дизайн любой корпусной мебели Вашей мечты абсолютно <strong>бесплатно!</strong></p>
						<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/order-mail.php">
							<div class="row justify-content-end">
								<div class="col-md-6">
									<label for="exampleFormControlInput1-1" class="form-label">Ваше имя</label>
									<input type="text" name="name" class="form-control-corporate-2" id="exampleFormControlInput1-1" placeholder="">
								</div>
								<div class="col-md-6">
									<label class="form-label">Ваш телефон*</label>
									<input type="text" name="tel" class="form-control-corporate-2 telMask" id="exampleFormControlInput2" required>
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
		
		
		<!-- Portfolio --
		<div id="portfolio-sp" class="scroll-point"></div>
		<section class="slider-portfolio-section bg-white py-5">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2 class="text-darkbrown mb-1">Некоторые наши работы</h2>
						<div class="title-line m-auto mb-5">
							<div class="title-quadro" style="left: 0;"></div>
							<div class="title-quadro" style="left: 25px;"></div>
							<div class="title-quadro" style="right: 0px;"></div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-10 mb-5">
								<div id="carousel-1" class="carousel slide" data-bs-ride="false"  data-bs-interval="false">
									<div class="carousel-inner shadow rounded">
										
										<?php /*
											$args = [
												'taxonomy'      => [ 'cat-portfolio' ], // название таксономии с WP 4.5
												/* Может быть много других параметров *
											];
											$terms = get_terms( $args );
											$active = false;
											foreach( $terms as $term ) { ?>
												
													
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
																<div class="carousel-item<?php if ( $active == false ) { echo ' active'; $count = true; } ?>">
																		
																		<div class="approximation shadow rounded">
																			<img data-src="<?php echo get_the_post_thumbnail_url(); ?>" loading="lazy">
																			<!--div class="card-wrapper"><h3><?php the_title(); ?></h3></div-->
																		</div>
																	
																</div>
															<?php }
														?>
													
												
											<?php $active = true; }
										?>
										
										
										<?php /*
											// 'title' => 'Разное' можно удалить, тогда портфолио будет показываться из разных разделов.
											$query = new WP_Query( [ 'post_type' => 'portfolio'] );
											
											while ( $query->have_posts() ) { $query->the_post();
												$images = get_post_gallery_images();
												print_r($images);
												
												$count = false;
												foreach ( $images as $image ) {
													$image_id = attachment_url_to_postid( $image ); ?>
													<div class="carousel-item <?php if ( $count == false ) { echo ' active'; $count = true; } ?>">
														<div class="approximation">
															<img src="<?php echo $image; ?>" class="d-block w-100" loading="lazy" alt="...">
														</div>
													</div>
												<?php }
											} */
										?>
										
										
										
										
										<!--div class="carousel-item active">
											<!--a href="#" onClick="galleryOn('gallery-1','img-1-1');"--	
												<div class="approximation">
													<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/portfolio-1.jpg" class="d-block w-100" loading="lazy" alt="...">
													<!--div class="magnifier"></div--
												</div>
											<!--/a--
										</div>
										<!--div class="carousel-item">
											<!--a href="#" onClick="galleryOn('gallery-1','img-1-2');"--	
												<div class="approximation">
													<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/portfolio-2.jpg" class="d-block w-100" loading="lazy" alt="...">
													<!--div class="magnifier"></div--
												</div>
											<!--/a--
										</div>
										<div class="carousel-item">
											<!--a href="#" onClick="galleryOn('gallery-1','img-1-3');"--	
												<div class="approximation">
													<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/portfolio-3.jpg" class="d-block w-100" loading="lazy" alt="...">
													<!--div class="magnifier"></div--
												</div>
											<!--/a--
										</div--
										
										
									</div>
									<button class="carousel-control-prev" type="button" data-bs-target="#carousel-1"  data-bs-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Previous</span>
									</button>
									<button class="carousel-control-next" type="button" data-bs-target="#carousel-1"  data-bs-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Next</span>
									</button>
								</div>
							</div>
						</div>
						<a href="http://магазин-ладья.рф/наши-работы/" type="button" class="btn btn-lg btn-corporate-1 px-1">Смотреть все работы</a>
					</div>
				</div>
			</div>
		</section>
		<!-- /Portfolio -->
		
		
		
		<!-- SECTION PORTFOLIO --
		<section class="section-portfolio bg-white" style="padding-block: 60px;">
			<div class="container">
				<div class="row">
					<div class="col text-md-center">
						<h2 style="margin-bottom: 15px;">Последние выполненные работы</h2>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" style="margin-bottom: 52px;">	
						<div class="row">

							<?php	/*
								$obj = get_queried_object();
								$portfolio_cat = $obj->slug;
								
								$args = [
									'post_type'      => 'portfolio',
									'numberposts' 	 => 6,
									'posts_per_page' => 6,
								];
								
								$query = new WP_Query( $args );
								
								while( $query->have_posts() ) : $query->the_post(); ?>
									<div class="col-md-4 mb-5">
										<a onclick="portfolioGalleryOpen( 'portfolio-gallery-<?php echo get_the_ID(); ?>' )">
											<div class="approximation project-container-2 rounded">
												<img data-src="<?php echo get_post_meta( get_the_ID(), '_img-1' )[0]; ?>" class="rounded" alt="<?php echo get_the_title(); ?>" loading="lazy">
												<div class="card-wrapper">
													<div class="position-absolute"><?php echo get_the_title(); ?></div>
												</div>
											</div>
										</a>
									</div>
								<?php endwhile;
								
								wp_reset_postdata();
							?>
						</div>
						<a href="https://site100.ru/furniture/portfolio-cat/010-кухни/" class="btn btn-lg btn-corporate-color-1" style="margin-top: 12px;">Смотреть еще</a>
					</div>
				</div>
			</div>
		</section>
		<!-- END SECTION PORTFOLIO -->

		<!-- SECTION PORTFOLIO GALLERY -->
		<div id="portfolioGalleryWrapper" style="display: none;">
			<?php
				$obj = get_queried_object();
				$portfolio_cat = $obj->slug;
				switch ( $portfolio_cat ) {
					case 'кухни':
						$portfolio_cat = '010-кухни';
						break;
				}
				
				$args = [
					'post_type'      => 'portfolio',
					'numberposts' 	 => 6,
					'posts_per_page' => 6,
					'portfolio-cat'  => '010-кухни'//$portfolio_cat
				];
				
				$query = new WP_Query( $args );
				
				while( $query->have_posts() ) : $query->the_post(); ?>
					<div id="portfolio-gallery-<?php echo get_the_ID(); ?>" class="carousel slide" data-bs-ride="false" data-bs-interval="false" style="display: none; position: fixed; top: 0; height: 100%; width: 100%; z-index: 9999;">
						
						<div class="carousel-indicators">
							<?php
								$count_2 = 0;
								for ( $i=1; $i<=9; $i++ ) {
									if ( get_post_meta( get_the_ID(), '_img-'.$i ) ) {
										if ( $count_2 == 0 ) { ?>
											
											<button id="ind-<?php echo get_the_ID(); ?>-<?php echo $count_2; ?>" type="button" data-bs-target="#portfolio-gallery-<?php echo get_the_ID(); ?>" data-bs-slide-to="<?php echo $count_2; ?>" aria-label="Slide 3" class="active" aria-current="true"></button>
											
										<?php $count_2 = $count_2 + 1; } else { ?>
											
											<button id="ind-<?php echo get_the_ID(); ?>-<?php echo $count_2; ?>" type="button" data-bs-target="#portfolio-gallery-<?php echo get_the_ID(); ?>" data-bs-slide-to="<?php echo $count_2; ?>" aria-label="Slide 3"></button>
											
										<?php $count_2 = $count_2 + 1; }
									}
								}
							?>
						</div>
						<div class="carousel-inner h-100">
							<?php
								$count_2 = 0;
								for ( $i=1; $i<=9; $i++ ) {
									if ( get_post_meta(get_the_ID(), '_img-'.$i ) ) { ?>
										<div id="img-<?php echo get_the_ID(); ?>-<?php echo $count_2; ?>" class="carousel-item h-100 <?php if ( $i == 1 ) echo ' active'; ?>" data-bs-interval="999999999">
											<div class="row align-items-center h-100">
												<div class="col text-center">
													<img src="<?php echo get_post_meta(get_the_ID(), '_img-'.$i )[0]; ?>" class="img-fluid" style="max-width: 90vw; max-height: 90vh;" alt="...">
												</div>
											</div>
										</div>
									<?php $count_2 = $count_2 + 1; }
								}
							?>
						</div>
						
						<button class="carousel-control-prev" type="button" data-bs-target="#portfolio-gallery-<?php echo get_the_ID(); ?>" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#portfolio-gallery-<?php echo get_the_ID(); ?>" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				<?php endwhile;
				
				wp_reset_postdata();
			?>
			
			<button  type="button" onClick="portfolioGalleryClose();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999" aria-label="Close"></button>
		</div>
		<!-- END SECTION PORTFOLIO GALLERY -->

		<!-- SECTION PORTFOLIO SCRIPT -->
		<script>
			function portfolioGalleryOpen( gal ) {
				var gallery = gal; // Получаем ID галереи

				// Открываем обертку галереи
				document.getElementById( "portfolioGalleryWrapper" ).style.display = "block";

				// Открываем галерею
				document.getElementById( gallery ).style.display = "block";
			}

			function portfolioGalleryClose() {
				// Закрываем обертку галереи
				document.getElementById( "portfolioGalleryWrapper" ).style.display = "none";
				// Закрываем галерею
				<?php	
					$obj = get_queried_object();
					$portfolio_cat = $obj->slug;
					switch ( $portfolio_cat ) {
						case 'кухни':
							$portfolio_cat = '010-кухни';
							break;
					}
					
					$args = [
						'post_type'      => 'portfolio',
						'numberposts' 	 => 6,
						'posts_per_page' => 6,
						'portfolio-cat'  => '010-кухни'//$portfolio_cat
					];
					
					$query = new WP_Query( $args );
					
					while( $query->have_posts() ) : $query->the_post(); ?>
						document.getElementById( 'portfolio-gallery-<?php echo get_the_ID(); ?>' ).style.display = "none";
					<?php endwhile;
					
					wp_reset_postdata();*/
				?>
			}
		</script>
		<!-- END SECTION PORTFOLIO SCRIPT -->
		
		
		
		
		<!-- SECTION PORTFOLIO -->
		<!-- Section portfolio HTML -->
		<div id="portfolio-sp" class="scroll-point"></div>
		<section class="portfolio-section py-5">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="text-center text-darkbrown mb-1">Некоторые наши работы</h2>
						<div class="title-line m-auto mb-4">
							<div class="title-quadro" style="left: 0;"></div>
							<div class="title-quadro" style="left: 25px;"></div>
							<div class="title-quadro" style="right: 0px;"></div>
						</div>
						<div class="row">
							<div class="col">
								<div class="nav-scroller">
									<ul class="nav d-flex justify-content-center" id="myTab" role="tablist">
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
								
								<div class="d-md-none text-center">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/left-right-finger.png" style="opacity: 1; max-width: 25px;">
								</div>
								
								<div class="tab-content pt-4" id="myTabContent">
									<?php
										$args = [
											'taxonomy'      => [ 'cat-portfolio' ], // название таксономии с WP 4.5
											'order' => 'ASC',
											'orderby' => 'slug'
										];
										$terms = get_terms( $args );
										$active = false;
										foreach( $terms as $term ) { ?>
											<div class="tab-pane fade<?php if ( $active == false ) echo ' show active'; ?>" id="<?php echo $term->name; ?>" role="tabpanel" aria-labelledby="<?php echo $term->name; ?>-tab">
												<div class="row">
													<?php
														
														$query = new WP_Query( array(
															'numberposts' 	 => 6,
															'posts_per_page' => 6,
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
																	<div class="approximation rounded">
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
						</div><!-- .row -->
						<div class="row">
							<div class="col text-center">
								<a href="https://магазин-ладья.рф/наши-работы/" type="button" class="btn btn-lg btn-corporate-1 px-1">Смотреть все работы</a>
							</div>
						</div>
					</div><!-- .col -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section>
		<!-- Section portfolio HTML -->
		
		<!-- Section portfolio gallery -->
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
													<img data-src="<?php echo str_replace('http://', 'https://', get_post_meta($post->ID, '_img-'.$i )[0]); ?>" class="img-fluid lazyload" loading="lazy" style="max-width: 90vw; max-height: 90vh;" alt="...">

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
		<!-- End section portfolio gallery -->
		
		<!-- Section portfolio script  -->
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
		<!-- End section portfolio script -->
		<!-- END SECTION PORTFOLIO -->
		
		
		
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
		
		
		<!-- Section Quiz -->
		<div id="quiz-sp" class="scroll-points"></div>
		<section id="quiz" class="py-5 bg-light">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col">
						<h2 class="mb-1 text-corporate-2 text-center">Ответьте на несколько вопросов ниже<br>и узнайте предварительную стоимость Вашей мебели</h2>
						<div class="title-line m-auto mb-5">
							<div class="title-quadro" style="left: 0;"></div>
							<div class="title-quadro" style="left: 25px;"></div>
							<div class="title-quadro" style="right: 0px;"></div>
						</div>
						<div class="row justify-content-center">
					
							<!--  ПЕРВЫЙ ОБЩИЙ ВОПРОС -->
							<div class="col-12" id="1">
								<h3 class="text-center mb-5"><!--span class="me-2" style="color: #A5A5A5;">1/7</span-->Какая мебель Вас интересует?</h3>
								<div class="row justify-content-md-center mb-5">
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-1-1">
											<input type="radio" id="answer-1-1" name="quostion-1" class="checkbox" value="Кухня">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/1-1.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Кухня</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-1-2">
											<input type="radio" id="answer-1-2" name="quostion-1" class="checkbox" value="Шкаф или гардеробная">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/1-2.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Шкаф или гардеробная</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-1-3">
											<input type="radio" id="answer-1-3" name="quostion-1" class="checkbox" value="Другая корпусная мебель">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/1-3.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Другая корпусная мебель</h3>
									</div>
								</div>
								<div class="row">
									<div class="col text-center">
										<input type="button" value="Далее" class="btn btn-corporate-1" style="width: 175px;" onclick="nextQuostion( '1' );">
									</div>
								</div>
							</div>
							<!--  /ПЕРВЫЙ ОБЩИЙ ВОПРОС -->
							
							
							<!-- ВОПРОСЫ ПО КУХНЯМ -->
							<div class="col-12" id="2-1" style="display: none;">
								<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">2/7</span>Какая планировка кухни Вам нужна?</h3>
								<div class="row justify-content-md-center mb-5">
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-2-1-1">
											<input type="radio" id="answer-2-1-1" name="quostion-2-1" class="checkbox" value="Прямая">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/2-1-1.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Прямая</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-2-1-2">
											<input type="radio" id="answer-2-1-2" name="quostion-2-1" class="checkbox" value="Угловая">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/2-1-2.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Угловая</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-2-1-3">
											<input type="radio" id="answer-2-1-3" name="quostion-2-1" class="checkbox" value="П-образная">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/2-1-3.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">П-образная</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-2-1-4">
											<input type="radio" id="answer-2-1-4" name="quostion-2-1" class="checkbox" value="С островком">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/2-1-4.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">С островком</h3>
									</div>
									<!--div class="col-2">
										<label class="option_item mb-3" for="answer-2-1-5">
											<input type="radio" id="answer-2-1-5" name="quostion-2-1" class="checkbox" value="Пока не знаю">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/2-1-5.jpg" style="width: 100%;">
											</div>
										</label>
										<h3>Пока не знаю</h3>
									</div-->
								</div>
								<div class="row justify-content-center">
									<div class="col text-center" style="margin-top: 35px;">
										<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '2-1' );">
										<input type="button" value="Далее" class="btn btn-corporate-1" onclick="nextQuostion( '2-1' );">
									</div>
								</div>
							</div>
							
							<!-- Один размер -->
							<div class="col-md-6" id="3-1-1" style="display: none;">
								<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/7</span>Укажите размеры</h3>
								<div class="row justify-content-md-center mb-5">
									<div class="col-md-4">
										<label for="answer-3-1-1" class="form-label">Длинна 1, м</label>
										<input type="text" class="form-control" id="answer-3-1-1-1" name="quostion-3-1-1">
									</div>
								</div>
								<div class="row justify-content-center">
									<div class="col text-center" style="margin-top: 35px;">
										<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '3-1-1' );">
										<input type="button" value="Далее" class="btn btn-corporate-1" onclick="nextQuostion( '3-1-1' );">
									</div>
								</div>
							</div>
							
							<!-- Два размера -->
							<div class="col-md-6" id="3-1-2" style="display: none;">
								<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/7</span>Укажите размеры</h3>
								<div class="row justify-content-md-center mb-5">
									<div class="col-md-4">
										<label for="answer-3-1-1" class="form-label">Длинна 1, м</label>
										<input type="text" class="form-control" id="answer-3-1-1-2" name="quostion-3-1-2">
									</div>
									<div class="col-md-4">
										<label for="answer-3-1-2" class="form-label">Длинна 2, м</label>
										<input type="text" class="form-control" id="answer-3-1-2-2" name="quostion-3-1-2">
									</div>
								</div>
								<div class="row justify-content-center">
									<div class="col text-center" style="margin-top: 35px;">
										<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '3-1-2' );">
										<input type="button" value="Далее" class="btn btn-corporate-1" onclick="nextQuostion( '3-1-2' );">
									</div>
								</div>
							</div>
							
							<!-- Три размера -->
							<div class="col-md-6" id="3-1-3" style="display: none;">
								<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/7</span>Укажите размеры</h3>
								<div class="row justify-content-md-center mb-5">
									<div class="col-md-4">
										<label for="answer-3-1-1" class="form-label">Длинна 1, м</label>
										<input type="text" class="form-control" id="answer-3-1-1-3" name="quostion-3-1-2">
									</div>
									<div class="col-md-4">
										<label for="answer-3-1-2" class="form-label">Длинна 2, м</label>
										<input type="text" class="form-control" id="answer-3-1-2-3" name="quostion-3-1-2">
									</div>
									<div class="col-md-4">
										<label for="answer-3-1-3" class="form-label">Длинна 3, м</label>
										<input type="text" class="form-control" id="answer-3-1-3-3" name="quostion-3-1-2">
									</div>
								</div>
								<div class="row justify-content-center">
									<div class="col text-center" style="margin-top: 35px;">
										<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '3-1-3' );">
										<input type="button" value="Далее" class="btn btn-corporate-1" onclick="nextQuostion( '3-1-3' );">
									</div>
								</div>
							</div>
							
							<!-- Четыре размера -->
							<div class="col-md-6" id="3-1-4" style="display: none;">
								<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/7</span>Укажите размеры в метрах</h3>
								<div class="row justify-content-md-center mb-5">
									<div class="col-md-3">
										<label for="answer-3-1-1" class="form-label">Длинна 1</label>
										<input type="text" class="form-control" id="answer-3-1-1-4" name="quostion-3-1-2">
									</div>
									<div class="col-md-3">
										<label for="answer-3-1-2" class="form-label">Длинна 2</label>
										<input type="text" class="form-control" id="answer-3-1-2-4" name="quostion-3-1-2">
									</div>
									<div class="col-md-3">
										<label for="answer-3-1-3" class="form-label">Длинна 3</label>
										<input type="text" class="form-control" id="answer-3-1-3-4" name="quostion-3-1-2">
									</div>
									<div class="col-md-3">
										<label for="answer-3-1-4" class="form-label">Длинна островка</label>
										<input type="text" class="form-control" id="answer-3-1-4-4" name="quostion-3-1-2">
									</div>
								</div>
								<div class="row justify-content-center">
									<div class="col text-center" style="margin-top: 35px;">
										<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '3-1-4' );">
										<input type="button" value="Далее" class="btn btn-corporate-1" onclick="nextQuostion( '3-1-4' );">
									</div>
								</div>
							</div>
							
							<!-- 4/7 -->
							<div class="col-12" id="4-1" style="display: none;">
								<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">4/7</span>Какой стиль кухни Вы рассматриваете?</h3>
								<div class="row justify-content-md-center mb-5">
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-4-1-1">
											<input type="radio" id="answer-4-1-1" name="quostion-4-1" class="checkbox" value="Современный">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/4-1-1.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Современный</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-4-1-2">
											<input type="radio" id="answer-4-1-2" name="quostion-4-1" class="checkbox" value="Классический">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/4-1-2.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Классический</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-4-1-3">
											<input type="radio" id="answer-4-1-3" name="quostion-4-1" class="checkbox" value="Лофт">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/4-1-3.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Лофт</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-4-1-4">
											<input type="radio" id="answer-4-1-4" name="quostion-4-1" class="checkbox" value="Пока не знаю, нужна консультация">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/4-1-4.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Пока не знаю, нужна консультация</h3>
									</div>
								</div>
								<div class="row justify-content-center">
									<div class="col text-center" style="margin-top: 35px;">
										<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '4-1' );">
										<input type="button" value="Далее" class="btn btn-corporate-1" onclick="nextQuostion( '4-1' );">
									</div>
								</div>
							</div>
							
							<!-- 5/7 -->
							<div class="col-12" id="5-1" style="display: none;">
								<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">5/7</span>Какой материал фасада кухни Вы хотите?</h3>
								<div class="row justify-content-md-center mb-5">
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-5-1-1">
											<input type="radio" id="answer-5-1-1" name="quostion-5-1" class="checkbox" value="ЛДСП/ЛМДФ">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/5-1-1.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">ЛДСП</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-5-1-2">
											<input type="radio" id="answer-5-1-2" name="quostion-5-1" class="checkbox" value="Пленка">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/5-1-2.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">МДФ ПВХ (пленка)</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-5-1-3">
											<input type="radio" id="answer-5-1-3" name="quostion-5-1" class="checkbox" value="Эмаль">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/5-1-3.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Эмаль, шпон</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-5-1-4">
											<input type="radio" id="answer-5-1-4" name="quostion-5-1" class="checkbox" value="Пластик">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/5-1-4.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Пластик</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-5-1-5">
											<input type="radio" id="answer-5-1-5" name="quostion-5-1" class="checkbox" value="Массив">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/5-1-5.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">AGT</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-5-1-6">
											<input type="radio" id="answer-5-1-6" name="quostion-5-1" class="checkbox" value="Пока не знаю, нужна консультация">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/5-1-6.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Пока не знаю, нужна консультация</h3>
									</div>
								</div>
								<div class="row justify-content-center">
									<div class="col text-center" style="margin-top: 35px;">
										<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '5-1' );">
										<input type="button" value="Далее" class="btn btn-corporate-1" onclick="nextQuostion( '5-1' );">
									</div>
								</div>
							</div>
							
							<!-- 6/7 -->
							<div class="col-12" id="6-1" style="display: none;">
								<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">6/7</span>Какой подарок Вы хотите получить в случае заказа?</h3>
								<div class="row justify-content-md-center mb-5">
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-6-1-1">
											<input type="radio" id="answer-6-1-1" name="quostion-6-1" class="checkbox" value="Скидка 10%">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/6-1-1.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Скидка до 30%</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-6-1-2">
											<input type="radio" id="answer-6-1-2" name="quostion-6-1" class="checkbox" value="Беспроцентная рассрочка на 6 месяцев">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/6-1-2.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Беспроцентная рассрочка на 6 месяцев</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-6-1-3">
											<input type="radio" id="answer-6-1-3" name="quostion-6-1" class="checkbox" value="Скидка 15% на заказ шкафа в теченее года">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/6-1-4.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Дополнительная скидка на заказ шкафа в теченее года</h3>
									</div>
									<!--div class="col-2">
										<label class="option_item mb-3" for="answer-6-1-4">
											<input type="radio" id="answer-6-1-4" name="quostion-6-1" class="checkbox" value="С островком">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/6-1-4.jpg" style="width: 100%;">
											</div>
										</label>
										<h3>Пластик</h3>
									</div-->
								</div>
								<div class="row justify-content-center">
									<div class="col text-center" style="margin-top: 35px;">
										<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '6-1' );">
										<input type="button" value="Далее" class="btn btn-corporate-1" onclick="nextQuostion( '6-1' );">
									</div>
								</div>
							</div>
							
							<!-- 7/1 -->
							<div class="col-md-6" id="7-1" style="display: none;">
								<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">7/7</span>Введите Ваши контакты</h3>
								<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/get_calculate_kitchen.php">
									<div class="row justify-content-center">
										<div class="col-md-4">
											<label for="exampleFormControlInput1-2" class="form-label">Ваше имя</label>
											<input type="text" class="form-control" id="exampleFormControlInput1-2" name="name">
										</div>
										<div class="col-md-4">
											<label for="exampleFormControlInput2" class="form-label">Ваш телефон</label>
											<input type="text" class="form-control telMask" id="exampleFormControlInput2" name="phone" required>
										</div>
									</div>
									<div class="row">
										<div class="col text-center" style="margin-top: 45px;">
											<input type="hidden" id="answer1-1" name="answer1">
											<input type="hidden" id="answer2-1" name="answer2">
											<input type="hidden" id="answer3-1-1" name="answer3-1">
											<input type="hidden" id="answer3-1-2" name="answer3-2">
											<input type="hidden" id="answer3-1-3" name="answer3-3">
											<input type="hidden" id="answer3-1-4" name="answer3-4">
											<input type="hidden" id="answer4-1" name="answer4">
											<input type="hidden" id="answer5-1" name="answer5">
											<input type="hidden" id="answer6-1" name="answer6">
											<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '7-1' );">
											<input type="submit" class="btn btn-corporate-1" value="Отправить">
										</div>
									</div>
								</form>
							</div>
							<!-- /ВОПРОСЫ ПО КУХНЯМ -->
							
							
							<!-- ВОПРОСЫ ПО ШКАФАМ -->
							<div class="col-12" id="2-2" style="display: none;">
								<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">2/7</span>Какой тип шкафа Вам нужен?</h3>
								<div class="row justify-content-md-center mb-5">
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-2-2-1">
											<input type="radio" id="answer-2-2-1" name="quostion-2-2" class="checkbox" value="Корпусный">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/2-2-1.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Корпусный</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-2-2-2">
											<input type="radio" id="answer-2-2-2" name="quostion-2-2" class="checkbox" value="Встроенный">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/2-2-2.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Встроенный</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-2-2-3">
											<input type="radio" id="answer-2-2-3" name="quostion-2-2" class="checkbox" value="Угловой">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/2-2-3.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Угловой</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-2-2-4">
											<input type="radio" id="answer-2-2-4" name="quostion-2-2" class="checkbox" value="Радиусный">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/2-2-4.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Радиусный</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-2-2-5">
											<input type="radio" id="answer-2-2-5" name="quostion-2-2" class="checkbox" value="Гардеробный">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/2-2-5.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Гардеробный</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-2-2-6">
											<input type="radio" id="answer-2-2-6" name="quostion-2-2" class="checkbox" value="Пока не знаю">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/2-2-6.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Пока не знаю</h3>
									</div>
								</div>
								<div class="row justify-content-center">
									<div class="col text-center" style="margin-top: 35px;">
										<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '2-2' );">
										<input type="button" value="Далее" class="btn btn-corporate-1" onclick="nextQuostion( '2-2' );">
									</div>
								</div>
							</div>
							
							<div class="col-12" id="3-2" style="display: none;">
								<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/7</span>Какой материал фасада шкафа Вы хотите?</h3>
								<div class="row justify-content-md-center mb-5">
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-3-2-1">
											<input type="radio" id="answer-3-2-1" name="quostion-3-2" class="checkbox" value="ЛДСП">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/3-2-1.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">ЛДСП</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-3-2-2">
											<input type="radio" id="answer-3-2-2" name="quostion-3-2" class="checkbox" value="Пескоструй">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/3-2-2.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Пескоструй</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-3-2-3">
											<input type="radio" id="answer-3-2-3" name="quostion-3-2" class="checkbox" value="Зеркало">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/3-2-3.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Зеркало</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-3-2-4">
											<input type="radio" id="answer-3-2-4" name="quostion-3-2" class="checkbox" value="Фотопечать">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/3-2-4.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Фотопечать</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-3-2-5">
											<input type="radio" id="answer-3-2-5" name="quostion-3-2" class="checkbox" value="Комбинированный">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/3-2-5.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Комбинированный</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-3-2-6">
											<input type="radio" id="answer-3-2-6" name="quostion-3-2" class="checkbox" value="Пока не знаю">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/3-2-6.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Пока не знаю, нужна консультация</h3>
									</div>
								</div>
								<div class="row justify-content-center">
									<div class="col text-center" style="margin-top: 35px;">
										<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '3-2' );">
										<input type="button" value="Далее" class="btn btn-corporate-1" onclick="nextQuostion( '3-2' );">
									</div>
								</div>
							</div>
							
							<div class="col-12" id="4-2" style="display: none;">
								<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">4/7</span>Какая ориентировочная ширина шкафа планируется?</h3>
								<div class="row justify-content-md-center mb-5">
									<div class="col-3 col-md-1">
										<label class="option_item mb-3" for="answer-4-2-1">
											<input type="radio" id="answer-4-2-1" name="quostion-4-2" class="checkbox" value="1">
											<div class="option_inner">
												<div class="shadow-wrapper-box"></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/ico/check-background.svg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">1 м</h3>
									</div>
									<div class="col-3 col-md-1">
										<label class="option_item mb-3" for="answer-4-2-2">
											<input type="radio" id="answer-4-2-2" name="quostion-4-2" class="checkbox" value="1,5">
											<div class="option_inner">
												<div class="shadow-wrapper-box"></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/ico/check-background.svg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">1,5 м</h3>
									</div>
									<div class="col-3 col-md-1">
										<label class="option_item mb-3" for="answer-4-2-3">
											<input type="radio" id="answer-4-2-3" name="quostion-4-2" class="checkbox" value="2">
											<div class="option_inner">
												<div class="shadow-wrapper-box"></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/ico/check-background.svg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">2 м</h3>
									</div>
									<div class="col-3 col-md-1">
										<label class="option_item mb-3" for="answer-4-2-4">
											<input type="radio" id="answer-4-2-4" name="quostion-4-2" class="checkbox" value="2,5">
											<div class="option_inner">
												<div class="shadow-wrapper-box"></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/ico/check-background.svg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">2,5 м</h3>
									</div>
									<div class="col-3 col-md-1">
										<label class="option_item mb-3" for="answer-4-2-5">
											<input type="radio" id="answer-4-2-5" name="quostion-4-2" class="checkbox" value="3">
											<div class="option_inner">
												<div class="shadow-wrapper-box"></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/ico/check-background.svg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">3 м</h3>
									</div>
									<div class="col-3 col-md-1">
										<label class="option_item mb-3" for="answer-4-2-6">
											<input type="radio" id="answer-4-2-6" name="quostion-4-2" class="checkbox" value="3,5">
											<div class="option_inner">
												<div class="shadow-wrapper-box"></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/ico/check-background.svg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">3,5 м</h3>
									</div>
									<div class="col-3 col-md-1">
										<label class="option_item mb-3" for="answer-4-2-7">
											<input type="radio" id="answer-4-2-7" name="quostion-4-2" class="checkbox" value="4">
											<div class="option_inner">
												<div class="shadow-wrapper-box"></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/ico/check-background.svg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">4 м</h3>
									</div>
									<div class="col-3 col-md-1">
										<label class="option_item mb-3" for="answer-4-2-8">
											<input type="radio" id="answer-4-2-8" name="quostion-4-2" class="checkbox" value="4,5">
											<div class="option_inner">
												<div class="shadow-wrapper-box"></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/ico/check-background.svg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">4,5 м</h3>
									</div>
									<div class="col-3 col-md-1">
										<label class="option_item mb-3" for="answer-4-2-9">
											<input type="radio" id="answer-4-2-9" name="quostion-4-2" class="checkbox" value="5">
											<div class="option_inner">
												<div class="shadow-wrapper-box"></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/ico/check-background.svg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">5 м</h3>
									</div>
									<div class="col-3 col-md-1">
										<label class="option_item mb-3" for="answer-4-2-10">
											<input type="radio" id="answer-4-2-10" name="quostion-4-2" class="checkbox" value=">5">
											<div class="option_inner">
												<div class="shadow-wrapper-box"></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/ico/check-background.svg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">>5 м</h3>
									</div>
								</div>
								<div class="row justify-content-center">
									<div class="col text-center" style="margin-top: 35px;">
										<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '4-2' );">
										<input type="button" value="Далее" class="btn btn-corporate-1" onclick="nextQuostion( '4-2' );">
									</div>
								</div>
							</div>
							
							<div class="col-12" id="5-2" style="display: none;">
								<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">5/7</span>Какое количество дверей Вы предполагаете?</h3>
								<div class="row justify-content-md-center mb-5">
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-5-2-1">
											<input type="radio" id="answer-5-2-1" name="quostion-5-2" class="checkbox" value="1 дверь">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/5-2-1.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">1 дверь</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-5-2-2">
											<input type="radio" id="answer-5-2-2" name="quostion-5-2" class="checkbox" value="2 двери">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/5-2-2.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">2 двери</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-5-2-3">
											<input type="radio" id="answer-5-2-3" name="quostion-5-2" class="checkbox" value="3 двери">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/5-2-3.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">3 двери</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-5-2-4">
											<input type="radio" id="answer-5-2-4" name="quostion-5-2" class="checkbox" value="4 двери">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/5-2-4.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">4 двери</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-5-2-5">
											<input type="radio" id="answer-5-2-5" name="quostion-5-2" class="checkbox" value="5 дверей">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/5-2-5.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">5 дверей</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-5-2-6">
											<input type="radio" id="answer-5-2-6" name="quostion-5-2" class="checkbox" value="Более 5 дверей">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/5-2-6.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Более 5 дверей</h3>
									</div>
								</div>
								<div class="row justify-content-center">
									<div class="col text-center" style="margin-top: 35px;">
										<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '5-2' );">
										<input type="button" value="Далее" class="btn btn-corporate-1" onclick="nextQuostion( '5-2' );">
									</div>
								</div>
							</div>
							
							<div class="col-12" id="6-2" style="display: none;">
								<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">6/7</span>Какой подарок Вы хотите получить в случае заказа?</h3>
								<div class="row justify-content-md-center mb-5">
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-6-2-1">
											<input type="radio" id="answer-6-2-1" name="quostion-6-2" class="checkbox" value="Скидка 15%">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/6-2-1.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Скидка 15%</h3>
									</div>
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-6-2-2">
											<input type="radio" id="answer-6-2-2" name="quostion-6-2" class="checkbox" value="Беспроцентная рассрочка на 6 месяцев">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/6-2-2.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Беспроцентная рассрочка на 6 месяцев</h3>
									</div>
									<!--div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-6-2-3">
											<input type="radio" id="answer-6-2-3" name="quostion-6-2" class="checkbox" value="Бесплатная доставка и установка">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/6-2-3.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Бесплатная доставка и установка</h3>
									</div-->
									<div class="col-6 col-md-2">
										<label class="option_item mb-3" for="answer-6-2-4">
											<input type="radio" id="answer-6-2-4" name="quostion-6-2" class="checkbox" value="Скидка 10% на заказ кухни в теченее года">
											<div class="option_inner">
												<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz-new/6-2-4.jpg" style="width: 100%;">
											</div>
										</label>
										<h3 class="mb-3 mb-md-0">Скидка 10% на заказ кухни в теченее года</h3>
									</div>
								</div>
								<div class="row justify-content-center">
									<div class="col text-center" style="margin-top: 35px;">
										<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '6-2' );">
										<input type="button" value="Далее" class="btn btn-corporate-1" onclick="nextQuostion( '6-2' );">
									</div>
								</div>
							</div>
							
							<div class="col-md-6" id="7-2" style="display: none;">
								<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">7/7</span>Введите Ваши контакты</h3>
								<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/get_calculate_closet.php">
									<div class="row justify-content-center">
										<div class="col-md-4">
											<label for="exampleFormControlInput1-3" class="form-label">Ваше имя</label>
											<input type="text" class="form-control" id="exampleFormControlInput1-3" name="name">
										</div>
										<div class="col-md-4">
											<label for="exampleFormControlInput2-2" class="form-label">Ваш телефон</label>
											<input type="text" class="form-control telMask" id="exampleFormControlInput2-2" name="phone" required>
										</div>
									</div>
									<div class="row">
										<div class="col text-center" style="margin-top: 45px;">
											<input type="hidden" id="answer1-2" name="answer1">
											<input type="hidden" id="answer2-2" name="answer2">
											<input type="hidden" id="answer3-2" name="answer3">
											<input type="hidden" id="answer4-2" name="answer4">
											<input type="hidden" id="answer5-2" name="answer5">
											<input type="hidden" id="answer6-2" name="answer6">
											<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '7-2' );">
											<input type="submit" class="btn btn-corporate-1" value="Отправить">
										</div>
									</div>
								</form>
							</div>
							<!-- /ВОПРОСЫ ПО ШКАФАМ -->
							
							
							<!-- ВЛПРОСЫ ПО ДРУГОЙ МЕБЕЛИ -->
							<div class="col-12" id="2-3" style="display: none;">
								<h3 class="text-center mb-5">Для расчета стоимости опишите Ваше изделие</h3>
								<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/get_calculate.php" enctype="multipart/form-data">
									<div class="row justify-content-center py-2">
										<div class="col-8 mb-3">
											<textarea type="text" rows="3" name="mes" class="form-control form-control-corporate-color-1" placeholder="Опишите изделие своими словами, укажите размеры, материалы и другую информацию"></textarea>
										</div>
										<div class="col-8">
											<p>Прикрепите изображение изделия или схематично нарисованный Вами рисунок.</p>
										</div>
										<div class="col-8 mb-3">
											<div class="input-group custom-file-button">
												<label class="input-group-text" for="inputGroupFile">Прикрепить</label>
												<input type="file" name="mail_file" accept=".jpg,.jpeg,.png,.pdf,.heic" class="form-control" id="inputGroupFile">
											</div>
										</div>
									</div>
									<div class="row justify-content-center">
										<div class="col-4 mb-3">
											<input type="text" name="name" class="form-control form-control-corporate-color-1" placeholder="Ваше имя">
										</div>
										<div class="col-4 mb-3">
											<input type="text" name="tel" class="form-control form-control-corporate-color-1 telMask" placeholder="Ваш телефон*" required="" inputmode="text">
										</div>
									</div>
									<div class="row justify-content-center">
										<div class="col text-center" style="margin-top: 35px;">
											<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '2-3' );">
											<input type="submit" value="Отправить" class="btn btn-corporate-1">
										</div>
									</div>
								</form>
							</div>
							<!-- /ВОПРОСЫ ПО ДРУГОЙ МЕБЕЛИ -->							
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /End section Quiz -->
		
		
		<!-- Секция распродажи. Включается только если есть варианты для распродажи. --
		<?php
			/*$obj = get_queried_object();
			$cat_name = $obj->name;
			
			$query = new WP_Query( array(
				'product_cat' => $cat_name,
				'tax_query' => array(
					array(
						'taxonomy' => 'product_tag',
						'field'    => 'slug', // Поле, по которому ищем термин
						'terms'    => 'витринные-образцы'
					)
				)
			) );
											
			// Считаем кол-во записей
			$posts_count = 0;
			while ( $query->have_posts() ) { $query->the_post();
				$posts_count = $posts_count + 1;
			} wp_reset_postdata();
			
			// Если есть записи для распродажи, то добавляем раздел
			if ( $posts_count != 0 ) { ?>
				<!-- SALE SECTION -->
				<div id="sale-sp" class="scroll-point"></div>
				<section class="sale-section pt-5 pb-2 bg-white">
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
								while ( $query->have_posts() ) {
									$query->the_post();				
									$price = number_format( get_post_meta( get_the_ID(), '_regular_price', true), 0, ',', ' ' );
									$sale = number_format( get_post_meta( get_the_ID(), '_price', true), 0, ',', ' ' );
									
									if ( $product->get_stock_status() == 'instock' ) { // Если продукт в наличии ?>
										<div class="col-md-<?php if ( $posts_count <= 2 ) { echo '6'; } else { echo '4'; } ?> mb-5">
											<div class="approximation<?php if ( $posts_count <= 2 ) { echo ' approximation-lg'; } ?> shadow rounded">
												<a href="<?php echo get_permalink( $product->post->id ); ?>">
													<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
													<div class="card-wrapper">
														<?php
															if ( $sale != $price ) { ?>
																<div class="flag">
																	<div class="flag-old-price"><?php echo 	$price; ?> руб</div>
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
									<?php } else { // Если продукта НЕТ в наличии?>
										<div class="col-md-<?php if ( $posts_count <= 2 ) { echo '6'; } else { echo '4'; } ?> mb-5">
											<div class="approximation<?php if ( $posts_count <= 2 ) { echo ' approximation-lg'; } ?> shadow rounded">
												<a href="<?php echo get_permalink( $product->post->id ); ?>">
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
			<?php } */
		?> -->
		
<?php get_footer(); ?>