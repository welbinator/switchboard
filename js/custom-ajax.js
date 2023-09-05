jQuery( document ).ready( function( $ ) {
	$( '.custom-link' ).click( function( e ) {
		e.preventDefault();

		// Cache the clicked column
		const clickedColumn = $( this ).closest( '.column' );

		// If viewport width is less than 1024px (mobile view)
		if ( $( window ).width() < 1024 ) {
			const offsetTop = clickedColumn.position().top;

			// Calculate 12vh in pixels
			const vh12 = $( window ).height() * 0.12;

			// Determine the distance needed to move the column to 12vh from the top
			const moveDistanceVertical = offsetTop - vh12;

			// Animate the movement of the clicked column to 12vh from the top
			clickedColumn.animate( {
				top: -moveDistanceVertical,
			}, 400 );
		} else { // For viewport width 1024px and above (desktop view)
			const offsetLeft = clickedColumn.position().left;

			// Determine the distance needed to move the column to the very left
			const moveDistanceHorizontal = offsetLeft;

			// Animate the movement of the clicked column to the leftmost side
			clickedColumn.animate( {
				left: -moveDistanceHorizontal,
				width: '50%',
			}, 1000 );
		}

		// Fade out other columns
		$( '.column' ).not( clickedColumn ).animate( {
			opacity: 0,
		}, 200 );

		// Cache the URL of the link
		const href = $( this ).attr( 'href' );

		// Delay navigation by 500ms
		setTimeout( function() {
			window.location.href = href;
		}, 500 );

		$( window ).on( 'pageshow', function( event ) {
			if ( event.originalEvent.persisted ) {
				window.location.reload();
			}
		} );
	} );
} );
