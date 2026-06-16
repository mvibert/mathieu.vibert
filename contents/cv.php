<?php

/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * compulsory line to prevent the user from executing the code of this source file
	 * by direct access
	 */

	defined ('ROOT') or die('Restricted access');
	
/////////////////////////////////////////////////////////////////////////////////////////

?>

				<div class="row">
					<div class="col-12">
						<div class="text-center cvControls">
							<button type="button" id="cvExpandAllSections" class="btn btn-primary"><?php echo $translations['cvExpandAllSections']; ?></button>
							<button type="button" id="cvCollapseAllSections" class="btn btn-primary"><?php echo $translations['cvCollapseAllSections']; ?></button>
						</div>
        				<div class="row">
        					<div class="col-12">
        						<div class="card border-primary">
        							<div class="strip card-header text-white bg-primary text-center cvSectionToggle" id="cvWorkExperience" data-toggle="collapse" data-target="#cvSectionWorkExperience" role="button" aria-expanded="true" aria-controls="cvSectionWorkExperience">
        								<h3 class="cvPartTitle"><?php echo $translations['cvWorkExperience']?></h3>
        							</div>
        							<div class="card-body cvSectionBody collapse show" id="cvSectionWorkExperience">
										<div class="text-center cvControls">
											<button type="button" id="cvWorkExpandAll" class="btn btn-primary"><?php echo $translations['cvWorkExpandAll']; ?></button>
											<button type="button" id="cvWorkCollapseAll" class="btn btn-primary"><?php echo $translations['cvWorkCollapseAll']; ?></button>
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
        							<div class="strip card-header text-white bg-primary text-center cvSectionToggle" id="cvEducation" data-toggle="collapse" data-target="#cvSectionEducation" role="button" aria-expanded="true" aria-controls="cvSectionEducation">
        								<h3 class="cvPartTitle"><?php echo $translations['cvEducation']; ?></h3>
        							</div>
        							<div class="card-body cvSectionBody collapse show" id="cvSectionEducation">
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
        							<div class="strip card-header text-white bg-primary text-center cvSectionToggle" id="cvComputerSkills" data-toggle="collapse" data-target="#cvSectionComputerSkills" role="button" aria-expanded="true" aria-controls="cvSectionComputerSkills">
        								<h3 class="cvPartTitle"><?php echo $translations['cvComputerSkills']; ?></h3>
        							</div>
        							<div class="card-body cvSectionBody collapse show" id="cvSectionComputerSkills">
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
													array('name' => 'J2EE',       'level' => 90),
													array('name' => 'AngularJS',  'level' => 50)
												)),
												array('title' => $translations['cvFrameworks'], 'skills' => array(
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
        					<div class="col-12">
        						<div class="card border-primary">
        							<div class="strip card-header text-white bg-primary text-center cvSectionToggle" id="cvAdditionalInformation" data-toggle="collapse" data-target="#cvSectionAdditionalInformation" role="button" aria-expanded="true" aria-controls="cvSectionAdditionalInformation">
        								<h3 class="cvPartTitle"><?php echo $translations['cvAdditionalInformation']; ?></h3>
        							</div>
        							<div class="card-body cvSectionBody collapse show" id="cvSectionAdditionalInformation">
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
