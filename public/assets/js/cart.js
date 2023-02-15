function removeProductFromCart(selector) {

    let productEle = $(selector).parent().parent()

    $.ajax({
        type: 'POST',
        url: routeRemoveProductFromCart(),
        headers: {'X-CSRF-TOKEN': getCSRFToken()},
        data: {
            id_product: productEle.get(0).id
        },
        success: function (response) {
            if(response.result) {
                $('#' + productEle.get(0).id).remove()
                checkProductInCart()
            } else {
                Swal.fire({
                    position: 'bottom-end',
                    icon: 'error',
                    width: '400px',
                    title: 'Remove product from cart not successfully',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
        }
    })
}

function checkProductInCart() {
    let productCart = $('.product_cart')

    if(productCart.length <= 1) {
        $('#cart').html(`<img src=${imageNoProductFound()}>`)
    }
}
