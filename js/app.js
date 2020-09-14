$(function() {

    $(".scrollTo").on('click', function(e) {
        e.preventDefault();
        var target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: ($(target).offset().top)
        }, 1000);
    });

    // SCROLL PANTALLA
    var altoPantalla = $(window).height();
    var altoBarra = $('.navegacion-principal').innerHeight();
    var divNumeros = $('.numeros-doc');
    $(window).scroll(function() {

        var scroll = $(window).scrollTop();

        // Menu fijo
        if (scroll > (altoBarra * 2)) {
            $('.navegacion-principal').addClass('fixed');
            $('body').css({ 'margin-top': altoBarra + 'px' });
        } else {
            $('.navegacion-principal').removeClass('fixed');
            $('body').css({ 'margin-top': '0px' });

        }
    });
});