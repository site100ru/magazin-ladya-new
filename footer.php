<!-- Contacts -->
<div id="contacts-sp" class="scroll-point"></div>
<section class="contacts-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="text-light mb-1">Контакты</h2>
                <div class="title-line mb-5">
                    <div class="title-quadro" style="left: 0;"></div>
                    <div class="title-quadro" style="left: 25px;"></div>
                    <div class="title-quadro" style="right: 0px;"></div>
                </div>
                <ul class="mb-5">
                    <li class="mb-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/location-ico.png" class="me-2">гор. Рязань, ул. Грибоедова, д. 9</li>
                    <li class="mb-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/clock-ico.png" class="me-2">Пн-Сб: 10:00-19:00, Вс: 10:00-18:00</li>
                    <li class="mb-2"><a href="tel:84912246429" class="text-light text-decoration-none"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/phone-ico.png" class="me-2">8 (4912) 24-64-29</a></li>
                    <li class="mb-2"><a href="tel:89511004979" class="text-light text-decoration-none"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/mobail-ico.png" class="me-2">8 (951) 100-49-79</a></li>
                    <li><a href="mailto:ladya.kuhni@mail.ru" class="text-light text-decoration-none"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/email-ico.png" class="me-2">ladya.kuhni@mail.ru</a></li>
                </ul>
                <div class="row align-items-center">
                    <div class="col-md-6 mb-5 mb-md-0">
                        <button type="button" class="d-block btn btn-corporate-1" data-bs-toggle="modal" data-bs-target="#messageModal">Напишите нам</button>
                    </div>
                    <div class="col-md-6">
                        <a class="ico-button pe-2" target="_blank"  href="https://wa.me/79511004979?web=1&app_absent=1&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C!%20%D0%AF%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD-%D0%BB%D0%B0%D0%B4%D1%8C%D1%8F.%D1%80%D1%84"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a>
                        <a class="ico-button pe-2" target="_blank"  href="https://t.me/+79511004979?text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C!%20%D0%AF%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD-%D0%BB%D0%B0%D0%B4%D1%8C%D1%8F.%D1%80%D1%84"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
                        <!-- <a class="ico-button pe-2" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/<?php echo get_stylesheet_directory_uri(); ?>/img/ico/inst-ico.png"></a--> 
                        <a class="ico-button pe-2" target="_blank"  href="https://vk.com/club90212067"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/vk-ico.png"></a>
                        <a class="ico-button" href="https://max.ru/u/f9LHodD0cOK7M4By7LiQDPh1RUMKghfAIMozxGWfQ4z0UqIxUEPcisfDN14" target="_blank">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/max.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="map"></div>
    <footer style="border-top: 1px solid rgba(255,255,255,.35);">
        <div class="container">
            <div class="row">
                <div class="col py-2">
                    <div id="company-in-footer">©<?php echo date("Y"); ?> Мебельный магазин «Ладья»</div>
                    <div id="im-in-footer">Создание и продвижение сайтов: <a href="https://site100.ru" class="text-light">site100.ru</a></div>
                </div>
            </div>
        </div>
    </footer>
</section>
<!-- /Contacts -->


<!-- Designer Modal -->
<div class="modal fade" id="designerModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/callback-mail.php" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="callbackModalLabel">Записаться к дизайнеру</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <p><small>Оставьте Ваши контакты и дизайнер свяжется с Вами в ближайшее время.</small></p>
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
            </div>
            <div class="modal-footer">
                <input type="hidden" id="g-recaptcha-response-designer" name="g-recaptcha-response">
                <button type="submit" class="btn btn-corporate-2 px-3 mx-auto">Записаться</button>
            </div>
        </form>
    </div>
</div>
<!-- /Designer Modal -->


<!-- Measurer Modal -->
<div class="modal fade" id="measurerModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/callback-mail.php" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="callbackModalLabel">Пригласить замерщика</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <p><small>Оставьте Ваши контакты и замерщик свяжется с Вами в ближайшее время.</small></p>
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
            </div>
            <div class="modal-footer">
                <input type="hidden" id="g-recaptcha-response-measurer" name="g-recaptcha-response">
                <button type="submit" class="btn btn-corporate-2 px-3 mx-auto">Пригласить</button>
            </div>
        </form>
    </div>
</div>
<!-- /Measurer Modal -->



<!-- Message Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/message-mail.php" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="messageModalLabel">Задать вопрос</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Ваше имя">
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" name="email" class="form-control" placeholder="Ваш email*" required>
                    </div>
                    <div class="col-12">
                        <textarea type="text" name="mes" class="form-control" placeholder="Ваш вопрос*" required></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="g-recaptcha-response-message" name="g-recaptcha-response">
                <button type="submit" class="btn btn-corporate-2 px-3 mx-auto">Отправить</button>
            </div>
        </form>
    </div>
