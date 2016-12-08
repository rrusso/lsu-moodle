<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This file contains all the defined constants to do with portfolios.
 *
 * @package blocks_course_overview
 * @copyright 2016 Robert Russo, Louisiana State University
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

//EXPORT CAS LINKS

/**
 * CAS LINKS - a list of CAS links as defined by them
 */

// Generics:
define('CMST', 'http://students.lsu.edu/academicsuccess/studying/subjects');
/*
define('AEEE', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('AGEC', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('AGRO', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('ANSC', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('ARCH', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('ART', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('ARTH', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('BADM', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('BLAW', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('CLST', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('CM', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('CMST', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('CPLT', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('DMAE', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('DSM', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('EDCI', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('ELRC', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('ENGL', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('ENGR', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('ENTM', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('ENVS', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('FMA', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('HNRS', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('HORT', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('HRE', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('HUEC', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('ID', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('LA', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('LIBA', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('LIS', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('MC', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('MEDP', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('MGT', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('MKT', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('MUS', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('NFS', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('OCS', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('PADM', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('PBS', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('PLHL', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('POLI', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('RNR', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('SW', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('TAM', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('THTR', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('UNIV', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('UNST', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('VCS', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('VMED', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('WGS', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('LING', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('AAAS', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('AGRI', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('ASST', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('ASTR', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('ATRN', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('BASC', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('CBS', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('CFS', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('EMS', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('EVEG', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('GBUS', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('INTL', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('MILS', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('MUED', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('PHSC', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('REL', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('SSS', 'http://students.lsu.edu/academicsuccess/studying/subjects');
define('LAW', 'http://students.lsu.edu/academicsuccess/studying/subjects');
*/

// Specific links and their corresponding categories sent from CAS
define('ACCT', 'http://students.lsu.edu/academicsuccess/studying/subjects/accounting');
define('ANTH', 'http://students.lsu.edu/academicsuccess/studying/subjects/anthropology');
define('BE', 'http://students.lsu.edu/academicsuccess/studying/subjects/biological-engineering');
define('BIOL', 'http://students.lsu.edu/academicsuccess/studying/subjects/biology');
define('CE', 'http://students.lsu.edu/academicsuccess/studying/subjects/civil-engineering');
define('CHE', 'http://students.lsu.edu/academicsuccess/studying/subjects/chemical-engineering');
define('CHEM', 'http://students.lsu.edu/academicsuccess/studying/subjects/chemistry');
define('COMD', 'http://students.lsu.edu/academicsuccess/studying/subjects/communication-sciences-disorders');
define('CSC', 'http://students.lsu.edu/academicsuccess/studying/subjects/computer-science');
define('ECON', 'http://students.lsu.edu/academicsuccess/studying/subjects/economics');
define('EE', 'http://students.lsu.edu/academicsuccess/studying/subjects/electrical-engineering');
define('FIN', 'http://students.lsu.edu/academicsuccess/studying/subjects/finance');
define('ARAB', 'http://students.lsu.edu/academicsuccess/studying/subjects/foreign-languages');
define('CHIN', 'http://students.lsu.edu/academicsuccess/studying/subjects/foreign-languages');
define('FREN', 'http://students.lsu.edu/academicsuccess/studying/subjects/foreign-languages');
define('GERM', 'http://students.lsu.edu/academicsuccess/studying/subjects/foreign-languages');
define('GREK', 'http://students.lsu.edu/academicsuccess/studying/subjects/foreign-languages');
define('HEBR', 'http://students.lsu.edu/academicsuccess/studying/subjects/foreign-languages');
define('ITAL', 'http://students.lsu.edu/academicsuccess/studying/subjects/foreign-languages');
define('LATN', 'http://students.lsu.edu/academicsuccess/studying/subjects/foreign-languages');
define('SPAN', 'http://students.lsu.edu/academicsuccess/studying/subjects/foreign-languages');
define('GEOG', 'http://students.lsu.edu/academicsuccess/studying/subjects/geography');
define('GEOL', 'http://students.lsu.edu/academicsuccess/studying/subjects/geology');
define('HIST', 'http://students.lsu.edu/academicsuccess/studying/subjects/history');
define('IE', 'http://students.lsu.edu/academicsuccess/studying/subjects/industrial-enginnering');
define('ISDS', 'http://students.lsu.edu/academicsuccess/studying/subjects/isds');
define('KIN', 'http://students.lsu.edu/academicsuccess/studying/subjects/kinesiology');
define('MATH', 'http://students.lsu.edu/academicsuccess/studying/subjects/math');
define('ME', 'http://students.lsu.edu/academicsuccess/studying/subjects/mechanical-engineering');
define('PETE', 'http://students.lsu.edu/academicsuccess/studying/subjects/petroleum');
define('PHIL', 'http://students.lsu.edu/academicsuccess/studying/subjects/philosophy');
define('PHYS', 'http://students.lsu.edu/academicsuccess/studying/subjects/physics');
define('PSYC', 'http://students.lsu.edu/academicsuccess/studying/subjects/psychology');
define('SOCL', 'http://students.lsu.edu/academicsuccess/studying/subjects/sociology');
define('EXST', 'http://students.lsu.edu/academicsuccess/studying/subjects/statistics');
