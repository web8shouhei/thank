require('bootstrap');
let $ = require('jQuery');

$(function() {

  let navigationInitialNumber = 0;

  // html initializ
  $('.js-html').removeClass('d-none');
  $('.js-html').addClass('html-loading');
  
  // Navigation initialize
  enableNavigationContentStyle($('.js-navigation').eq(navigationInitialNumber));

  // Navigation click function
  $('.js-navigation').on('click', function() {
    disableNavigationContentStyle();
    enableNavigationContentStyle(this);
  });
  
  // scroll header
  $(window).scroll(function() {

    // TOP header
    if($(this).scrollTop() > 40) {
      $('.l-nav--header').addClass('fixed');
      $('.l-content--top').css('margin-top', $('.l-nav--header').height());
    } else {
      $('.l-nav--header').removeClass('fixed');
      $('.l-content--top').css('margin-top', 0);
    }
    
    if($(this).scrollTop() > $('.js-content--post').offset().top) {
      $('.js-header--post').removeClass('d-none');
      $('.js-header--post').removeClass('fadeOut');
      $('.js-header--post').addClass('fadeIn');
    } else {
      $('.js-header--post').addClass('fadeOut');
      $('.js-header--post').removeClass('fadeIn');
      $('.js-header--post').addClass('d-none');
    }
  });

  // link guruguru
  $('a').on('click', function() {
    $('.js-loading, .js-overlay').removeClass('d-none');
  });
  
  /**
   * ヘッダーナビゲーションに関わるスタイル＆コンテンツをすべて無効にします。
   */
  function disableNavigationContentStyle() {
  	$('.active').each(function() {
      $(this).removeClass('active');
    });
    $('.js-navigation').each(function() {
      let contentForClass = $(this).attr('data-relation');
      $(`.${contentForClass}`).removeClass('d-none');
      $(`.${contentForClass}`).addClass('d-none');
    });
  }
  
  /**
   * 指定されたヘッダーナビゲーションに関わるスタイル＆コンテンツを有効にします。
   */
  function enableNavigationContentStyle(selector) {
  	$(selector).addClass('active');
  	let contentForClass = $(selector).attr('data-relation');
  	$(`.${contentForClass}`).removeClass('d-none');
    $('.js-navigation-underline').css({
      'width' : $(selector).outerWidth()
    });
  }

});