</div>
<!-- /Message Modal -->

<!-- Показываем сообщение об успешной отправки -->
<div style="display: <?php echo $_SESSION["display"]; ?>;" onclick="modalClose();">
	<div id="background-msg" style="display: <?php echo $_SESSION["display"]; ?>;"></div>
	<button id="btn-close" type="button" class="btn-close btn-close-white" onclick="modalClose();"
		style="position: absolute; z-index: 9999; top: 15px; right: 15px;"></button>
	<div id="message">
		<?php
  echo $_SESSION["recaptcha"];
  unset($_SESSION["recaptcha"]);
  ?>
	</div>
</div>

<!-- Bootstarp JS -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>

<!-- Main scripts -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scripts.js"></script>

<!-- Quiz scripts -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/quiz.js"></script>

<!-- Telephone number mask -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/inputmask.min.js"></script>
<script>
    var telMask = document.getElementsByClassName("telMask");
    var im = new Inputmask("+7(999)999-99-99");
    im.mask(telMask);
</script>

<!-- Загрузка изображений с приоритетом -->
<script>
    // Добавить в img атрибут data-src вместо src
    if ('loading' in HTMLImageElement.prototype) {
        const images = document.querySelectorAll('img[loading="lazy"][data-src]');
        images.forEach(img => {
            if (img.dataset.src) {  // Проверяем, что data-src существует
                img.src = img.dataset.src;
            }
        });
    } else {
        // Dynamically import the LazySizes library
        const script = document.createElement('script');
        script.async = true;
        script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.2/lazysizes.min.js';
        document.body.appendChild(script);
    }
</script>

<!-- API Yandex Map -->
<script src="https://api-maps.yandex.ru/2.1/?apikey=7a322092-0e89-4de6-8bff-0a1795b5548e&lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript">
    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    ymaps.ready(init);
    /* На разную ширину экрана разное приближение карты */
    var screenWidth = document.documentElement.clientWidth;
    if ( screenWidth > 1000 ) {
        var zoom = 17;
    } else {
        var zoom = 9;
    }
    
    function init() {
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            // Координаты центра карты.
            // Порядок по умолчанию: «широта, долгота».
            // Чтобы не определять координаты центра карты вручную,
            // воспользуйтесь инструментом Определение координат.
            center: [54.6295,39.7635], // Map center
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: zoom
        });
        var myPlacemark = new ymaps.Placemark( [54.62913002081631,39.76371698175319], {}, {
            iconLayout: 'default#image',
            iconImageHref: '<?php echo get_stylesheet_directory_uri(); ?>/img/ico/placemark.png',
            iconImageSize: [320, 282],
            iconImageOffset: [-160,-272]
        });
        myMap.behaviors.disable('scrollZoom'); // Disable zoom on scroll
        //myMap.behaviors.disable('multiTouch'); // Disable zoom
        //myMap.behaviors.disable('drag'); // Disable drag
        myMap.geoObjects.add(myPlacemark);
    }
</script>

<!-- Quiz modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="exampleModalLabel">Выберите Вашу планировку</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    
                </button>
            </div>
            <!-- Quiz container -->
            <div id="quiz-container" class="container shadow bg-white pt-4 rounded-lg">
                <div class="row">
                    <div class="col pb-4 text-center">
                        <h3>Выберите Вашу планировку</h3>
                    </div>
                </div>
                <div class="row justify-content-center text-left" style="min-height: 275px;">
                    <div class="col-md-3 pb-5">
                        <div class="card w-100 border-0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz/q-1-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body pl-1 pr-1" style="min-height: auto;">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline1"><h5 class="card-title mb-0">Линейная</h5></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-5">
                        <div class="card w-100 border-0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz/q-1-2.jpg" class="card-img-top" alt="...">
                            <div class="card-body pl-1 pr-1" style="min-height: auto;">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline2"><h5 class="card-title mb-0">Г-образная</h5></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-5">
                        <div class="card w-100 border-0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz/q-1-3.jpg" class="card-img-top" alt="...">
                            <div class="card-body pl-1 pr-1" style="min-height: auto;">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline3"><h5 class="card-title mb-0">П-образная</h5></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col text-center">
                        <button class="btn btn-lg btn-primary2 btn-corporate-1" onclick="question1();">Следующий вопрос</button>
                    </div>
                </div>
            </div>
            <!-- End quiz container -->
        </div>
    </div>
