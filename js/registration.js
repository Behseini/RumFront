 var token = "<?php echo $_SESSION['token']; ?>";
$('input').focus(function () {
    $(this).parents('.form-group').addClass('focused');
});
$( document ).ready(function() {
    var getCaptcha1 = $.ajax({
        type: "Get",
        url: captchaURL,
        cache: false,
        dataType: "HTML",
        beforeSend: function () {},
        success: function () {}
    });
    getCaptcha1.done(function (dates) {
        $('.captcha-data').html(dates);
    });
    getCaptcha1.fail(function (jqXHR, textStatus) {
        $('.captcha-data').html("Request failed: " + textStatus);
    });
});

let registereduser ={
                        token: token,
                        captchcode:null,
                        title:null,
                        name:null,
                        lastname:null,
                        birthYear:null,
                        birthMonth:null,
                        birthDay:null,
                        email:null,
                        buzz:null,
                        bulidingNo:null,
                        streetNo:null,
                        streetName:null,
                        city:null,
                        postalCode:null,
                        password:null
}

$('input').blur(function () {
    var inputValue = $(this).val();
    if (inputValue == "") {
        $(this).removeClass('filled');
        $(this).parents('.form-group').removeClass('focused');
    } else {
        $(this).addClass('filled');
    }
})
let currentYear = new Date().getFullYear();
let legalYear = currentYear - 18;
let step1 = legalYear - 11;
let years = {
    range1: [],
    range2: [],
    range3: [],
    range4: [],
    range5: [],
    range6: [],
    range7: []
}
for (let a = step1; a <= legalYear; a++) {
    years.range1.push(a);
}
for (let b = step1 - 12; b <= legalYear - 12; b++) {
    years.range2.push(b);
}
for (let c = step1 - 24; c <= legalYear - 24; c++) {
    years.range3.push(c);
}
for (let d = step1 - 36; d <= legalYear - 36; d++) {
    years.range4.push(d);
}
for (let e = step1 - 48; e <= legalYear - 48; e++) {
    years.range5.push(e);
}
for (let f = step1 - 60; f <= legalYear - 60; f++) {
    years.range6.push(f);
}
for (let g = step1 - 72; g <= legalYear - 72; g++) {
    years.range7.push(g);
}

function renderYears() {
    for (let a = 0; a < 12; a++) {
    $('.contents').eq(6).append('<a class="btn btn-sm btn-year btn-popover" data-year="'+years.range1[a]+'">' + years.range1[a] + '</a>');
    $('.contents').eq(5).append('<a class="btn btn-sm btn-year btn-popover" data-year="'+years.range2[a]+'">' + years.range2[a] + '</a>');
    $('.contents').eq(4).append('<a class="btn btn-sm btn-year btn-popover" data-year="'+years.range3[a]+'">' + years.range3[a] + '</a>');
    $('.contents').eq(3).append('<a class="btn btn-sm btn-year btn-popover" data-year="'+years.range4[a]+'">' + years.range4[a] + '</a>');
    $('.contents').eq(2).append('<a class="btn btn-sm btn-year btn-popover" data-year="'+years.range5[a]+'">' + years.range5[a] + '</a>');
    $('.contents').eq(1).append('<a class="btn btn-sm btn-year btn-popover" data-year="'+years.range6[a]+'">' + years.range6[a] + '</a>');
    $('.contents').eq(0).append('<a class="btn btn-sm btn-year btn-popover" data-year="'+years.range7[a]+'">' + years.range7[a] + '</a>');
    }
    $('.years').html(years[`range${current}`][0] + ' - ' + years[`range${current}`][11]);
    if (current >= 7) {
        $('.next').addClass('disabled');
        $('.prev').removeClass('disabled')
//        $('.next').addClass('d-none');
//        $('.prev').removeClass('d-none')

    } else {
        $('.next').removeClass('disabled');
        $('.prev').addClass('disabled');
//         $('.next').removeClass('d-none');
//        $('.prev').addClass('d-none');
    }
    if (current <= 1) {
        $('.prev').addClass('disabled');
        $('.nax').removeClass('disabled');
//                $('.prev').addClass('d-none');
//        $('.nax').removeClass('d-none');
    } else {
        $('.prev').removeClass('disabled');
        $('.nax').addClass('disabled');
//        $('.prev').removeClass('d-none');
//        $('.nax').addClass('d-none');
    }
}
let current = 1;
$(document).on("click", ".next", function () {
    current++;
    $('.years').html(years[`range${current}`][0] + ' - ' + years[`range${current}`][11]);
    if (current >= 7) {
        $(".contents").css("z-index", "101");
        $('.contents[data-index="' + current + '"]').css("z-index", "105");
        $(this).addClass("disabled");
        //$(this).addClass("d-none");
    } else {
        $(this).next().next(".prev").removeClass("disabled");
        //$(this).next().next(".prev").removeClass("d-none");
        $(".contents").css("z-index", "101");
        $('.contents[data-index="' + current + '"]').css("z-index", "105");
    }
});
$(document).on("click", ".prev", function () {
    current--;
    $('.years').html(years[`range${current}`][0] + ' - ' + years[`range${current}`][11]);
    if (current <= 1) {
        $(".contents").css("z-index", "101");
        $('.contents[data-index="' + current + '"]').css("z-index", "105");
        $(this).addClass("disabled");
        //$(this).addClass("d-none");
    } else {
        $(this).prev().prev(".next").removeClass("disabled");
        //$(this).prev().prev(".next").removeClass("d-none");
        $(".contents").css("z-index", "101");
        $('.contents[data-index="' + current + '"]').css("z-index", "105");
    }
});

