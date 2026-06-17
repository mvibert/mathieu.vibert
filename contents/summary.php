<?php

/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * compulsory line to prevent the user from executing the code of this source file
	 * by direct access
	 */

	defined ('ROOT') or die('Restricted access');
	
/////////////////////////////////////////////////////////////////////////////////////////

	include('arrays/externalLinks.php');
	
?>
	
			<div class="col" id="summary">
				<div class="text-center">
					<div class=" text-primary commonSectionToggle" id="summaryTitle" data-toggle="collapse" data-target="#summarySection" role="button" aria-expanded="true" aria-controls="summarySection">
						<h3 class="commonPartTitle"><?php echo $translations['summaryTitle']; ?></h3>
					</div>
					<div class="collapse show" id="summarySection">
						<?php
						
							foreach ( $summary as $key => $part ) {
								displaySummaryPart(summaryPartTitle($key), $part['signs']);
							}
						
						?>
					</div>
				</div>
			</div>
			
<?php

?>
