<?php

/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * compulsory line to prevent the user from executing the code of this source file
	 * by direct access
	 */

	defined ('ROOT') or die('Restricted access');

/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * Tests if the current page is on the server
	 *
	 * @return true if the page is on the server, false else
	 */
	function isRemote() {
		if (preg_match('#wamp#', realpath(''))) {
			return false;
		}
		else {
			return true;
		}
	}

/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * Adds a path to the page if the page is on the server
	 *
	 * @param $location The location of a file from root directory of the website
	 * @return The real location of the file including the path
	 */
	function urlWithPath($location) {
		if (!isRemote()) {
			$location = '/vibert.mathieu'.$location;
		}

		return $location;
	}

/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * Changes with Javascript the location of the web page opened
	 *
	 * @param $location The location of the new web page opened
	 */
	function changeLocation($location) {
		?>

		<script>
			document.location = "<?php echo urlWithPath($location); ?>";
		</script>

		<?php
	}

/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * Redirects the user to an other page given in parameter
	 *
	 * @param $location The location of the page where the user is redirected
	 */
	function redirectTo($location) {
		?>

		<meta http-equiv="refresh"
			content="0; URL=<?php echo urlWithPath($location); ?>"/>

		<?php
	}

/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * Redirects the user to the home page of the web site
	 */
	function redirectToHomePage() {
		?>

<html>
	<head>

		<?php
			redirectTo('/');
		?>

	</head>
	<body>
	</body>
</html>

		<?php
	}

/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * Displays the icon of a Network using its title
	 *
	 * @param $title The title of the network displayed
	 * @param $class The class of the network displayed (used for the icon of the network)
	 */
	function displayNetworkSign($title, $class) {
		global $links;
		global $translations;
		$networkCode = strtolower($title);

		$link = $translations[$networkCode.'Link'];

		?>

						<a class="btn btn-light" href="http://<?php echo $link ?>" title="<?php echo $title ?>" target="_blank">
							<i class="fab <?php echo $class ?> fa-3x text-primary"></i>
						</a>

		<?php

	}

?>
