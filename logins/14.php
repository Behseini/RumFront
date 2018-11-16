<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,300" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,300" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,300" rel="stylesheet" type="text/css">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ArcGIS API</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap.min.css" >
    <link href="style.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <style>
          #myPopover{ padding:0px 20px 0px 20px;}
          .date-btns-box{ margin:0px!important;padding:0px 4px 0px 4px;}
          #date-footer{margin:7px 0px 0px 0px !important; padding: 0px!important;}

     .btn-group-vertical>.btn.active, .btn-group-vertical>.btn:active, .btn-group-vertical>.btn:focus, .btn-group-vertical>.btn:hover, .btn-group>.btn.active, .btn-group>.btn:active, .btn-group>.btn:focus, .btn-group>.btn:hover{
    color: #fff;
    background-color: #16a085;
    background-color:floralwhite;
    background-color:gold;
/*
    border-color: #16a085;
   border-color :floralwhite;
*/
    box-shadow: none;
         outline: none;
}

      </style>
  </head>
  <body>
<div class="container">

    <div class="container">
 <br />
 <div class="row">
   <div class="col-md-2">
 	<a role="button" id="btn-captcha" class="btn btn-default" href="#" rel="popover" data-popover-content="#myPopover" title="What day is today?">My Popover</a>
   </div>
 </div>
</div>

<div id="myPopover" class="hide">
<!--
    <div class="row clear-fix" id="date-header-row" style="margin:0px Important; background:#eee;">
        <span role="presentation" class="dropdown-header pull-left">What day is today?</span>
        <button class="btn btn-default btn-xs pull-right"> X </button>
        <div class="clear-fix"></div>
    </div>
-->

  <div class="row" id="date-box">

    <div class="row" id="btns"></div>
       </div>
    <div id="date-footer"><button type="button" id="captcha-check" class="btn btn-default btn-sm btn-block">Submit</button></div>

</div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="jquery.min.js"></script>
      <script src="bootstrap.min.js"></script>
      <script>


function getCaptchaDates(){

        var getDates = $.ajax({
        type: "Get",
        url: "captchaF.php",
        cache: false,
        dataType: "HTML",
        beforeSend: function() {},
        success: function(



            ) {}
    });
    getDates.done(function(btns) {
        $('#btns').html(btns);
    });
    getDates.fail(function(jqXHR, textStatus) {
        console.log("Request failed: " + textStatus);
    });
}
//getCaptchaDates();

$('#btn-captcha').on('click',function(){

     getCaptchaDates();

});


    $('body').on('change', 'input:radio[name="days"]', function(){
        console.log($(this).val());

    });
    $('body').on('change', 'input:radio[name="dates"]', function(){
        console.log($(this).val());

    });
    $('body').on('change', 'input:radio[name="months"]', function(){
        console.log($(this).val());

    });





$(function(){
    $('[rel="popover"]').popover({
        container: 'body',
        html: true,
       placement: 'bottom',
         trigger : 'click', //<--- you need a trigger other than manual
    delay: {
       show: "50",
       hide: "0"
    },
        content: function () {
            var clone = $($(this).data('popover-content')).clone(true).removeClass('hide');
            return clone;
        }
    }).click(function(e) {
        e.preventDefault();
    });
});

      </script>
  </body>
</html>
