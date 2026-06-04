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

			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="<?php echo urlWithPath('/') ?>">Mathieu Vibert</a>
						<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#topMenu"
							 aria-controls="topMenu" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="topMenu">
						<ul class="navbar-nav">
						
						<?php
						
							foreach ( $contents as $item ) {
							?>
							
							<li class="nav-item<?php if ($path == $item) {echo ' active';} ?>">
								<a class="nav-link" href="<?php echo urlWithPath('/?'.$item) ?>" title="<?php echo $titles [$item]; ?>"><b><?php
									echo $titles[$item];
								?></b></a>
							</li>
									
							<?php
							}
						
						?>
						
						</ul>
						<ul class="navbar-nav my-lg-0" id="languages">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="languagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<?php echo $translations ['language']; ?> <span class="caret"></span>
								</a>
								<ul class="dropdown-menu" aria-labelledby="languagesDropdown">
							
								<?php
								
									foreach ( $languages as $language ) {
				
										?>
										
										<li class="languageLinks">
											<form id="<?php echo $language ?>LanguageForm" method="post" action="">
												<div class="media">
													<input type="hidden" name="language" value="<?php echo $language ?>"/>
													<div class="media-left media-middle">
														<a class="languageLink" href="#">
															<img class="languageFlag" src="flags/<?php echo $language ?>Flag.gif"
																alt="<?php echo $language ?>"
																title="<?php echo $translations [$language]; ?>"
																onmouseout="this.style.opacity=1;this.filter='alpha(opacity=100)'"
																onmouseover="this.style.opacity=0.6;this.filter='alpha(opacity=60)'" />
														</a>
													</div>
													<div class="media-body text-center">
														<a class="languageLink" href="#">
															<button class="btn btn-primary"><?php echo $translations [$language]; ?></button>
														</a>
													</div>
												</div>
											</form>
										</li>
										
										<?php
								
									}
								
								?>
								
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			
<?php

?>
