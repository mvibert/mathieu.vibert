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
					<div class="card-body col-sm-12 text-center">
						<a class="btn btn-light" href="mailto:<?php echo $email; ?>" target="_blank">
							<i class="fas fa-envelope fa-3x text-primary"></i>
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
    				<div id="footer" class="card-header text-white bg-primary row">
						<div class="col-md-6 text-center">
							<h6>
								<?php echo $translations['footerWebSiteDevelopedBy'] ?> <a href="http://vibert.mathieu.free.fr/?cv">Mathieu Vibert</a>
							</h6>
    					</div>
						<div class="col-md-6 text-center">
							<h6>Copyright &copy; 2010 - <?php echo date("Y"); ?>. <?php echo $translations['footerAllRightsReserved'] ?></h6>
    					</div>
    				</div>
				</div>
			</div>
	
<?php

?>
