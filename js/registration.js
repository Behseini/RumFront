$('input').focus(function(){
  $(this).parents('.form-group').addClass('focused');
});

$('input').blur(function(){
  var inputValue = $(this).val();
  if ( inputValue == "" ) {
    $(this).removeClass('filled');
    $(this).parents('.form-group').removeClass('focused');
  } else {
    $(this).addClass('filled');
  }
})

let currentYear = new Date().getFullYear();
let legalYear = currentYear -18;
let step1 = legalYear -11;
let range1 = [];

for (let a = step1; a <= legalYear; a++) {
    range1.push(a);
}
let range2 =[];
for (let b = step1-12; b <= legalYear-12; b++) {
    range2.push(b);
}
let range3 =[];
for (let c= step1-24; c <= legalYear-24; c++) {
    range3.push(c);
}
let range4 =[];
for (let d= step1-36; d <= legalYear-36; d++) {
    range4.push(d);
}
let range5 =[];
for (let e= step1-48; e <= legalYear-48; e++) {
    range5.push(e);
}
let range6 =[];
for (let f= step1-60; f <= legalYear-60; f++) {
    range6.push(f);
}
let range7 =[];
for (let g= step1-72; g <= legalYear-72; g++) {
    range7.push(g);
}

for (let a = 0; a < 12; a++) {
    $('.years-01').append('<button class="btn btn-primary btn-sm btn-year">'+range1[a]+'</button>');
    $('.years-02').append('<button class="btn btn-primary btn-sm btn-year">'+range2[a]+'</button>');
    $('.years-03').append('<button class="btn btn-primary btn-sm btn-year">'+range3[a]+'</button>');
    $('.years-04').append('<button class="btn btn-primary btn-sm btn-year">'+range4[a]+'</button>');
    $('.years-05').append('<button class="btn btn-primary btn-sm btn-year">'+range5[a]+'</button>');
    $('.years-06').append('<button class="btn btn-primary btn-sm btn-year">'+range6[a]+'</button>');
    $('.years-07').append('<button class="btn btn-primary btn-sm btn-year">'+range7[a]+'</button>');
}


$("[data-toggle=popover]").each(function(i, obj) {
  $(this).popover({
      container: 'body',
    html: true,
    content: function() {
      var id = $(this).attr('id')
      return $('#popover-content-' + id).html();
    }
  });

});
$("[data-toggle=popover]").on('shown.bs.popover', function() {
  $('.carousel-inner').carousel();
});
$('body').on('click','.btn-cal-control', function() {

  $('.carousel-control-prev').click();
  $('#demo').carousel('prev')
});
