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
				<div class="card text-center text-white border-primary pull-left">
					<div class="card-header bg-primary"><?php echo $translations['summaryTitle']; ?></div>
					<div class="card-body">
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
