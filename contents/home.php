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
					<div class="card border-primary">
						<div class="strip card-header text-white text-center bg-primary commonSectionToggle" id="homePresentation" data-toggle="collapse" data-target="#homeSection" role="button" aria-expanded="true" aria-controls="homeSection">
							<h3 class="commonPartTitle"><?php echo $translations['homePresentation']; ?></h3>
						</div>
						<div class="card-body collapse show" id="homeSection">
							<?php echo $translations['homeMessage']; ?>
						</div>
					</div>
				</div>
				
<?php
	
?>
