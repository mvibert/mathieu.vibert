<?php

/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * compulsory line to prevent the user from executing the code of this source file
	 * by direct access
	 */

	defined ('ROOT') or die('Restricted access');
	
/////////////////////////////////////////////////////////////////////////////////////////

	displayCvFilesLinks();
	
?>

				<div class="row" id="cvPicture">
					<div class="col text-center">
						<h1>
							<b>
							<?php
								$cvTitle = $translations['cvTitle'];
								$beginningTimestamp = mktime(0, 0, 0, 2, 28, 2011);
								$duration = intval(date('Y')) - intval(date('Y', $beginningTimestamp));
								// remove the current year while the anniversary (28th February) has not occurred yet
								if (intval(date('n')) < intval(date('n', $beginningTimestamp))
										|| (intval(date('n')) == intval(date('n', $beginningTimestamp))
											&& intval(date('j')) < intval(date('j', $beginningTimestamp)))) {
									$duration--;
								}
								$cvTitle = str_replace('#NB_YEARS#', $duration, $cvTitle);
								echo $cvTitle;
							?>
							</b>
						</h1>
    					<img src="pictures/id-picture.jpg" class="img-fluid" alt="Mathieu Vibert" title="Mathieu Vibert" id="idPicture"/>
    					<div>
    						<h3><b><?php echo $name; ?></b></h3>
    						
    						<a href="mailto:<?php echo $email; ?>">
    							<?php echo $email; ?>
    						</a><br/>
    								
    						<?php
								$birthDate = $translations['cvBirthdate'];
								$dateParts = array();
								preg_match('#([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})#', $birthDate, $dateParts);
								// the birthdate is written DD/MM/YYYY in French and MM/DD/YYYY in English
								if ($_SESSION['lang'] == 'english') {
									$birthMonth = intval($dateParts[1]);
									$birthDay   = intval($dateParts[2]);
								} else {
									$birthDay   = intval($dateParts[1]);
									$birthMonth = intval($dateParts[2]);
								}
								$birthYear = intval($dateParts[3]);
								$duration = intval(date('Y')) - $birthYear;
								// remove the current year while the birthday has not occurred yet
								if (intval(date('n')) < $birthMonth
										|| (intval(date('n')) == $birthMonth && intval(date('j')) < $birthDay)) {
									$duration--;
								}
								$birthDate = str_replace('#NB_YEARS#', $duration, $birthDate);
								echo $birthDate;
    						?><br/>
    					</div>
    				</div>
				</div>
					
				<div class="row">
					<div class="col-12">
        				<div class="row">
        					<div class="col-12">
        						<div class="card border-primary">
        							<div class="strip card-header text-white bg-primary text-center">
        								<h3 class="cvPartTitle"><?php echo $translations['cvWorkExperience']?></h3>
        							</div>
        							<div class="text-center cvWorkControls">
        								<button type="button" id="cvExpandAll" class="btn btn-sm btn-outline-primary"><?php echo $translations['cvExpandAll']; ?></button>
        								<button type="button" id="cvCollapseAll" class="btn btn-sm btn-outline-primary"><?php echo $translations['cvCollapseAll']; ?></button>
        							</div>
        							<ul class="list-group list-group-flush">
        								<?php
        									foreach ( $companies as $index => $company ) {
        										$bodyId = 'cvWork'.$company.'Body';
        										$collapseClass = ($index == 0) ? 'collapse show' : 'collapse';
        										$ariaExpanded = ($index == 0) ? 'true' : 'false';
        								?>
                							<li class="list-group-item border-primary">
                								<div class="row">
                									<div class="col"></div>
                									<div class="col-10">
                        								<a class="cvWorkToggle" data-toggle="collapse" href="#<?php echo $bodyId; ?>" role="button" aria-expanded="<?php echo $ariaExpanded; ?>" aria-controls="<?php echo $bodyId; ?>">
                        								<div class="row">
                        									<b><?php echo $translations['cvWork'.$company.'Role']; ?></b>
                        								</div>
                        								<div class="row">
                        									<b><?php echo $translations['cvWork'.$company.'Company']; ?></b>
                        								</div>
                        								<div class="row text-secondary">
                        									<?php
																$companiesDates = $translations['cvWork'.$company.'Dates'];
																$beginningYear = intval(substr($companiesDates, 0, 4));
																$currentYear = intval(date('Y'));
																$duration = $currentYear - $beginningYear;
																$companiesDates = str_replace('#NB_YEARS#', $duration, $companiesDates);
																echo $companiesDates;
															?>
                        								</div>
                        								</a>
                        								<div class="cvWorkBody <?php echo $collapseClass; ?>" id="<?php echo $bodyId; ?>">
															<div class="row">
																<?php echo $translations['cvWork'.$company.'Description']; ?>
															</div>
															<?php
																	if (isset($translations['cvWork'.$company.'DescriptionEnd'])) {
																		?>
																		
															<div class="row">
																<?php echo $translations['cvWork'.$company.'DescriptionEnd']; ?>
															</div>
																
																		<?php
																	}
																	?>
																	
															<div class="row">
																<b><?php echo $translations['cvWork'.$company.'Environment']; ?></b>
															</div>
                        								</div>
                        							</div>
                    							</div>
                    						</li>
        										
        										<?php
        									}
        								?>
        							</ul>
        						</div>
        					</div>
        					<div class="col-12">
        						<div class="card border-primary">
        							<div class="strip card-header text-white bg-primary text-center">
        								<h3 class="cvPartTitle"><?php echo $translations['cvEducation']; ?></h3>
        							</div>
        							<ul class="list-group list-group-flush">
        								<li class="list-group-item border-primary">
            								<div class="row">
            									<div class="col">
												</div>
            									<div class="col-10">
                    								<div class="row">
                										<b>Professional Scrum Developer 1 (PSD1)</b>
                    								</div>
                    								<div class="row text-secondary">
                    									2023
                    								</div>
                								</div>
            								</div>
        								</li>
        								<li class="list-group-item border-primary">
            								<div class="row">
            									<div class="col">
												</div>
            									<div class="col-10">
                    								<div class="row">
                										<b>Professional Scrum Master 1 (PSM1)</b>
                    								</div>
                    								<div class="row text-secondary">
                    									2019
                    								</div>
                								</div>
            								</div>
        								</li>
            							<li class="list-group-item border-primary">
            								<div class="row">
            									<div class="col">
												</div>
            									<div class="col-10">
                    								<div class="row">
                    									<b><?php echo $translations['cvPolytechDepartment'].', Polytech\'Montpellier'; ?></b>
                    								</div>
                    								<div class="row text-secondary">
                    									2007-2011
                    								</div>
                    								<div class="row">
                    									<?php echo $translations['cvEnglish']; ?> : TOEIC 875 / 990
                    								</div>
                								</div>
            								</div>
        								</li>
        								<li class="list-group-item border-primary">
            								<div class="row">
            									<div class="col">
												</div>
            									<div class="col-10">
                    								<div class="row">
                										<b><?php echo $translations['cvHighSchoolDiploma']; ?></b>
                    								</div>
                    								<div class="row text-secondary">
                    									2005
                    								</div>
                								</div>
            								</div>
        								</li>
        							</ul>
        						</div>
        					</div>
        					<div class="col-12">
        						<div class="card border-primary">
        							<div class="strip card-header text-white bg-primary text-center">
        								<h3 class="cvPartTitle"><?php echo $translations['cvComputerSkills']; ?></h3>
        							</div>
        							<ul class="list-group list-group-flush">
        								<li class="list-group-item border-primary">
            								<div class="row">
            									<div class="col"><?php echo summaryPartTitle('summarySoftwareProgramming'); ?></div>
            									<div class="col-10"><b>Java</b></div>
            								</div>
            							</li>
        								<li class="list-group-item border-primary">
            								<div class="row">
            									<div class="col"><?php echo summaryPartTitle('summaryWebProgramming'); ?></div>
            									<div class="col-10"><b>XHTML, JavaScript, CSS, JQuery, Bootstrap, PHP, ASP.Net, J2EE, AngularJS</b></div>
            								</div>
            							</li>
        								<li class="list-group-item border-primary">
            								<div class="row">
            									<div class="col"><?php echo $translations['cvFrameworks']; ?></div>
            									<div class="col-10"><b>.Net, Hibernate, Spring, Thymeleaf</b></div>
            								</div>
            							</li>
        								<li class="list-group-item border-primary">
            								<div class="row">
            									<div class="col"><?php echo summaryPartTitle('summaryDBMS'); ?></div>
            									<div class="col-10"><b>MySQL, Oracle, PostgreSQL, SQLServer, IBM Db2, MongoDB</b></div>
            								</div>
            							</li>
        								<li class="list-group-item border-primary">
            								<div class="row">
            									<div class="col"><?php echo summaryPartTitle('summaryVCS'); ?></div>
            									<div class="col-10"><b>Git, SVN</b></div>
            								</div>
            							</li>
        								<li class="list-group-item border-primary">
            								<div class="row">
            									<div class="col"><?php echo $translations['cvDesign']; ?></div>
            									<div class="col-10">Merise, UML</div>
            								</div>
            							</li>
        								<li class="list-group-item border-primary">
            								<div class="row">
            									<div class="col"><?php echo $translations['cvOS']; ?></div>
            									<div class="col-10">Windows, Linux</div>
            								</div>
            							</li>
        							</div>
        						</ul>
        					</div>
        					<div class="col-12">
        						<div class="card border-primary">
        							<div class="strip card-header text-white bg-primary text-center">
        								<h3 class="cvPartTitle"><?php echo $translations['cvAdditionalInformation']; ?></h3>
        							</div>
        							<div class="card-body">
        								<div class="row">
        									<div class="col"></div>
        									<div class="col-10"><?php echo $translations['cvDrivingLicence']; ?></div>
        								</div>
        							</div>
        						</div>
        					</div>
        				</div>
					</div>
				</div>

<?php
	
?>
