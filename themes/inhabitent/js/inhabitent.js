(function( $ ) {

    //$( "#search-toggle" ).click(function() {
        //$( "#search-field" ).slideToggle( "slow", function() {
            // Animation complete.
        //});
    //});


    //$("#search-toggle").click(function () {
        //$("#search-field").hide();
    //});


    $('#search-toggle').on('click', function() {
        $('#search-field').animate( { width: 'toggle' }, 500 );

        //$('#main-menu-navigation-container').animate({right: '80px'});
    });

    $('#search-field').animate( { width: 'toggle' }, 500 );

})( jQuery );



/*var sideMenu = false;
$("#wel1").click(function() {
    if (!sideMenu) {
        $("#sidemenu").animate({left: "80px"});
        sideMenu = true;
    }
    else {
        $("#sidemenu").animate({left: "0px"});
        sideMenu = false;
    }
});*/