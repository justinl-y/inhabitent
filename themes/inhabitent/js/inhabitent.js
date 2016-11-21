(function( $ ) {
    $('#search-toggle').on('click', function() {
        $('#search-field').animate( { width: 'toggle' }, 500 ).focus();
    });

    $('#search-field').animate( { width: 'toggle' }, 0 );
})( jQuery );

