<?php

/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * compulsory line to prevent the user from executing the code of this source file
	 * by direct access
	 */

	defined ('ROOT') or die('Restricted access');
	
/////////////////////////////////////////////////////////////////////////////////////////

?>

				<div id="homeContent" class="col">
					<div>
						<div class="text-center text-primary commonSectionToggle" id="homePresentation" data-toggle="collapse" data-target="#homeSection" role="button" aria-expanded="true" aria-controls="homeSection">
							<h3 class="commonPartTitle"><?php echo $translations['homePresentation']; ?></h3>
						</div>
						<div class="collapse show" id="homeSection">
							<?php echo $translations['homeMessage']; ?>
						</div>
					</div>
				</div>
				
<?php
	
?>
