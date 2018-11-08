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

});

$('.btn-defaulta').on('click', function () {
  $('#pills-forget-tab').trigger('click');
});

$('.btn-defaultb').on('click', function () {
  $('#pills-login-tab').trigger('click');
});

// Forms
$('input').focus(function () {
  $(this).parents('.form-group').addClass('focused');
});

$('input').blur(function () {
  var inputValue = $(this).val();
  if (inputValue == "") {
    $(this).removeClass('filled');
    $(this).parents('.form-group').removeClass('focused');
  } else {
    $(this).addClass('filled');
  }
})


// Validation
$(document).ready(function(){
		$('#validate3').click(function(){
				$('#form3').djValidator('validate');
			});

		});
