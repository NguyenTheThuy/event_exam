jQuery(document).ready(function() {
    // slick slider 
    $('.slick_slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slide: 'div',
        autoplay: true,
        autoplaySpeed: 2000,
        cssEase: 'linear'
    });
    // slick slider2 
    $('.slick_slider2').slick({
        dots: true,
        infinite: true,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 3000,
        fade: true,
        slide: 'div',
        cssEase: 'linear'
    });
    //show/hide Button scrollToTop
    jQuery(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    //Button scrollToTop click
    $('.scrollToTop').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
});
