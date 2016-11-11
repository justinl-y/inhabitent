/*** to ue query in word press use IIFE ***/

(function( $ ) {

    /*$('#close-comments').on('click', function(event) {
        event.preventDefault();

        $.ajax({

            method: 'post',
            url: red_vars.ajax_url,
            data: {
                'action': 'red_comment_ajax',
                'security': red_vars.comment_nonce,
                'the_post_id': red_vars.post_id
            }

        }).done( function(response) {

            alert('Success! Comments are closed for this post.');

        });

        //add fail
    });*/

    $('#close-comments').on('click', function(event) {
        event.preventDefault();

        $.ajax({
            method: 'post',
            url: red_vars.rest_url + 'wp/v2/posts/' + red_vars.post_id,
            data: {
                comment_status: 'closed'
            },
            beforeSend: function(xhr) {
                xhr.setRequestHeader( 'X-WP-Nonce', red_vars.wpapi_nonce );
            }
        }).done( function(response) {
            alert('Success! Comments are closed for this post.');
        });
    });

})( jQuery );
