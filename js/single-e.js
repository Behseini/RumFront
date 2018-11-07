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