$("[data-toggle=popover]").each(function (i, obj) {
    $(this).popover({
        html: true,
        content: function () {
            var id = $(this).attr('id')
            return $('#popover-content-' + id).html();
        }
    });

});


$('#ageyear').on('show.bs.popover', function () {
    renderYears();
})
$('#ageyear').on('hidden.bs.popover', function () {
    $('.contents').empty();
})

//function renderCaptcha(){
//      var getCaptcha = $.ajax({
//        type: "Get",
//        url: captchaURL,
//        cache: false,
//        dataType: "HTML",
//        beforeSend: function() {},
//        success: function(
//
//
//
//            ) {}
//    });
//    getCaptcha.done(function(dates) {
//        $('.captcha-content').html(dates);
//    });
//    getCaptcha.fail(function(jqXHR, textStatus) {
//         $('.captcha-content').html("Request failed: " + textStatus);
//    });
//
//}
//$('#captcha').on('show.bs.popover', function () {
//    renderCaptcha();
//})
//$('#captcha').on('hidden.bs.popover', function () {
//    $('.captcha-content').empty();
//})





$('body').on('click', function (e) {
 if (!$(e.target).is('.show-on')) {
     if ($(e.target).data('toggle') !== 'popover' &&
         $(e.target).parents('[data-toggle="popover"]').length === 0 &&
         $(e.target).parents('.popover.in').length === 0) {
         $('[data-toggle="popover"]').popover('hide');
     }
 }
 });
$('[data-toggle=popover]').on('click', function (e) {
   $('[data-toggle=popover]').not(this).popover('hide');
});

$(document).on('click', '.btn-g', function () {
   let gender = $(this).data('bg');
    $('#user-title').val(gender).focus();
})

$(document).on('click', '.btn-year', function () {
   let year = $(this).data('year');
    $('#user-year').val(year).focus();
     $('[data-toggle="popover"]').popover('hide');
})

$(document).on('click', '.btn-m', function () {
   let month = $(this).data('bm');
    $('#user-month').val(month).focus();
})

$(document).on('click', '.btn-d', function () {
   let day = $(this).data('bd');
    $('#user-day').val(day).focus();
})

$(".toggle-password").click(function() {
  $(this).toggleClass("icon-eye-f icon-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

  $('#reg1-validate').on('click', function () {
    if($('#reg1').djValidator('validate')){
            registereduser.title = $('#user-title').val();
            registereduser.name = $('#user-name').val();
            registereduser.lastname = $('#user-last-name').val();
            registereduser.birthYear = $('#user-year').val();
            registereduser.birthMonth = $('#user-month').val();
            registereduser.birthDay = $('#user-day').val();
            $('.registration .tab-pane').removeClass('show active');
            $('.registration .tab-pane').eq(1).addClass('show active');
            $('.registration .nav-link').removeClass('active');
            $('.registration .nav-link').eq(1).addClass('active');
      }
      else{
          console.log('No valid');
      }
  });
  $('#reg2-validate').on('click', function () {
    if($('#reg2').djValidator('validate')){
//         $('.registration .tab-pane').removeClass('show active');
//         $('.registration .tab-pane').eq(2).addClass('show active');
//         $('.registration .nav-link').removeClass('active');
//         $('.registration .nav-link').eq(2).addClass('active');
    }
      else{
          console.log('No valid');

      }
  });
  $('#back-pane-0').on('click', function () {
         $('.registration .tab-pane').removeClass('show active');
         $('.registration .tab-pane').eq(0).addClass('show active');
         $('.registration .nav-link').removeClass('active');
         $('.registration .nav-link').eq(0).addClass('active');

  });
  $('#back-pane-1').on('click', function () {
         $('.registration .tab-pane').removeClass('show active');
         $('.registration .tab-pane').eq(1).addClass('show active');
         $('.registration .nav-link').removeClass('active');
         $('.registration .nav-link').eq(1).addClass('active');

  });
  $('#reg3-validate').on('click', function () {
    if($('#reg3').djValidator('validate')){

    }
      else{
          console.log('No valid');
      }
  });

