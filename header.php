<?php

session_start();

if (isset($_SESSION["win"])) {
	unset($_SESSION["win"]);
	$_SESSION["display"] = "block";
} else {
	$_SESSION["display"] = "none";
}
?>



<!doctype html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <meta name="yandex-verification" content="794ea77bc93f2d22" /> -->
		<!-- Новый код верификации -->
		<meta name="yandex-verification" content="fd44421075c75556" />

        <meta name="description" content="<?php echo_description(); ?>" />
        <meta property="og:description" content="<?php echo_description(); ?>" />
        <meta name="keywords" content="<?php echo wp_get_document_title(); ?>" />
        <meta property="og:locale" content="ru_RU" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="<?php bloginfo("name"); ?>" />
        <meta property="og:title" content="<?php echo wp_get_document_title(); ?>" />
        
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/favicon.png" type="image/x-icon" id="favicon">

        <!-- Bootstrap CSS -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
		<!-- Style CSS -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet">
		<!-- Style CSS -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/theme.css" rel="stylesheet">
		<!-- Quiz CSS -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/quiz.css" rel="stylesheet">

        <title><?php echo wp_get_document_title(); ?></title>
	</head>
	<body <?php body_class(); ?>>

		<div id="home-sp" class="scroll-point"></div>
		
		<!-- Menu 1 -->
		<nav id="top-menu-1" class="navbar navbar-expand-xl navbar-light d-none d-lg-block py-1">
			<div class="container">
				<a class="navbar-brand text-light d-none d-xxl-inline mx-3" href="#">Мебельный магазин</a>
				<div class="collapse navbar-collapse" id="navbarSupportedContent1">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
						<li class="nav-item me-2">
							<div class="row align-items-center">
								<div class="col-2">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/location-ico.png" style="position: relative; right: -5px;">
								</div>
								<div class="col-10">
									<span class="nav-link" style="line-height: 20px;">гор. Рязань,<br>ул. Грибоедова, д. 9</span>
								</div>
							</div>
						</li>
						<li class="nav-item me-2">
							<div class="row align-items-center">
								<div class="col-2">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/clock-ico.png" style="position: relative; right: -5px;">
								</div>
								<div class="col-10">
									<span class="nav-link" style="line-height: 20px;">Пн-Сб: 10:00-19:00<br>Вс: 10:00-18:00</span>
								</div>
							</div>
						</li>
						<li class="nav-item me-2">
							<a href="mailto:ladya.kuhni@mail.ru" class="nav-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/email-ico.png" class="me-2">ladya.kuhni@mail.ru</a>
						</li>
						<li class="nav-item me-2">
							<a href="tel:89511004979" id="top-menu-tel" class="nav-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/mobail-ico.png" class="me-2">8 (951) 100-49-79</a>
						</li>
						<li class="nav-item me-2">
							<a href="tel:84912246429" id="top-menu-tel" class="nav-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/phone-ico.png" class="me-2">8 (4912) 24-64-29</a>
						</li>
						<li class="nav-item">
							<a class="nav-link ico-button pe-0" target="_blank"  href="https://wa.me/79511004979?web=1&app_absent=1&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C!%20%D0%AF%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD-%D0%BB%D0%B0%D0%B4%D1%8C%D1%8F.%D1%80%D1%84"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link ico-button pe-0" target="_blank"  href="https://t.me/+79511004979?text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C!%20%D0%AF%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD-%D0%BB%D0%B0%D0%B4%D1%8C%D1%8F.%D1%80%D1%84"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
						</li>
						<!--li class="nav-item">
							<a class="nav-link ico-button pe-0" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/<?php echo get_stylesheet_directory_uri(); ?>/img/ico/inst-ico.png"></a>
						</li-->
						<!-- <li class="nav-item">
							<a class="nav-link ico-button" target="_blank"  href="https://vk.com/club90212067"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/vk-ico.png"></a>
						</li> -->
                        <!-- <li class="nav-item">
							<a class="nav-link ico-button" target="_blank"  href="https://vk.com/club90212067"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/vk-ico.png"></a>
						</li>  -->
                        <li class="nav-item">
                            <a class="nav-link ico-button pe-0" href="https://max.ru/u/f9LHodD0cOK7M4By7LiQDPh1RUMKghfAIMozxGWfQ4z0UqIxUEPcisfDN14" target="_blank">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/max.png">
                            </a>
                        </li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- /Menu 1 -->
		
		
		<!-- Menu 2 -->
		<nav id="top-menu-2" class="navbar navbar-expand-xl navbar-dark py-3">
			<div class="container">
                <a class="navbar-brand" href="/">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo.png" id="navbar-brand-img" class="custom-logo" alt="Логотип в шапке" decoding="async" />
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent2">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item">
                            <a class="nav-link <?php echo is_front_page() ? "active" : ""; ?>" aria-current="page" href="/">Главная</a>
						</li>
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/menu-point-ico.png"></span>
						</li>
						<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo is_shop() || is_product_category() || is_product()
                            	? "active"
                            	: ""; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Каталог
							</a>
							<ul class="dropdown-menu">
								<?php
        $terms = get_terms([
        	"taxonomy" => "product_cat",
        	"hide_empty" => true,
        	"pad_counts" => true,
        	"orderby" => "menu_order",
        	"parent" => 0,
        ]);

        if ($terms):
        	foreach ($terms as $term): ?>
											<li><a class="dropdown-item" href="<?php echo get_term_link($term->term_id); ?>"><?php echo $term->name; ?></a></li>
										<?php endforeach;
        endif;
        ?>
							</ul>
						</li>
						<li class="nav-item">
                            <a class="nav-link <?php echo is_page_template("portfolio.php") || is_post_type_archive("portfolio") || is_page("наши-работы")
                            	? "active"
                            	: ""; ?>" href="/наши-работы">Наши работы</a>
						</li>
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/menu-point-ico.png"></span>
						</li>
						<li class="nav-item">
                            <a class="nav-link <?php echo is_page_template("actions.php") || is_page("акции") ? "active" : ""; ?>" href="/акции">Акции</a>
						</li>
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/menu-point-ico.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contacts-sp">Контакты</a>
						</li>
						<!-- Mobile menu -->
						<!--li class="nav-item d-xl-none">
							<a class="nav-link active" href="#">Бесплатный возов замерщика</a>
						</li-->
						<li class="nav-item d-xl-none">
							<a id="top-menu-tel" class="nav-link" href="tel:89511004979">8 (951) 100-49-79</a>
						</li>
						<li class="nav-item d-xl-none">
							<a class="ico-button pe-2" target="_blank"  href="https://wa.me/79511004979?web=1&app_absent=1&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C!%20%D0%AF%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD-%D0%BB%D0%B0%D0%B4%D1%8C%D1%8F.%D1%80%D1%84"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a>
							<a class="ico-button pe-2" target="_blank"  href="https://t.me/+79511004979?text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C!%20%D0%AF%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD-%D0%BB%D0%B0%D0%B4%D1%8C%D1%8F.%D1%80%D1%84"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
							<!-- <a class="ico-button pe-2" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/<?php echo get_stylesheet_directory_uri(); ?>/img/ico/inst-ico.png"></a-->
							<a class="ico-button" target="_blank"  href="https://vk.com/club90212067"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/vk-ico.png"></a>
						</li>
						<!-- End mobile menu -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- /Menu 2 -->
