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
        							<div class="strip card-header text-white bg-primary text-center cvSectionToggle" data-toggle="collapse" data-target="#cvSectionWorkExperience" role="button" aria-expanded="true" aria-controls="cvSectionWorkExperience">
        								<h3 class="cvPartTitle"><?php echo $translations['cvWorkExperience']?></h3>
        							</div>
        							<div class="collapse show" id="cvSectionWorkExperience">
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
        					</div>
        					<div class="col-12">
        						<div class="card border-primary">
        							<div class="strip card-header text-white bg-primary text-center cvSectionToggle" data-toggle="collapse" data-target="#cvSectionEducation" role="button" aria-expanded="true" aria-controls="cvSectionEducation">
        								<h3 class="cvPartTitle"><?php echo $translations['cvEducation']; ?></h3>
        							</div>
        							<div class="collapse show" id="cvSectionEducation">
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
        					</div>
        					<div class="col-12">
        						<div class="card border-primary">
        							<div class="strip card-header text-white bg-primary text-center cvSectionToggle" data-toggle="collapse" data-target="#cvSectionComputerSkills" role="button" aria-expanded="true" aria-controls="cvSectionComputerSkills">
        								<h3 class="cvPartTitle"><?php echo $translations['cvComputerSkills']; ?></h3>
        							</div>
        							<div class="collapse show" id="cvSectionComputerSkills">
										<div class="card-body">
											<?php
												// Each skill is array('name' => label, 'level' => percentage 0-100).
												// Levels default to 100 (max) : adjust each one manually as needed.
												$computerSkills = array(
													array('title' => summaryPartTitle('summarySoftwareProgramming'), 'skills' => array(
														array('name' => 'Java', 'level' => 90)
													)),
													array('title' => summaryPartTitle('summaryWebProgramming'), 'skills' => array(
														array('name' => 'XHTML',      'level' => 70),
														array('name' => 'JavaScript', 'level' => 70),
														array('name' => 'CSS',        'level' => 70),
														array('name' => 'JQuery',     'level' => 60),
														array('name' => 'Bootstrap',  'level' => 70),
														array('name' => 'PHP',        'level' => 50),
														array('name' => 'ASP.Net',    'level' => 30),
														array('name' => 'J2EE',       'level' => 90),
														array('name' => 'AngularJS',  'level' => 50)
													)),
													array('title' => $translations['cvFrameworks'], 'skills' => array(
														array('name' => '.Net',      'level' => 30),
														array('name' => 'Hibernate', 'level' => 80),
														array('name' => 'Spring',    'level' => 90),
														array('name' => 'Thymeleaf', 'level' => 80)
													)),
													array('title' => summaryPartTitle('summaryDBMS'), 'skills' => array(
														array('name' => 'MySQL',      'level' => 90),
														array('name' => 'Oracle',     'level' => 90),
														array('name' => 'PostgreSQL', 'level' => 90),
														array('name' => 'SQLServer',  'level' => 80),
														array('name' => 'IBM Db2',    'level' => 90),
														array('name' => 'MongoDB',    'level' => 80)
													)),
													array('title' => summaryPartTitle('summaryVCS'), 'skills' => array(
														array('name' => 'Git', 'level' => 90),
														array('name' => 'SVN', 'level' => 90)
													)),
													array('title' => $translations['cvDesign'], 'skills' => array(
														array('name' => 'Merise', 'level' => 80),
														array('name' => 'UML',    'level' => 80)
													)),
													array('title' => $translations['cvOS'], 'skills' => array(
														array('name' => 'Windows', 'level' => 90),
														array('name' => 'Linux',   'level' => 70)
													))
												);
											?>
											<div class="row">
												<?php foreach ( $computerSkills as $skillGroup ) { ?>
												<div class="col-md-6 cvSkillGroup">
													<h5 class="cvSkillGroupTitle text-primary"><?php echo $skillGroup['title']; ?></h5>
													<?php foreach ( $skillGroup['skills'] as $skill ) { ?>
													<div class="cvSkill">
														<div class="cvSkillLabel"><?php echo $skill['name']; ?></div>
														<div class="progress cvSkillProgress">
															<div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $skill['level']; ?>%" aria-valuenow="<?php echo $skill['level']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<?php } ?>
												</div>
												<?php } ?>
											</div>
										</div>
        							</div>
        						</div>
        					</div>
        					<div class="col-12">
        						<div class="card border-primary">
        							<div class="strip card-header text-white bg-primary text-center cvSectionToggle" data-toggle="collapse" data-target="#cvSectionAdditionalInformation" role="button" aria-expanded="true" aria-controls="cvSectionAdditionalInformation">
        								<h3 class="cvPartTitle"><?php echo $translations['cvAdditionalInformation']; ?></h3>
        							</div>
        							<div class="collapse show" id="cvSectionAdditionalInformation">
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
				</div>

<?php
	
?>
