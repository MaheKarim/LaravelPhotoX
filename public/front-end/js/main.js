$(function () {


var $dis = $("#full_nav").offset().top;
    
    $(window).scroll(function () {

        var scroll = $(this).scrollTop();

        if (scroll >= $dis) {
            $("#full_nav").addClass("sticky");
        } else {
            $("#full_nav").removeClass("sticky");
        }
    });
    
    
    $(".lightgallery").lightGallery();


    $('.s1').slick({
        dots: false,
        infinite: true,
        speed: 1000,
        arrows: true,
        fade: true,
        cssEase: 'linear',
        autoplay: false,
        autoplaySpeed: 3000,
        autoplay: true,
        autoplaySpeed: 2000,
    });


    $("#full_quote").ripples({
        dropRadius: 10,
        perturbance: 0.01,
    });

});
