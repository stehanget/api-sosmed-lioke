$(document).on('click', '.register-link', function () {
    $('.box-register').addClass('d-grid')
    $('.box-register').removeClass('d-none')
    $('.box-login').addClass('d-none')
    $('.box-login').removeClass('d-grid')
})

$(document).on('click', '.login-link', function () {
    $('.box-login').addClass('d-grid')
    $('.box-login').removeClass('d-none')
    $('.box-register').removeClass('d-grid')
    $('.box-register').addClass('d-none')
})