</div>
<!-- Scripts for quiz -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    function question1() {

        var question = 'question1';

        if (document.getElementById('customRadioInline1').checked == true) {
            var answer = 'Линейная';
        } else if (document.getElementById('customRadioInline2').checked == true) {
            var answer = 'Г-образная';
        } else if (document.getElementById('customRadioInline3').checked == true) {
            var answer = 'П-образная';
        } else {
            var answer = 'Линейная';
        }

        $.ajax ({
            type: "POST",
            url: "<?php echo get_stylesheet_directory_uri(); ?>/quiz-action.php",
            data: {question, answer},
            dataType: "html",
            success: function(data) {
                var p = document.getElementById('quiz-container');
                p.innerHTML = data;
            }
        });
    }

    function question2() {
        var question = 'question2';
        var answer1 = document.getElementById('d1').value;
        var answer2 = document.getElementById('d2').value;
        var answer3 = document.getElementById('d3').value;

        $.ajax ({
            type: "POST",
            url: "<?php echo get_stylesheet_directory_uri(); ?>/quiz-action.php",
            data: { question, answer1, answer2, answer3 },
            dataType: "html",
            success: function(data) {
                var p = document.getElementById('quiz-container');
                p.innerHTML = data;
            }
        });
    }

    function question3() {

        var question = 'question3';

        if (document.getElementById('customRadioInline1').checked == true) {
            var answer = 'ДСП';
        } else if (document.getElementById('customRadioInline2').checked == true) {
            var answer = 'Пленка';
        } else if (document.getElementById('customRadioInline3').checked == true) {
            var answer = 'Пластик';
        } else if (document.getElementById('customRadioInline4').checked == true) {
            var answer = 'Массив';
        }

        $.ajax ({
            type: "POST",
            url: "<?php echo get_stylesheet_directory_uri(); ?>/quiz-action.php",
            data: {question, answer},
            dataType: "html",
            success: function(data) {
                var p = document.getElementById('quiz-container');
                p.innerHTML = data;
            }
        });
    }
</script>

