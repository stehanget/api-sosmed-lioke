var categoryData = []

const getCategoryData = () => {
    jQuery.ajax({
        url: `categories`,
        type: 'GET',
        dataType: 'json',
        success: function (res) {
            categoryData = res.data

            console.log(categoryData)
        }
    })
}

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

// $(document).on('click', '#portfolio-flters li', function () {
//     const category_id = $(this).data('filter')
//     showFilters(category_id)
// })

// const showFilters = (id) => {
//     categoryData.forEach(category => {
//         if (category.id === id) {
//             $(`.filter.filter-${id}`).addClass('d-block')
//         } else {
//             $(`.filter.filter-${id}`).addClass('d-none')
//             $(`.filter.filter-${id}`).removeClass('d-block')
//         }
//         console.log(`.filter-${category.id}` === id)
//         console.log(`${id}`)
//     })
// }

$(document).ready(function () {
    getCategoryData()
})