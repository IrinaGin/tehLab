var nav = $('.header-top').outerHeight();
function on_scroll() {
    var st = $(window).scrollTop();
    // if($('.navigation').offset().top > nav ){
    //     $('.navigation').addClass('navigation_fixed');
    // }else{
    //     $('.navigation').removeClass('navigation_fixed');
    // }
    if (st >= 40) {
        $('body').addClass('body--header-tiny');
    } else {
        $('body').removeClass('body--header-tiny');
    }
}

// formstyler init
function styler() {
    $('.check, .select, .radio').styler();
}
// маска для телефона
function makeMasks() {
    if ( $('[name="phone"]').length) {
        $('[name="phone"]').inputmask({
            "mask": "+7 (999) 999-99-99",
            showMaskOnHover: false
        });
    }
}
function do_maps() {
    ymaps.ready(init);
    var myMap;
    var iconStyle = {
        iconLayout: 'default#image',
        // iconImageHref: '/images/pin.svg',
        iconImageSize: [31, 44],
        iconImageOffset: [-15, -43]
    };
    function init() {
        if($('#map').length){
            myMap = new ymaps.Map("map", {
                center: [53.928631, 27.582840],
                zoom: 17,
                controls: [ ]
            });
            myMap.behaviors.disable('scrollZoom');
            var complexPlacemark = new ymaps.Placemark([53.928631, 27.582840], {
                balloonContent: ' г. Минск, ул. Сурганова, 57б, этаж 4, офис 122'
            },iconStyle);
            // myMap.geoObjects.add(complexPlacemark);
            myMap.setBounds(myMap.geoObjects.getBounds());
            myMap.setZoom(17);
        }
    }
}
$(document).ready(function() {
    $('.main-top__items').addClass('owl-carousel').owlCarousel({
        items: 1,
        margin: 0,
        nav: false,
        dots: false,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        autoplay:true,
        autoplayTimeout: 4000,
        loop: true
    });
    $('.slider-items').addClass('owl-carousel').owlCarousel({
        items: 1,
        margin: 0,
        nav: false,
        dots: false,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        autoplay:true,
        autoplayTimeout: 4000,
        loop: true
    });
    $('.partners-items').addClass('owl-carousel').owlCarousel({
        items: 5,
        margin: 100,
        nav: true,
        dots: false,
        loop: true
    });
    $('.circle-slider__items').addClass('owl-carousel').owlCarousel({
        items: 1,
        margin: 0,
        nav: false,
        dots: false,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        autoplay:true,
        autoplayTimeout: 4000,
        loop: true
    });
    $('.product-detail__img-slider').addClass('owl-carousel').owlCarousel({
        items: 1,
        margin: 0,
        nav: false,
        dots: false
    });
    $('.products-hits__items').addClass('owl-carousel').owlCarousel({
        items: 3,
        margin: 0,
        nav: true,
        dots: false
    });

    // $('.recommended-items').addClass('owl-carousel').owlCarousel({
    //     margin: 0,
    //     nav: true,
    //     dots: false,
    //     autoWidth: true,
    //     loop: true
    // });
    // $('.order-item__slider').addClass('owl-carousel').owlCarousel({
    //     margin: 0,
    //     nav: true,
    //     dots: false,
    //     autoWidth: true,
    //     loop: false
    // });
    $(document)
        .on('submit', 'form[data-ajax]', function (e) {
            // отправление форм
            e.preventDefault();
            var form = $(this),
                src = form.attr('action') ;
            $.post(src, form.serializeArray(), function (res) {
                res = jQuery.parseJSON(res)
                if(res.result === 'ok'){
                    if(form.data('ajax') === 'order'){
                        $.fancybox.close();
                        $.post('/include/confirmation.php', function (res) {
                            $.fancybox.open(res);
                        })
                    }
                    if(form.data('ajax') === 'confirm'){
                        // $.post('/include/confirmation.php', function (res) {
                        //     $.fancybox.open(res);
                        // })
                        form.addClass('open');
                    }
                }
            });
        })
        .on('click', '[data-js-tab-link]', function () {
            // смена табов
            var id = $(this).data('js-tab-link');
            $(this).parents('.tabs').find('[data-js-tab-link].active').removeClass('active');
            $(this).addClass('active');
            $(this).parents('.tabs').find('.tab.active').removeClass('active');
            $(this).parents('.tabs').find('[data-js-tab="'+id+'"]').addClass('active');
        })
        .on('click', '.lvl1 a.parent', function(e){
            e.preventDefault();
            $(this).parent().toggleClass('active');
            $(this).parent().find('ul').slideToggle();
        })
        .on('click', '.top-menu .search-btn', function(){
            $('.search').addClass('active');
        })
        .on('click', '[data-js-owl-prev]', function(){
            var owl = $(this).parents('[data-js-owl]');
            owl.trigger('prev.owl.carousel', true);
        })
        .on('click', '[data-js-owl-next]', function(){
            var owl = $(this).parents('[data-js-owl]');
            owl.trigger('next.owl.carousel', true);
        })
        .on('click', '[data-js-owl-nav]', function(){
            var owl = $(this).parents('[data-js-owl]');
            var id = $(this).data('js-owl-nav');
            owl.trigger('to.owl.carousel', id);
        })
    ;


    new WOW().init();
    styler();
    makeMasks();
    $.fancybox.defaults.afterLoad = function() {
        makeMasks();
        styler();
    };
    on_scroll();
    $(window).scroll(function () {
        on_scroll();
    });
    do_maps();
});
