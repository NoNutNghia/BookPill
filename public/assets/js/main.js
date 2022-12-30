function chooseRating(selectRating) {
    if($(selectRating)[0].className.includes('active') !== -1) {
        $('.rating').removeClass('active')
        $(selectRating).addClass('active')
    }
}
