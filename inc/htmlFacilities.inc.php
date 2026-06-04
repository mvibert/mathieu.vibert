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
	 * Displays a part of the summary using the title of the part
	 * and the signs displayed inside it
	 * 
	 * @param $title The title of the part displayed in the summary
	 * @param $signs The array with the name of the signs displayed
	 */
	function displaySummaryPart($title, $signs) {
		global $links;
		
		?>
		
				<div class="card border-primary">
					<div class="card-header bg-primary"><?php echo $title; ?></div>
					
					<div class="card-body">
		
		<?php
			foreach ( $signs as $sign => $signTitle ) {
       
		?>

						<a href="http://<?php echo $links[$sign] ?>">
							<img src="pictures/signs/<?php echo $sign ?>Sign.png" target="_blank"
								alt="<?php echo $signTitle ?>" title="<?php echo $signTitle ?>"
								onmouseout="this.style.opacity=1;this.filter='alpha(opacity=100)'"
								onmouseover="this.style.opacity=0.6;this.filter='alpha(opacity=60)'"
								/>
						</a>
				
		<?php
		
			}
		
		?>

					</div>
				</div>
		
		<?php
		
	}

/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * Displays the links to the cv files
	 */
	function displayCvFilesLinks() {
		global $cvFormats;
		global $translations;
		
		?>

				<div class="row">
    				<div class="col"></div>
    				<div id="cvFilesLinks" class="col-8">
    					<div class="card border-primary text-center">
    						<div class="card-header text-white bg-primary"><?php echo $translations['cvFileLink']; ?></div>
    						<div class="card-body">
    						
    					<?php
    					
    						foreach ($cvFormats as $format => $formatName) {
    						
    					?>
    			
    							<div class="col-md-12">
    								<a href="files/downloadFile.php?extension=<?php
    											echo $format;
    										?>&amp;file=<?php
    											echo 'cvMathieuVibert_'.$_SESSION['lang'];
    										?>" target="_blank">
    									<button class="btn btn-primary" title="<?php echo $formatName; ?>"><?php echo $formatName; ?></button>
    								</a>
    							</div>
    						
    					<?php
    					
    						}
    					
    					?>
    					
    						</div>
    					</div>
    				</div>
    				<div class="col"></div>
				</div>
		<?php
		
	}

/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * Displays the sign of a Network using its title
	 * 
	 * @param $title The title of the sign displayed
	 */
	function displayNetworkSign($signTitle) {
		global $links;
		global $translations;
		$sign = strtolower($signTitle);
		
		if (array_key_exists($sign, $links)) {
			$link = $links[$sign];
		}
		else {
			$link = $translations[$sign.'Link'];
		}
		
		?>

						<a href="http://<?php echo $link ?>" target="_blank">
							<img src="pictures/signs/<?php echo $sign ?>Sign.png"
								alt="<?php echo $signTitle ?>" title="<?php echo $signTitle ?>"
								onmouseout="this.style.opacity=1;this.filter='alpha(opacity=100)'"
								onmouseover="this.style.opacity=0.6;this.filter='alpha(opacity=60)'"
								/>
						</a>
				
		<?php
		
	}

?>
