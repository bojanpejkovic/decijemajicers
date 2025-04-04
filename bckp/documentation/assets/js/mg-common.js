$(document).ready(function () {
    
    /*
     * Open signup tab
     */
    
    $(".mg-signup-trigger").click(function () {
        $("#mg-signup-tab").trigger("click");
    });
    
    /*
     * Navigation
     */
    
    $(".navbar-toggler").click(function () {
        $(this).toggleClass("highlight");
    });
});
    
/*
 * Product Quick view slider
 */

$(document).ready(function () {
    $('.mg-quick-view-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.mg-product-slider-thumb'
    });
    $('.mg-quick-view-slider-thumb').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.mg-product-slider',
        dots: false,
        centerMode: false,
        focusOnSelect: true
    });
    $('.modal').on('shown.bs.modal', function (e) {
        $('.mg-product-slider').slick('setPosition');
        $('.mg-product-slider-thumb').slick('setPosition');
    });
    $(".mg-color-variant").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass('mg-active-variant').siblings().removeClass('mg-active-variant');
    });
});
/******************************/

/*
 * Carousel
 */

$(document).ready(function () {
    $('.mg-carousel').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    });
});