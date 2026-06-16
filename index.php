<?php

// ///////////////////////////////////////////////////////////////////////////////////////

/**
 * compulsory line to prevent the user from executing the code of the other source files
 * by direct access
 */
define ( 'ROOT', 1 );

// ///////////////////////////////////////////////////////////////////////////////////////

include ('arrays/common.php');
include ('arrays/summary.php');
include ('arrays/cvInfo.php');
include ('arrays/externalLinks.php');
include ('inc/htmlFacilities.inc.php');
include ('inc/databaseConfig.inc.php');
include ('inc/testFunctions.inc.php');

$pathFound = false;

foreach ( $contents as $content => $sections ) {
	if (isset ( $_GET [$content] )) {
		$path = $content;
		$pathFound = true;
		break;
	}
}

if (!$pathFound) {
	$path = 'home';
}

session_start();

if (isset ( $_GET ['lang'] )) {
	if (in_array ( $_GET ['lang'], $languages )) {
		$_SESSION ['lang'] = $_GET ['lang'];
	}
}

if (isset ( $_POST ['language'] )) {
	if (in_array ( $_POST ['language'], $languages )) {
		$_SESSION ['lang'] = $_POST ['language'];
	}
}

if (! isset ( $_SESSION ['lang'] )) {
	$_SESSION ['lang'] = 'french';
}

include ('lang/' . $_SESSION ['lang'] . '.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <title><?php echo $translations['websiteTitle'] ?> - <?php echo $titles[$path] ?></title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="Author" content="Mathieu Vibert" />
        <meta name="google-site-verification" content="31WjSjE0z_ROPN878EZGjP0Jy6aWUQJ3r3kIhSPWC1Q" />
        <meta name="keywords" content="Mathieu Vibert informatique CV" />
        <meta name="description" content="Profil de Mathieu Vibert - Ing&eacute;nieur Etude et D&eacute;veloppement" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- JQuery -->
        <script type="text/javascript" xml:space="preserve" src="frameworks/jquery/jquery-2.1.4.min.js"></script>
        
        <!-- Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,300,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="frameworks/bootstrap/css/bootstrap.min.css" />
        <!-- <link rel="stylesheet" type="text/css" href="frameworks/bootstrap/css/bootstrap-theme.min.css" /> -->
        <script type="text/javascript" xml:space="preserve" src="frameworks/bootstrap/js/bootstrap.min.js"></script>
        
        <!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

        <!-- CSS specific file -->
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
        
        <!-- JS specific file -->
        <script type="text/javascript" src="js/site.js"></script>
        
        <?php
        include ('contents/seo_google.php');
        ?>

	</head>
    <body data-spy="scroll" data-target=".navbar" data-offset="80" id="page-top">
    	<div id="global">
    
    			<?php
    			
    			include ('contents/header.php');
    			
    			?>
    
    			<div id="content" class="content">
    				<div class="container-fluid">
    					<div class="row">
        					<div class="col">
        						<h1 id="contentTitle" class="text-center"><?php echo $titles [$path]?></h1>
        			
        						<?php
        						
				    			include ('contents/identity.php');
        						include ('contents/' . $path . '.php');
        						
        						?>
        					</div>
    					</div>
    					<div class="row">
        					<?php
        					
        					include ('contents/summary.php');
        					
        					?>
    					</div>
    				</div>
    			</div>
    
    			<?php
    			
    			include ('contents/footer.php');
    			
    			?>
    
    		</div>
    </body>
</html>
