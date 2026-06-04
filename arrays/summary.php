<?php

// ///////////////////////////////////////////////////////////////////////////////////////

/**
 * compulsory line to prevent the user from executing the code of this source file
 * by direct access
 */
defined('ROOT') or die('Restricted access');

// ///////////////////////////////////////////////////////////////////////////////////////

/**
 * Single source of truth for the summary displayed on every page.
 *
 * Each entry of $summary is one section of the summary and holds:
 *   'title' => the section heading, translated per language ('english' / 'french')
 *   'signs' => the elements of the section, each one being:
 *              'key' => array('Label', 'external-domain.com')
 *
 * The 'key' is also the name of the icon expected in pictures/signs/<key>Sign.png
 *
 * ---------------------------------------------------------------------------------------
 * TO ADD A NEW ELEMENT to an existing section:
 *   1. add one line in the 'signs' array of that section : 'key' => array('Label', 'link')
 *   2. drop the icon pictures/signs/<key>Sign.png
 *
 * TO ADD A NEW SECTION:
 *   1. add a new $summary[...] entry below with its bilingual 'title' and its 'signs'
 *   (nothing else to edit : the language files no longer need to be touched)
 * ---------------------------------------------------------------------------------------
 */

$summary['summarySoftwareProgramming'] = array(
    'title' => array(
        'english' => 'Software programming',
        'french'  => 'Programmation logicielle'
    ),
    'signs' => array(
        'ada'    => array('Ada', 'www.adacore.com'),
        'c'      => array('C', 'www.cprogramming.com'),
        'java'   => array('Java', 'www.java.com/fr'),
        'csharp' => array('C#', 'docs.microsoft.com/fr-fr/dotnet/csharp')
    )
);

$summary['summaryWebProgramming'] = array(
    'title' => array(
        'english' => 'Web programming',
        'french'  => 'Programmation web'
    ),
    'signs' => array(
        'xhtml'      => array('XHTML', 'www.w3.org'),
        'javaScript' => array('JavaScript', 'www.editeurjavascript.com'),
        'css'        => array('CSS', 'www.w3schools.com/css'),
        'php'        => array('PHP', 'fr.php.net'),
        'aspnet'     => array('ASP.NET', 'www.asp.net'),
        'j2ee'       => array('J2EE', 'www.oracle.com/technetwork/java/javaee/overview/index.html'),
        'angular'    => array('Angular', 'angular.io')
    )
);

$summary['summaryDBMS'] = array(
    'title' => array(
        'english' => 'DBMS',
        'french'  => 'SGBD'
    ),
    'signs' => array(
        'oracle'     => array('Oracle', 'www.oracle.com'),
        'sqlServer'  => array('Microsoft SQL Server', 'docs.microsoft.com/en-us/sql/sql-server/sql-server-technical-documentation'),
        'mysql'      => array('MySQL', 'dev.mysql.com/doc/refman'),
        'postgreSql' => array('PostgreSQL', 'www.postgresql.org'),
        'db2z'       => array('Db2 for z/OS', 'www.ibm.com/fr-fr/products/db2-for-zos')
    )
);

$summary['summaryVCS'] = array(
    'title' => array(
        'english' => 'Version control systems',
        'french'  => 'Syst&egrave;mes de gestion de version'
    ),
    'signs' => array(
        'git' => array('Git', 'git-scm.com'),
        'svn' => array('SVN', 'subversion.apache.org')
    )
);

$summary['summaryOS'] = array(
    'title' => array(
        'english' => 'Operating systems',
        'french'  => 'Syst&egrave;mes d\'exploitation'
    ),
    'signs' => array(
        'gnuLinux' => array('GNU/Linux', 'www.gnu.org/gnu/linux-and-gnu.fr.html'),
        'windows'  => array('Windows', 'msdn.microsoft.com/fr-fr/windows/default')
    )
);

$summary['summaryEducation'] = array(
    'title' => array(
        'english' => 'Education',
        'french'  => 'Enseignement'
    ),
    'signs' => array(
        'dalzon'   => array('Institut Emmanuel d\'Alzon', 'www.dalzon.com'),
        'polytech' => array('Polytech Montpellier', 'www.polytech.univ-montp2.fr')
    )
);

$summary['summaryCompanies'] = array(
    'title' => array(
        'english' => 'Companies',
        'french'  => 'Entreprises'
    ),
    'signs' => array(
        'ul'       => array('University of Limerick', 'www.ul.ie'),
        'gfi'      => array('GFI Progiciels', 'www.gfi.fr'),
        'intitek'  => array('Intitek', 'www.intitek.fr'),
        'prosodie' => array('Prosodie', 'www.prosodie.com'),
        'ausy'     => array('Ausy', 'www.ausy.fr/fr'),
        'thess'    => array('Thess', 'www.thess-corp.fr'),
        'meritis'  => array('Meritis', 'meritis.fr/')
    )
);

?>