<!-- reCaptcha v3 New from Google -->
<script src='https://www.google.com/recaptcha/api.js?render=6LdV1IcUAAAAADRQAhpGL8dVj5_t0nZDPh9m_0tn'></script>
<script>
	grecaptcha.ready(function() {
		grecaptcha.execute('6LdV1IcUAAAAADRQAhpGL8dVj5_t0nZDPh9m_0tn', {action: 'action_name'}).then(function(token) {
			if ( document.getElementById('g-recaptcha-response-callback') ) {
				document.getElementById('g-recaptcha-response-callback').value=token;
			}
			
			if ( document.getElementById('g-recaptcha-response-order') ) {
				document.getElementById('g-recaptcha-response-order').value=token;
			}
			
			if ( document.getElementById('g-recaptcha-response-measurer') ) {
				document.getElementById('g-recaptcha-response-measurer').value=token;
			}
			
			if ( document.getElementById('g-recaptcha-response-designer') ) {
				document.getElementById('g-recaptcha-response-designer').value=token;
			}
			
			if ( document.getElementById('g-recaptcha-response-message') ) {
				document.getElementById('g-recaptcha-response-message').value=token;
			}
		});
	});
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
	(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	var z = null;m[i].l=1*new Date();
	for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
	k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	ym(90223431, "init", {
		clickmap:true,
		trackLinks:true,
		accurateTrackBounce:true,
		webvisor:true
	});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/90223431" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<!-- Callback button HTML -->
<div class="callback-button-wrapper">
    <div id="callbackBtn" class="callback-button" onclick="callbackButtonClick();">
        <div id="btnIco" class="callback-button-ico"></div>
    </div>

    <div id="formBtn" class="callback-form-button" data-bs-toggle="tooltip" data-bs-placement="left"
        data-bs-custom-class="custom-tooltip" data-bs-title="Перезвонить Вам?">
        <a data-bs-toggle="modal" data-bs-target="#messageModal">
            <div class="callback-form-button-ico"></div>
        </a>
    </div>
    <div id="phoneBtn" class="callback-phone-button" data-bs-toggle="tooltip" data-bs-placement="left"
        data-bs-custom-class="custom-tooltip" data-bs-title="Позвонить">
        <a href="tel:79511004979">
            <div class="callback-phone-button-ico"></div>
        </a>
    </div>
    <div id="whatsappBtn" class="callback-whatsapp-button" data-bs-toggle="tooltip" data-bs-placement="left"
        data-bs-custom-class="custom-tooltip" data-bs-title="Whatsapp">
        <a href="https://wa.me/79511004979?web=1&app_absent=1&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C!%20%D0%AF%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD-%D0%BB%D0%B0%D0%B4%D1%8C%D1%8F.%D1%80%D1%84"
            target="_blank" >
            <div class="callback-whatsapp-button-ico"></div>
        </a>
    </div>
    <div id="telegramBtn" class="callback-telegram-button" data-bs-toggle="tooltip" data-bs-placement="left"
        data-bs-custom-class="custom-tooltip" data-bs-title="Telegram">
        <a href="https://t.me/+79511004979?text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C!%20%D0%AF%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD-%D0%BB%D0%B0%D0%B4%D1%8C%D1%8F.%D1%80%D1%84"
            target="_blank" >
            <div class="callback-telegram-button-ico"></div>
        </a>
    </div>

    <div id="maxBtn" class="callback-max-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Max">
        <a href="https://max.ru/u/f9LHodD0cOK7M4By7LiQDPh1RUMKghfAIMozxGWfQ4z0UqIxUEPcisfDN14" target="_blank">
            <div class="callback-max-button-ico"></div>
        </a>
    </div>
</div>
<!-- /Callback button HTML -->

<!-- Callback button JS -->
<script>
    function callbackButtonClick() {
        
        let formBtn = document.getElementById('formBtn').style.top;
        
        if ( formBtn == "0px" || formBtn == 0 ) {
            document.getElementById('callbackBtn').style.animation = "none";
            document.getElementById('btnIco').style.animation = "change2 linear .5s";
            document.getElementById('btnIco').style.webkitAnimation = "change2 linear .5s";
            document.getElementById('btnIco').style.webkitTransition ="transform 1s ease-in-out";
            
            document.getElementById('btnIco').style.webkitTransform = "rotate(180deg)";
            document.getElementById('btnIco').style.transform = "rotate(180deg)";
            
            
            document.getElementById('btnIco').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/callback/callback-button-close.png)";
            document.getElementById('btnIco').style.backgroundPosition = "center";
            document.getElementById('btnIco').style.backgroundRepeat = "no-repeat";
            
            document.getElementById('btnIco').style.webkitBackgroundSize = "cover";
            document.getElementById('btnIco').style.backgroundSize = "cover";
            
            
            document.getElementById('formBtn').style.top = "-60px";
            document.getElementById('formBtn').style.opacity = "1";
            
            document.getElementById('phoneBtn').style.top = "-120px";
            document.getElementById('phoneBtn').style.opacity = "1";
            
            document.getElementById('whatsappBtn').style.top = "-180px";
            document.getElementById('whatsappBtn').style.opacity = "1";
            
            document.getElementById('telegramBtn').style.top = "-240px";
            document.getElementById('telegramBtn').style.opacity = "1";

            document.getElementById('maxBtn').style.top = "-300px";
            document.getElementById('maxBtn').style.opacity = "1";
        } else {
            document.getElementById('callbackBtn').style.animation = "waves linear 2s infinite";
            document.getElementById('btnIco').style.animation = "change linear 16s infinite";
            document.getElementById('btnIco').style.webkitTransition ="transform 1s ease-in-out";
            document.getElementById('btnIco').style.webkitAnimation = "change linear 16s infinite";
            document.getElementById('btnIco').style.transform = "rotate(180deg)";
            document.getElementById('btnIco').style.webkitTransform = "rotate(180deg)";
            document.getElementById('btnIco').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/callback/callback-button-ico.png)";
            document.getElementById('btnIco').style.backgroundPosition = "center";
            document.getElementById('btnIco').style.backgroundRepeat = "no-repeat";
            
            document.getElementById('btnIco').style.webkitBackgroundSize = "cover";
            document.getElementById('btnIco').style.backgroundSize = "cover";
            
            
            document.getElementById('formBtn').style.top = "0px";
            document.getElementById('formBtn').style.opacity = "0";
            
            document.getElementById('phoneBtn').style.top = "0px";
            document.getElementById('phoneBtn').style.opacity = "0";
            
            document.getElementById('whatsappBtn').style.top = "0px";
            document.getElementById('whatsappBtn').style.opacity = "0";
            
            document.getElementById('telegramBtn').style.top = "0px";
            document.getElementById('telegramBtn').style.opacity = "0";
            
            document.getElementById('maxBtn').style.top = "0px";
            document.getElementById('maxBtn').style.opacity = "0";
        }
    }
</script>
<!-- /Callback button JS -->
	<!-- <?php include get_template_directory() . "/inc/snowflake/snowflake.php"; ?> -->

    <script>
        prilipalo();
    </script>

</body>
</html>