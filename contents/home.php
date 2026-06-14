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
					<div id="presentation" class="card border-primary">
						<div class="strip card-header text-white text-center bg-primary commonSectionToggle" data-toggle="collapse" data-target="#homeSection" role="button" aria-expanded="true" aria-controls="homeSection">
							<h3 class="commonPartTitle"><?php echo $translations['homePresentation']; ?></h3>
						</div>
						<div class="collapse show" id="homeSection">
							<div class="card-body"><?php
								echo $translations['homeMessage']
							?></div>
						</div>
					</div>
				</div>
				
<?php
	
?>
