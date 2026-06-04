<?php

/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * compulsory line to prevent the user from executing the code of this source file
	 * by direct access
	 */

	defined ('ROOT') or die('Restricted access');
	
/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * Shows the content of an array while doing some tests
	 * 
	 * @param $array The array displayed for the tests
	 */
	function printArray($array) {
		echo '<pre>';
		print_r($array);
		echo '</pre>';
	}
	
/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * Shows a text in a page to make a test
	 * 
	 * @param $text The text displayed to make a test
	 */
	function printText($text) {
		echo $text.'<br/>';
	}
	
/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * Shows the link to the home page
	 */
	function printHomePageLink() {
		?>
			
		<br/>
		<a href="<?php echo urlWithPath('/') ?>">Go back to the home page</a>
		<p/>
			
		<?php
	}
	
?>
