$(document).on('click', '.register-link', function () {
    setRegisterForm()
})

$(document).on('click', '.login-link', function () {
    setLoginForm()
})

const setLoginForm = () => {
    $('.box-login').addClass('d-grid')
    $('.box-login').removeClass('d-none')
    $('.box-register').removeClass('d-grid')
    $('.box-register').addClass('d-none')
}

const setRegisterForm = () => {
    $('.box-register').addClass('d-grid')
    $('.box-register').removeClass('d-none')
    $('.box-login').addClass('d-none')
    $('.box-login').removeClass('d-grid')
}