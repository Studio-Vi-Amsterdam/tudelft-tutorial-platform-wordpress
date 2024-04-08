export function initMenu() {
  initMenuToggle()
  initHeader()

  const $header = $('.header')
  $(window).on('load', function (e) {

    $('body').removeClass('preload')
  })
  function initHeader() {
    if (document.documentElement.scrollTop > 0) {
      $('.header').addClass("header--fixed");
    }

    window.addEventListener('scroll', function () {
      if (document.documentElement.scrollTop > 0) {
        $header.addClass("header--fixed");
      } else {
        $header.removeClass("header--fixed");
      }
    })
  }

  // $('.menu-item-has-children__wrapper .menu-item-has-children').on('mousemove', function() {
  //   setTimeout(() => {
  //     $header.addClass("hover-effect");
  //   }, 100);
  // })
  // $('.menu-item-has-children__wrapper .menu-item-has-children').on('mouseleave', function() {
  //   setTimeout(() => {
  //     $header.removeClass("hover-effect");
  //   }, 500);
  // })


  function initMenuToggle() {
    const $nav = $('.nav')
    const headerMenuActiveClassName = 'header--opened'
    const navMenuActiveClassName = 'nav--opened'

    $(window).on('click', function (e) {
      if ($(e.target).closest('.js-menu-toggle').length > 0) {
        $nav.toggleClass(navMenuActiveClassName)
        $header.toggleClass(headerMenuActiveClassName)
      } else if ($(e.target).closest('.js-menu-close').length > 0) {
        $nav.removeClass(navMenuActiveClassName)
        $header.toggleClass(headerMenuActiveClassName)
      }

      if (document.querySelector('.nav').classList.contains(('nav--opened'))) {
        document.querySelector('html').style.overflowY = "hidden"
      } else {
        document.querySelector('html').style.overflowY = "unset"
      }

      $('a').on('click', function () {
        $nav.removeClass(headerMenuActiveClassName)
        document.querySelector('html').style.overflowY = "unset"
      })

    })

  }

  $('.menu-item-has-children__next').add($('.title-prev')).on('click', function (e) {
    e.stopPropagation();
    let parent = $(this).closest('.menu-item-has-children')
    let menu = parent.find('.menu-item-has-children__submenu').first()
    menu.toggleClass('active')
  })
  $('.title-start').on('click', function () {
    $('.menu-item-has-children__submenu').removeClass('active')
  })

  if ($(window).width() > 1024) {

    $('.header__submenu .menu-item-has-children').on('mouseover', function () {
      if ($(this).find('header__submenu').hasClass('active')) {
        $(this).find('header__submenu').removeClass('active')
      } else {
        $('.header__submenu').removeClass('active')
        $(this).find('header__submenu').addClass('active')
      }

    })
  }



}


