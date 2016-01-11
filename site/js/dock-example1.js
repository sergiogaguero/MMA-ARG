$(function () { 
	// Dock initialize
	$('#dock').Fisheye(
		{
			maxWidth: 10,
			items: 'a',
			itemsText: 'span',
			container: '.dock-container',
			itemWidth: 70,
			proximity: 60,
			alignment : 'left',
			valign: 'bottom',
			halign : 'center'
		}
	);
});