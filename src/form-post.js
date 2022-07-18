jQuery( document ).ready( function( $ ) {
    'use strict';
    $( '#guf-form' ).submit( function( event ) {

        event.preventDefault();

        var ajax_form_data = $( '#guf-form' ).serialize();

        ajax_form_data = ajax_form_data + '&ajaxrequest=true&submit=Submit+Form';

        $.ajax({
            url:    URLSearchParams.ajaxurl,
            type:   'post',
            data:   ajax_form_data
        })

        .done( function( response ) {
            $( '#guf-feedback' ).html( '<h2>From Submitted Successfully!</h2><br>' + response );
        })

        .fail( function() {
            $( '#guf-feedback' ).html( '<h2>Something went wrong :(</h2><br>' );
        })

        .always( function() {
            event.target.reset();
        });
    });
});