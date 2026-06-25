<?php

// ///////////////////////////////////////////////////////////////////////////////////////

/**
 * compulsory line to prevent the user from executing the code of this source file
 * by direct access
 */
defined('ROOT') or die('Restricted access');

// ///////////////////////////////////////////////////////////////////////////////////////

$companies = array(
    'Meritis',
    'Thess',
    'Ausy',
    'Prosodie',
    'Intitek',
    'GFI',
    'Ul'
);

$contents = array(
    'home' => array('homePresentation', 'homeContact'),
    'cv' => array('cvWorkExperience', 'cvEducation', 'cvComputerSkills', 'cvAdditionalInformation', 'homeContact'),
);

$languages = array(
    'english',
    'french'
);

$name = 'Mathieu Vibert';
$email = 'mathieu.f.vibert@gmail.com';

$networks = array(
    'LinkedIn' => 'fa-linkedin',
    'Viadeo'   => 'fa-viadeo-square'
);

// The summary data lives in its own file : arrays/summary.php

?>
