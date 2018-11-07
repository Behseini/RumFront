$(function() {
    var $this;
    var interval;
    var timeout;
    var num =null;

$('.ew-increaser').on('mousedown touchstart', function(e) {
      clearTimeout(timeout);
  clearInterval(interval);
   $this =  $(this);
   $(this).parent().find('.ew-decreaser').prop("disabled", false);
     e.preventDefault();
    if(e.type == "touchstart") {
        increase();
    timeout = setTimeout(function(){
    interval = setInterval(function(){
      increase();
    }, 100);
  }, 500);
    } else if(e.type == "mousedown") {
        increase();
   timeout = setTimeout(function(){
    interval = setInterval(function(){
      increase();
    }, 100);
  }, 500);
    }
})

$(".ew-increaser").on("mouseup touchend", function(){
  clearTimeout(timeout);
  clearInterval(interval);
});

$('.ew-decreaser').on('mousedown touchstart', function(e) {
      clearTimeout(timeout);
  clearInterval(interval);
      $this =  $(this);
   $(this).parent().find('.ew-increaser').prop("disabled", false);
    e.preventDefault();
    if(e.type == "touchstart") {
        decrease();
   timeout = setTimeout(function(){
    interval = setInterval(function(){
      decrease();
    }, 100);
  }, 500);
    } else if(e.type == "mousedown") {
        decrease();
   timeout = setTimeout(function(){
    interval = setInterval(function(){
      decrease();
    }, 100);
  }, 500);
    }
})

$(".ew-decreaser").on("mouseup touchend", function(){
  clearTimeout(timeout);
  clearInterval(interval);
});
function increase(){
   if(num == parseFloat($this.data('max')) ){
      num =parseFloat($this.data('max'));
      $this.prop("disabled", true);
      clearTimeout(timeout);
      clearInterval(interval);
       return;
   }
   else {
         if($this.prev(".ew-num").text() ==''){
            num = -0.25;
            num = num + 0.25;
            $this.prev(".ew-num").html(num.toFixed(2));
         }
         else
         {
            num =  parseFloat($this.prev(".ew-num").text());
            num = num + 0.25;
            $this.prev(".ew-num").html(num.toFixed(2));

         }
   }
}



function decrease(){
   if(num === parseFloat($this.data('min')) ){
      num =parseFloat($this.data('min'));
      $this.prop("disabled", true);
        clearTimeout(timeout);
        clearInterval(interval);
      return;

   }
   else {
      if($this.next(".ew-num").text() ==''){
         num = 0.25;
         num = num - 0.25;
         $this.next(".ew-num").html(num.toFixed(2));
      }else{

         num =  parseFloat($this.next(".ew-num").text());
         num = num - 0.25;
         $this.next(".ew-num").html(num.toFixed(2));

      }
   }
}

});
