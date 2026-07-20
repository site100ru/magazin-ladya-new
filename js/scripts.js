/* Функция "Прилипало" */
function prilipalo() {
    window.addEventListener('scroll', function() {
        var prokrutka = window.pageYOffset;
        var screenWidth = window.innerWidth;
        const topMenu = document.getElementById('top-menu-2');

        if (screenWidth >= 992) {
            if (prokrutka > 57) {
                topMenu.classList.add('fixed-top');
                topMenu.style.position = 'fixed';
                topMenu.classList.add('show');
                topMenu.style.top = 0;
            } else {
                topMenu.classList.remove('fixed-top');
                topMenu.style.position = 'absolute';
                topMenu.classList.remove('show');
                topMenu.style.top = '57px';
            }
        } 
    });
}

/* Убираем сообщение об успешной отправки */
function modalClose () {
	document.getElementById('background-msg').style.display = 'none';
	document.getElementById('message').style.display = 'none';
	document.getElementById('btn-close').style.display = 'none';
}