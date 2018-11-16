jQuery( document ).on( 'click', '#up-data', function() {
    jQuery.ajax({
        url : postlove.ajax_url,
        type: "POST",
        dataType: 'html',
        data : {
            action : 'set_ajaxify',
            domain : 'www.google.com'
        },
        success : function( response ) {
            jQuery('.result').html( response );
        }
    });
})
