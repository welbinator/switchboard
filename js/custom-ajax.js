jQuery(document).ready(function ($) {
	$('.custom-link').click(function (e) {
		e.preventDefault();

		// Cache the URL of the link
		const href = $(this).attr('href');

		// Delay navigation by 500ms
		setTimeout(function () {
			window.location.href = href;
		}, 500);
	});

	// eventlistener for column
	$( '.custom-link' ).click( function( e ) {
        e.preventDefault();

        // Cache the clicked column
        const clickedColumn = $( this ).closest( '.column' );

        // For each .custom-link
        $( '.custom-link' ).each( function() {
            // If the parent .column of the current .custom-link is not the clicked column
            if ($( this ).closest( '.column' ).get(0) !== clickedColumn.get(0)) {
                // Fade it to opacity: 0
                $( this ).closest( '.column' ).animate( {
                    opacity: 0
                }, 500 ); // 500ms duration for the fade animation
            }
        });

        // Move #content-area to the left by 100% using translateX with a transition and a delay
        $( '#content-area' ).css({
            'transform': 'translateX(-100%)',
            'transition': 'transform 500ms',
            'transition-delay': '500ms' // 1 second delay before the transform animation starts
        });
    });
});
