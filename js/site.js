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

	$('#cvWorkExpandAll').click(function() {
		$('.cvWorkBody').collapse('show');
	});

	$('#cvWorkCollapseAll').click(function() {
		$('.cvWorkBody').collapse('hide');
	});

	/***************************************************************************
	 * Expand / collapse all the sections on the CV page
	 */

	$('#cvExpandAllSections').click(function() {
		$('.cvSectionBody').collapse('show');
	});

	$('#cvCollapseAllSections').click(function() {
		$('.cvSectionBody').collapse('hide');
	});

});
