$(".btn-filter").on("click", function(){

 $('html,body').animate({scrollTop: $('#alert').offset().top- 80}, 2000);
});
$(".btn-filter").on("click", function(){
  var target = $(this).data('target');
  $('.tab-pane').hide();
  $($('#'+target)).slideDown();
});

$(".tab-content").mouseleave(function(){
  $('.tab-pane').slideUp('slow');
});

$(".btn-filter").on("click", function(){
  var target = $(this).data('target');
  $('.tab-pane').hide();
  $($('#'+target)).slideDown();
});

$('input:checkbox[name=eyeglass-filter]').on('change', function(){
    if($(this).is(':checked')){
        $(this).parent().parent().find(".fa").addClass("fa-check");
    }
    else{
          $(this).parent().parent().find(".fa").removeClass("fa-check");
        }
});

$(".thumbnail").hover(function(){

  $(this).find(".btn-try-eyglass").removeClass('hidden fadeOut').addClass('fadeIn');

    }, function(){
      $(".btn-try-eyglass").addClass('fadeOut hidden');
});



 $( function() {
    $( "#frame-full-width-range" ).slider({
      range: true,
      min: 110,
      max: 150,
      values: [ 110, 150 ],
      slide: function( event, ui ) {
       $( "#min-custom-frame-width" ).html(ui.values[ 0 ]);
       $( "#max-custom-frame-width" ).html(ui.values[ 1 ]);
      }
    });
       $('#frame-full-width-range .ui-slider-handle').addClass('fa fa-circle');

     $( "#frame-lens-width-range" ).slider({
      range: true,
      min: 56,
      max: 90,
      values: [ 56, 90 ],
      slide: function( event, ui ) {
       $( "#min-custom-frame-lens-width" ).html(ui.values[ 0 ]);
       $( "#max-custom-frame-lens-width" ).html(ui.values[ 1 ]);
      }
    });
       $('#frame-lens-width-range .ui-slider-handle').addClass('fa fa-circle');


          $( "#frame-lens-height-range" ).slider({
      range: true,
      min: 10,
      max: 60,
      values: [ 10, 60 ],
      slide: function( event, ui ) {
       $( "#min-custom-frame-lens-height" ).html(ui.values[ 0 ]);
       $( "#max-custom-frame-lens-height" ).html(ui.values[ 1 ]);
      }
    });
       $('#frame-lens-height-range .ui-slider-handle').addClass('fa fa-circle');

        $( "#frame-bridge-width-range" ).slider({
      range: true,
      min: 12,
      max: 29,
      values: [ 12, 29 ],
      slide: function( event, ui ) {
       $( "#min-custom-frame-bridge-width" ).html(ui.values[ 0 ]);
       $( "#max-custom-frame-bridge-width" ).html(ui.values[ 1 ]);
      }
    });
     $('#frame-bridge-width-range .ui-slider-handle').addClass('fa fa-circle');

   $( "#frame-temple-width-range" ).slider({
      range: true,
      min: 120,
      max: 150,
      values: [ 120, 150 ],
      slide: function( event, ui ) {
       $( "#min-custom-frame-temple-width" ).html(ui.values[ 0 ]);
       $( "#max-custom-frame-temple-width" ).html(ui.values[ 1 ]);
      }
    });
        $('#frame-temple-width-range .ui-slider-handle').addClass('fa fa-circle');

  } );
