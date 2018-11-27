$(function () {
  "use strict";
    $(function () {


        $("#demo3 li").hoverIntent( $('[data-toggle="tooltip"]').tooltip() );
})

  $(".navbar-main .dropdown-toggler").on('click', function () {
    $(this).find('.icon').toggleClass('css-angle-down');
    let $this = $(this).next(".navbar-main .dropdown-menu");
    $(".navbar-main .dropdown-menu").not($this).slideUp(300).prev(".navbar-main .dropdown-toggler").find(".icon").removeClass("css-angle-down");
    $this.slideToggle(300);
  });

  $(".navbar-main .dropdown-menu").hover(function (e) {}, function (e) {
    $(this).slideUp(500);
    $(this).prev(".dropdown-toggler").find(".icon").removeClass("css-angle-down");
  });


  // $(".navbar-top .toggler").on('click', function () {
  //   let $this = $(this).next(".navbar-top .dropdown-menu");
  //   $(".navbar-top .dropdown-menu").not($this).slideUp(300);
  //   $this.slideToggle(300);
  // });

  // $(".navbar-top .dropdown-menu").hover(function (e) {}, function (e) {
  //   $(this).slideUp(500);

  // });
  $(".navbar-top .dropdown").on("show.bs.dropdown", function () {
    $(this).addClass('top-active-dropdown');
    $(this)
      .find(".dropdown-menu")
      .first()
      .stop(true, true)
      .slideDown(300);
  });
  $(".navbar-top .dropdown").on("hide.bs.dropdown", function () {
    let $this = $(this);
    setTimeout(function () {
      $this.removeClass('top-active-dropdown');
    }, 250);
    $(this)
      .find(".dropdown-menu")
      .first()
      .stop(true, true)
      .slideUp(300);
  });
  //  $(".navbar-top .dropdown-menu").on("click", function (e) {
  //    e.stopPropagation();
  //  });

});



$(document).ready(function () {
  $(".dropdown-menu").on("click", function (e) {
    e.stopPropagation();
  });
  $('.btn-forgetpassword-mobile').on('click', function () {
//    $('.tab-pane').removeClass('show active');
//    $('#pills-forget').addClass('show active');
    $('#pills-forget-tab-mobile').click();
  });

  $('.btn-forgetpassword').on('click', function () {
//    $('.tab-pane').removeClass('show active');
//    $('#pills-forget').addClass('show active');
    $('#pills-forget-tab').click();
  });

  $('.btn-backlogin').on('click', function () {
      $('#pills-login-tab').click();
//    $('.tab-pane').removeClass('show active');
//    $('#pills-login').addClass('show active');
  });

  $('#validate-dropdown-login').on('click', function () {
    $('#dropdown-login').djValidator('validate');
  });

  $('#validate-password-email').on('click', function () {
    $('#dropdown-password-email').djValidator('validate');
  });

});



$('#signin-nav').on('click', function () {
    $('body').css({background:'rgba(0,0,0,0.4)'});
  $('#signin-sidenav').animate({
    width: "410px"
  }, 'fast', 'linear');
});
$('#help-nav').on('click', function () {
    $('body').css({background:'rgba(0,0,0,0.4)'});
  $('#help-sidenav').animate({
    width: "410px"
  }, 'fast', 'linear');
});
$('#cart-nav').on('click', function () {
    $('body').css({background:'rgba(0,0,0,0.4)'});
  $('#cart-sidenav').animate({
    width: "410px"
  }, 'fast', 'linear');
});
$('#wish-nav').on('click', function () {
    $('body').css({background:'rgba(0,0,0,0.4)'});
  $('#wish-sidenav').animate({
    width: "410px"
  }, 'fast', 'linear');
});
$('.closebtn').on('click', function () {
     $('body').css('background','#fff');
  $('#signin-sidenav, #help-sidenav, #cart-sidenav, #wish-sidenav').animate({
    width: "0px"
  }, 'fast', 'linear');
});
