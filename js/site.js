$(document).ready(function() {	
	
	/***************************************************************************
	 * Dropdown menu for language selection
	 */
	
	$('.languageLink').click(function(e) {
		var form = $(this).parents('form:first');
		form.submit();
	});

	/***************************************************************************
	 * Expand / collapse all the work experience entries on the CV page
	 */

	$('#cvExpandAll').click(function() {
		$('.cvWorkBody').collapse('show');
	});

	$('#cvCollapseAll').click(function() {
		$('.cvWorkBody').collapse('hide');
	});

});
