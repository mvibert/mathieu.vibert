<?php

/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * compulsory line to prevent the user from executing the code of this source file
	 * by direct access
	 */

	define ('ROOT', 1);

/////////////////////////////////////////////////////////////////////////////////////////

	include ('../arrays/common.php');
	include ('../arrays/cvInfo.php');

	if (isset($_GET['extension']) && array_key_exists($_GET['extension'], $mimeTypes)
		&& isset($_GET['file'])) {
		$fileName = $_GET['file'];
		$scriptPath = $_SERVER['SCRIPT_FILENAME'];
		$endScriptDirectory = strpos($scriptPath, '/', 1);
		
		while ($endScriptDirectory < strlen($scriptPath) && $endScriptDirectory != false) {
			$previousIndex = $endScriptDirectory;
			$endScriptDirectory = strpos($scriptPath, '/', $endScriptDirectory + 1);
		}
		
		$scriptDirectory = substr($scriptPath, 0, $previousIndex);
		$file = $scriptDirectory.'/'.$fileName.'.'.$_GET['extension'];
		$simpleFileName = substr($file, $previousIndex + 1);
		
		if(file_exists($file)) {
			header('Content-disposition: attachment; filename='.$simpleFileName);
			header('Content-type: '.$mimeTypes[$_GET['extension']]);
			readfile($file);
		}
	}
	
?>
