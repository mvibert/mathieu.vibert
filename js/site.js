$(document).ready(function() {	
	
	/***************************************************************************
	 * Dropdown menu for language selection
	 */
	
	$('.languageLink').click(function(e) {
		var form = $(this).parents('form:first');
		form.submit();
	});
	
});
