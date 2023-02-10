function changeMainImage(srcImage) {
    $('#main_image_detail').attr('src', srcImage)
}

$('.add_to_cart').on('click', function () {
    $.ajax({
        type: 'POST',
        url: routeAddProductToCart(),
        headers: {'X-CSRF-TOKEN': getCSRFToken()},
        data: {
            id_product: this.value
        },
        success: function (response) {
            if(response.result) {
                getCartList()
                Swal.fire({
                    position: 'bottom-end',
                    icon: 'success',
                    width: '400px',
                    height: '100px',
                    title: 'Add product to cart successfully',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
        }
    })
})
