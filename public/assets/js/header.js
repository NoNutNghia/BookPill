const modal_download = $('#modal_download')
const cart_user = $('#cart_user')

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


