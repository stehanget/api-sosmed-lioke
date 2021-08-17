$(document).on('click', '#shortcut-btn', function () {
    if ($('#shortcut-list').data('anim-done') == true) {
      $('#shortcut-list').data('anim-done', false)
  
      if ($('#shortcut-list').css('display') == 'none') {
        $('#shortcut-btn svg').css('transform', 'rotate(135deg)')
        $('#shortcut-list a').css('opacity', 0)
        $('#shortcut-list a').removeClass('animation-fade-up')
  
        $('#shortcut-list').css('display', 'flex')
        $('#shortcut-list a').each(function (i) {
          setTimeout(() => {
            $(this).addClass('animation-fade-down')
          }, i * 100)
        })
  
        setTimeout(() => {
          $('#shortcut-list').data('anim-done', true)
        }, 1400)
      } else {
        $('#shortcut-btn svg').css('transform', 'rotate(0deg)')
        $('#shortcut-list a').css('opacity', 1)
        $('#shortcut-list a').removeClass('animation-fade-down')
  
        $($('#shortcut-list a').get().reverse()).each(function (i) {
          setTimeout(() => {
            $(this).addClass('animation-fade-up')
          }, i * 100)
        })
  
        setTimeout(() => {
          $('#shortcut-list').data('anim-done', true)
          $('#shortcut-list').hide()
        }, 1400)
      }
    }
  })
  
  $(document).on('click', '#shortcut-list #music', function () {
    if (($('#shortcut-list #music #off').css('display') == 'none')) {
      $('#shortcut-list #music #off').css('display', 'block')
      $('#shortcut-list #music #on').css('display', 'none')
    } else {
      $('#shortcut-list #music #off').css('display', 'none')
      $('#shortcut-list #music #on').css('display', 'block')
    }
  })
  
  $(document).on('mouseenter', '#shortcut-list a', function () {
    $(this).find('.desc').show()
  })
  
  $(document).on('mouseleave', '#shortcut-list a', function () {
    $('#shortcut-list a .desc').hide()
  })