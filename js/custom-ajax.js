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

        // Determine the index of the clicked column among all columns
        const columnIndex = $( '.column' ).index(clickedColumn);

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

        // Determine the translateX value based on the clicked column's index
        let translateValue = '';
        switch (columnIndex) {
            case 0: // First column
                translateValue = '0%'; // No transform
                break;
            case 1: // Second column
                translateValue = '-20%';
                break;
            case 2: // Third column
                translateValue = '-40%';
                break;
            case 3: // Fourth column
                translateValue = '-60%';
                break;
            case 4: // Fifth column
                translateValue = '-80%';
                break;
            default:
                break;
        }

        // Apply the determined translateX value with a transition and a delay
        $( '#content-area' ).css({
            'transform': `translateX(${translateValue})`,
            'transition': 'transform 500ms',
            'transition-delay': '500ms' // 1 second delay before the transform animation starts
        });
    });
});
