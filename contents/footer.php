<?php

/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * compulsory line to prevent the user from executing the code of this source file
	 * by direct access
	 */

	defined ('ROOT') or die('Restricted access');
	
/////////////////////////////////////////////////////////////////////////////////////////

?>
	

			<div class="text-center col">
				<div id="contact" class="card border-primary">
					<div class="strip card-header text-white bg-primary commonSectionToggle" id="homeContact" data-toggle="collapse" data-target="#contactSection" role="button" aria-expanded="true" aria-controls="contactSection">
						<h3 class="commonPartTitle"><?php echo $translations['homeContact']?></h3>
					</div>
					<div class="card-body col-sm-12 text-center collapse show" id="contactSection">

						<?php
							foreach ( $networks as $networkTitle => $class ) {
								displayNetworkSign($networkTitle, $class);
							}
						?>

						<a class="btn btn-light" href="mailto:<?php echo $email; ?>" target="_blank">
							<i class="fas fa-envelope fa-3x text-primary"></i>
						</a>
					</div>
				</div>
			</div>
			
			<div class="text-center col">
    			<div class="card">
    				<div id="footer" class="card-header text-white bg-primary row">
						<div class="col-md-6 text-center">
							<h6>
								<?php echo $translations['footerWebSiteDevelopedBy'] ?> <a href="http://vibert.mathieu.free.fr/?cv"><?php echo $name; ?></a>
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
