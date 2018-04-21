function getTotal() {
    paymentPrice = parseFloat($('.summary .prices .price-payment').attr('data-price'));
    deliveryPrice = parseFloat($('.summary .prices .price-delivery').attr('data-price'));
    totalPrice =  parseFloat($('.summary .prices .price-total').attr('data-price'));

    return totalPrice + deliveryPrice + paymentPrice;
}

$(document).ready(function() {
    $('input[type=radio][name^="delivery"]').change(function() {
        deliveryPrice = $(this).attr('data-price');
        $('.summary .prices .price-delivery').text(deliveryPrice + ' eur');
        $('.summary .prices .price-delivery').attr('data-price', deliveryPrice);

        paymentPrice = parseFloat($('.summary .prices .price-payment').attr('data-price'));
        deliveryPrice = parseFloat($('.summary .prices .price-delivery').attr('data-price'));
        totalPrice =  parseFloat($('.summary .prices .price-total').attr('data-price'));
        newTotal = getTotal();

        $('.summary .prices .price-total').text(newTotal + ' eur')
    });

    $('input[type=radio][name^="payment"]').change(function() {
        paymentPrice = $(this).attr('data-price');
        $('.summary .prices .price-payment').text(paymentPrice + ' eur');
        $('.summary .prices .price-payment').attr('data-price', paymentPrice);

        newTotal = getTotal() ;

        $('.summary .prices .price-total').text(newTotal + ' eur')
    });
});