const modal_download = $('#modal_download')
const cart_user = $('#cart_user')
const cart = $('.cart')
const profile = $('#profile_name')
const profile_expand = $('.profile')

$('#text_header_download').hover(
    function () {
        if (modal_download.css('display') === 'none') {
            modal_download.css('display', 'block')
        }
        $('.modal_download').hover(
            function () {
                modal_download.css('display', 'block')
            },
            function () {
                modal_download.css('display', 'none')
            }
        )
    },
    function () {
        $('#modal_download').css('display', 'none')
    }
)

cart_user.hover(
    function () {
        if (cart.css('display') === 'none') {
            cart.css('display', 'block')
            cart.hover(
                function () {
                    cart.css('display', 'block')
                },
                function () {
                    cart.css('display', 'none')
                }
            )
        }
    },
    function () {
        cart.css('display', 'none')
    }
)

profile.hover(
    function () {
        if(profile_expand.css('display') === 'none') {
            profile_expand.css('display', 'block')

            profile_expand.hover(
                function () {
                    profile_expand.css('display', 'block')
                },
                function () {
                    profile_expand.css('display', 'none')
                }
            )
        }
    },
    function () {
        profile_expand.css('display', 'none')
    })
