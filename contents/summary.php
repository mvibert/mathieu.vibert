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
				<div class="card text-center text-white border-primary pull-left summarySectionToggle" data-toggle="collapse" data-target="#summarySection" role="button" aria-expanded="true" aria-controls="summarySection">
					<div class="card-header bg-primary">
						<h3 class="summaryPartTitle"><?php echo $translations['summaryTitle']; ?></h3>
					</div>
					<div class="collapse show" id="summarySection">
						<div class="card-body">
								<?php
								
									foreach ( $summary as $key => $part ) {
										displaySummaryPart(summaryPartTitle($key), $part['signs']);
									}
								
								?>
						</div>
					</div>
				</div>
			</div>
			
<?php

?>
