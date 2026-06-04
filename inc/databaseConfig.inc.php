<?php

/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * compulsory line to prevent the user from executing the code of this source file
	 * by direct access
	 */

	defined ('ROOT') or die('Restricted access');
	
/////////////////////////////////////////////////////////////////////////////////////////

	// ***************************************************************
	//	TODO			XML CONFIG FUNCTIONS
	// ***************************************************************

	/**
	 * Sets the type of the database in the current session
	 */
	function setDatabaseType() {
		global $settings;
		
		if (!isset($settings['databaseType'])) {
			if (isRemote()) {
				$settings['databaseType'] = 'remote';
			}
			else {
				$settings['databaseType'] = 'local';
			}
		}
	}

/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * Reads the file of the settings of the database to get them in a PHP array
	 * 
	 * @param $fileName The name of the XML file used to get the database settings
	 */
	function setDatabaseConfig($fileName) {
		global $settings;
		
		$fileContent = file_get_contents($fileName);
		$databaseSettings = array('host', 'name', 'user', 'password');
		setDatabaseType();
		
		$pattern = '#<'.$settings['databaseType'].'>';
		
		for ($i = 0; $i < count($databaseSettings); $i ++) {
			$setting = $databaseSettings[$i];
			
			$pattern .= '[^<]*<'.$setting.'>([^<]*)</'.$setting.'>';
		}
		
		$pattern .= '[^<]*</'.$settings['databaseType'].'>#';
		
		preg_match($pattern, $fileContent, $settingValues);
		
		for ($i = 0; $i < count($databaseSettings); $i ++) {
			$setting = $databaseSettings[$i];
			
			$settings[$setting] = $settingValues[$i + 1];
		}
	}
	
/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * Sets the database settings with the default database
	 */
	function setDefaultDatabaseConfig() {
		setDatabaseConfig('admin/databaseSettings.xml');
	}

/////////////////////////////////////////////////////////////////////////////////////////

	// ***************************************************************
	//	TODO			DATABASE CONNECTION FUNCTIONS
	// ***************************************************************

	/**
	 * Tries to connect to the database and returns the current connection
	 * 
	 * @returns The current connection to the database
	 */
	function connectDatabase() {
		global $databaseConnection;
		global $settings;
		
		$databaseLocation = 'mysql:host='.$settings['host'].';dbname='.$settings['name'];
		
		try {
			$databaseConnection = new PDO($databaseLocation, $settings['user'], $settings['password']);
		}
		catch (Exception $error) {
			die('Error while trying to connect to the database : '.$error -> getMessage());
		}
	}

?>
