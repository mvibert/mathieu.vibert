<?php

/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * compulsory line to prevent the user from executing the code of this source file
	 * by direct access
	 */

	defined ('ROOT') or die('Restricted access');
	
/////////////////////////////////////////////////////////////////////////////////////////

?>

				<div class="row" id="cvPicture">
					<div class="col text-center">
						<h1>
							<b>
							<?php
								$jobTitle = $translations['jobTitle'];
								$beginningTimestamp = mktime(0, 0, 0, 2, 28, 2011);
								$duration = intval(date('Y')) - intval(date('Y', $beginningTimestamp));
								// remove the current year while the anniversary (28th February) has not occurred yet
								if (intval(date('n')) < intval(date('n', $beginningTimestamp))
										|| (intval(date('n')) == intval(date('n', $beginningTimestamp))
											&& intval(date('j')) < intval(date('j', $beginningTimestamp)))) {
									$duration--;
								}
								$jobTitle = str_replace('#NB_YEARS#', $duration, $jobTitle);
								echo $jobTitle;
							?>
							</b>
						</h1>
    					<img src="pictures/id-picture.jpg" class="img-fluid" alt="<?php echo $name; ?>" title="<?php echo $name; ?>" id="idPicture"/>
    					<div>
    						<h3><b><?php echo $name; ?></b></h3>
    						
    						<a href="mailto:<?php echo $email; ?>">
    							<?php echo $email; ?>
    						</a><br/>
    								
    						<?php
								$birthdate = $translations['birthdate'];
								$dateParts = array();
								preg_match('#([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})#', $birthdate, $dateParts);
								// the birthdate is written DD/MM/YYYY in French and MM/DD/YYYY in English
								if ($_SESSION['lang'] == 'english') {
									$birthMonth = intval($dateParts[1]);
									$birthDay   = intval($dateParts[2]);
								} else {
									$birthDay   = intval($dateParts[1]);
									$birthMonth = intval($dateParts[2]);
								}
								$birthYear = intval($dateParts[3]);
								$duration = intval(date('Y')) - $birthYear;
								// remove the current year while the birthday has not occurred yet
								if (intval(date('n')) < $birthMonth
										|| (intval(date('n')) == $birthMonth && intval(date('j')) < $birthDay)) {
									$duration--;
								}
								$birthdate = str_replace('#NB_YEARS#', $duration, $birthdate);
								echo $birthdate;
    						?><br/>
    					</div>
    				</div>
				</div>

<?php
	
?>
