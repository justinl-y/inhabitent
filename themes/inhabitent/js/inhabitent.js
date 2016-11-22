(function( $ ) {
    $('#search-toggle').on('click', function() {
        $('#search-field').animate( { width: 'toggle' }, 500 ).focus();
    });

    $('#search-field').on('blur', function() {
        $('#search-field').animate( { width: 'toggle' }, 500 );
    });

    $('#search-field').animate( { width: 'toggle' }, 0 );
})( jQuery );