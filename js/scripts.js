$(function () {
  "use strict";
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


  $(".navbar-top .toggler").on('click', function () {
    let $this = $(this).next(".navbar-top .dropdown-menu");
    $(".navbar-top .dropdown-menu").not($this).slideUp(300);
    $this.slideToggle(300);
  });

  $(".navbar-top .dropdown-menu").hover(function (e) {}, function (e) {
    $(this).slideUp(500);

  });

});

$('.btn-forget').on('click', function () {
  $('#pills-forget-tab').click();
});

$('.btn-backlogin').on('click', function () {
  $('#pills-login-tab').click();
});

$(document).ready(function () {
  $('#validate3').click(function () {
    $('#form3').djValidator('validate');
  });

});