$( function() {

    /***** Плавная прокрутка в оффере *****/

    $('.offer__btn--cost, .menu-index li a').click( e => {
        e.preventDefault();
		elementClick = $(e.currentTarget).attr("href");
        destination = $(elementClick).offset().top - 116;
        $('body,html').animate({scrollTop: destination }, 800);
    });

    /***** Модалка *****/

    $('.offer__btn--contact, .services__btn').click( e => {
        e.preventDefault();
		$('.modal-overlay').fadeIn();
    });

    $('.modal').click( e => {
		$('.modal-overlay').fadeOut();
    });

    /***** Спасибо *****/

    $('.modal__btn').click( e => {
        e.preventDefault();
		$('.modal-overlay-thanks').fadeIn();
    });

    $('.modal-thanks').click( e => {
		$('.modal-overlay-thanks').fadeOut();
    });


    /*** Слайдер c работами ***/

    $('.works__slider').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        prevArrow: '<div class="works-prev"></div>',
        nextArrow: '<div class="works-next"></div>',
        responsive: [
            {
              breakpoint: 769,
              settings: {
                slidesToShow: 1,
              }
            }
        ]
    });

    /*** Слайдер "Что говорят клиенты" ***/

    $('.whatSay__slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        lazyLoad: 'ondemand',
        centerMode: true,
        centerPadding: '10px',
        prevArrow: '<div class="whatSay-prev"></div>',
        nextArrow: '<div class="whatSay-next"></div>',
        responsive: [
            {
              breakpoint: 769,
              settings: {
                slidesToShow: 1,
              }
            }
        ]
    });

    /*** Слайдер в блоге ***/

    $('.blog__slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<div class="blog-prev"></div>',
        nextArrow: '<div class="blog-next"></div>',

        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
              }
            },
            {
              breakpoint: 769,
              settings: {
                slidesToShow: 1,
              }
            }
        ]
    });
   
    /*** Гамбургер ***/

    $('.hamburger').click(function(){
        $( '.menu__list' ).toggleClass('menu-open');
    });        

    
    $('.menu__list li a').click(function(){
        if ($(window).width() < 992) { 
            $('.ham').removeClass('active');
            $( '.menu__list').removeClass('menu-open');
        }
    });

    /*** Анимация в хедере ***/

    function animateMenu() {
        if ($(window).width() > 992) {

            $('.header__logo').animate({
                opacity: 1,
            }, 800);
            $('.menu__list').animate({
                left: '0',
            }, 800);
        }
    }

    $(window).scroll(function() {
        animateMenu();
    });

    $(window).resize(function() {
        animateMenu();
    });
    
});

$(window).on('load', function () {  
    let curUrl = window.location.href;
    if (curUrl.indexOf("#") !== -1) {
        let anchor = curUrl.split('#')[1];
        let offsetPageY = $('#' + anchor).offset().top - 116;
        console.log(offsetPageY);
        $('body,html').animate({scrollTop: offsetPageY }, 800);
    }
});
