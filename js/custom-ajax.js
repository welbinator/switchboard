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
	$('.custom-link').click(function (e) {
		e.preventDefault();

		// Cache the clicked column
		const clickedColumn = $(this).closest('.column');

		// Determine the index of the clicked column among all columns
		const columnIndex = $('.column').index(clickedColumn);

		// For each .custom-link
		$('.custom-link').each(function () {
			// If the parent .column of the current .custom-link is not the clicked column
			if ($(this).closest('.column').get(0) !== clickedColumn.get(0)) {
				// Fade it to opacity: 0
				$(this).closest('.column').animate({
					opacity: 0
				}, 500); // 500ms duration for the fade animation
			}
		});

		let transformValue = '';
		switch (columnIndex) {
			case 0:
				transformValue = '0%'; // No transform
				break;
			case 1:
				transformValue = '-20%';
				break;
			case 2:
				transformValue = '-40%';
				break;
			case 3:
				transformValue = '-60%';
				break;
			case 4:
				transformValue = '-80%';
				break;
			default:
				break;
		}

		// Check if it's a mobile device based on viewport width
		if ($(window).width() < 1024) {
			// For mobile: Move vertically
			$('#content-area').css({
				'transform': `translateY(${transformValue})`,
				'transition': 'transform 500ms',
				'transition-delay': '200ms'
			});
		} else {
			// For desktop: Move horizontally
			$('#content-area').css({
				'transform': `translateX(${transformValue})`,
				'transition': 'transform 500ms',
				'transition-delay': '200ms'
			});
		}
	});
});
