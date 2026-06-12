<?php

/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * compulsory line to prevent the user from executing the code of this source file
	 * by direct access
	 */

	defined ('ROOT') or die('Restricted access');
	
/////////////////////////////////////////////////////////////////////////////////////////

?>
	

			<div id="contactAndNetworks" class="col text-center">
				<div id="contact" class="card border-primary">
					<div class="card-header text-white bg-primary"><?php echo $translations['homeContact']?></div>
					<div class="card-body">
						<a href="mailto:<?php echo $email; ?>">
							<?php echo $email; ?>
						</a>
					</div>
				</div>
				<div id="networks" class="card border-primary">
					<div class="card-header text-white bg-primary"><?php echo $translations['homeNetworks']?></div>
					<div class="card-body">
					
						<?php
							foreach ( $networks as $networkTitle ) {
								displayNetworkSign($networkTitle);
							}
						?>

					</div>						
				</div>
			</div>
			
			<div class="text-center col">
    			<div class="card">
    				<div id="footer" class="card-header text-white bg-primary">
    					<div class="text-center">
    						<h6>Copyright &copy; 2010 - <?php echo date("Y"); ?>. <?php echo $translations['footerAllRightsReserved'] ?></h6>
    					</div>
    				</div>
				</div>
			</div>
	
<?php

?>
