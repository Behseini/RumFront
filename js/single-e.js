$(function() {
$("[data-toggle=popover]").each(function(i, obj) {
$(this).popover({
  html: true,
  content: function() {
    var id = $(this).attr('id')
    return $('#popover-' + id).html();
  }
});

});

//==========Add to Cart
$(".add-to-cart").on("click", function(){
  var order ={
    oName:null,
    oBrand:null,
    oPrice:null,
    oSKU:null,
    oMaterial:null,
    oGender:null,
    oColorImage:null,
    oShape:null,
    oRim:null
  };
  order.oName = $('#oName').text();
  order.oBrand = $('#oBrand').text();
  order.oPrice = $('#oPrice').text();
  order.oSKU = $('#oSKU').text();
  order.oMaterial = $('#oMaterial').text();
  order.oGender = $('#oGender').text();
  order.oColorImage = $('.item.active >img').attr('src');
  order.oShape = $('#oShape').text();
  order.oRim = $('#oRim').text();
  console.log(order);

});

$(".add-to-wish").on("click", function(){
  alert("The paragraph was clicked.");
});





  $(".panel-usage").on("click", function () {
      $("#carousel-add-to-cart").carousel(1);
  });





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
});





$("input[name='od-right-sph']").TouchSpin({
  min: -2.75,
  max: 2.75,
  step: 0.25,
  decimals: 2
});

$("input[name='od-right-cyl']").TouchSpin({
  min: -3,
  max: 3.75,
  step: 0.25,
  decimals: 2
});

$("input[name='od-right-axi']").TouchSpin({
  min: 0,
  max: 180,
  step: 1,
  decimals: 0,
  boostat: 5,
  maxboostedstep: 10
});

$("input[name='od-right-add']").TouchSpin({
  min: 0,
  max: 1.50,
  step: 0.25,
  decimals: 2

});
//sdsdksndsd

$("input[name='os-left-sph']").TouchSpin({
  min: -2.75,
  max: 2.75,
  step: 0.25,
  decimals: 2
});

$("input[name='os-left-cyl']").TouchSpin({
  min: -3,
  max: 3.75,
  step: 0.25,
  decimals: 2
});

$("input[name='os-left-axi']").TouchSpin({
  min: 0,
  max: 180,
  step: 1,
  decimals: 0,
  boostat: 5,
  maxboostedstep: 10
});

$("input[name='os-left-add']").TouchSpin({
  min: 0,
  max: 1.50,
  step: 0.25,
  decimals: 2

});
//===============================
$("input[name='pd-single']").TouchSpin({
  min: 35,
  max: 79,
  step: 1,
  decimals: 0

});
$("input[name='pd-dual-right']").TouchSpin({
  min: 17.5,
  max: 40.0,
  step: 0.5,
  decimals: 1

});
$("input[name='pd-dual-left']").TouchSpin({
  min: 17.5,
  max: 40.0,
  step: 0.5,
  decimals: 1

});

$("#od-right-sph").on("touchspin.on.max", function () {
          $('#msg').text('you are at top');
   $('body').css('background','red');
});


$("#od-right-sph").on("change", function () {

 $('#msg').text('');
   $('body').css('background','white');

});

$("#od-right-sph").on("touchspin.on.min", function () {
 $('#msg').text('you are at bottom');
   $('body').css('background','red');
});
