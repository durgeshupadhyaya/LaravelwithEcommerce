require('./bootstrap');

$(function() {
    $('.alert').delay(5000).slideUp(500);

    $('#checkout-form').submit(function() {
        localStorage.removeItem('staplesbmincart');
    });
})
