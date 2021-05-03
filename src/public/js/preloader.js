$(document).ready(function($) {
    var Body = $('body');
    Body.addClass('preloader-site');
});
$(window).on('load', function() {
    $('.preloader-wrapper').delay(3000).fadeOut();
    $('body').removeClass('preloader-site');
});