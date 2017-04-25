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
 * This file defines language strings for the Filtered course list block.
 *
 * @package    block_filtered_course_list
 * @copyright  2016 CLAMP
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['filtered_course_list:addinstance'] = 'Add a new Filtered course list block';
$string['filtered_course_list:myaddinstance'] = 'Add a new Filtered course list block to My home';
$string['managerview']              = 'Manager view';
$string['allcourses']               = 'A manager sees all courses';
$string['blockname']                = 'Filtered course list';
<<<<<<< HEAD
$string['categories']               = 'Current category';
$string['categorysettings']         = 'Category settings';
$string['categorysettingsinfo']     = 'These settings apply only when using the category filter type.';
$string['collapsible']              = 'Collapsible sections';
$string['configadminview']          = 'What should the admin see in the course list block? Note that admins who are not enrolled in any courses will still see the generic list.';
$string['configcollapsible']        = 'Should the course groupings be collapsible?';
$string['configcategories']         = 'Select the category you want to display as current.';
$string['configcurrentshortname']   = 'Enter the string that designates the current term. <br>This must be part of the course shortname.';
$string['configcustomlabel']        = 'Enter a custom section title under which to organize courses. <br />[No HTML.]';
$string['configcustomshortname']    = 'Enter a shortname string match for the corresponding custom label.';
$string['configexpanded']           = 'Check to expand this rubric by default when using collapsible rubrics.';
$string['configfiltertype']         = 'Select the type of course filter you would like to use.';
$string['configsorttype']			= 'Select the field to sort your course lists on.';
$string['configsortdirection']		= 'Select whether the sort type should be sorted Ascendingly or Descendingly.';
$string['configfutureshortname']    = 'Enter the string that designates the next term. <br>This must be part of the course shortname.';
$string['confighideallcourseslink'] = 'Hide "All courses" link at the bottom of the block. <br>Link hiding does not affect Admin\'s view';
=======
$string['completedcourses']         = 'Completed courses';
$string['configmanagerview']        = 'What should a manager see in the course list block? Note that managers who are not enrolled in any courses will still see the generic list.';
$string['configfilters']            = <<<EOF
Notes:
<ul>
<li>Only lines that begin with a filter type (category, shortname, regex or completion) will be processed. Other lines can contain comments, inactive examples, anything that is useful to you.</li>
<li>You can use abbreviations for "expanded" and "collapsed". Even "e" and "c" will work.</li>
<li>Whitespace around values will automatically be trimmed.</li>
<ul>
<li>category | exp/col | category id | depth</li>
<li>shortname | exp/col | Display title | match</li>
<li>regex | exp/col | Display title | regex match</li>
<li>completion | exp/col | Display title | (in)complete</li>
</ul>
</ul>
<br />Additional details available at <a href='https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list#user-content-configuration' target='_blank' title='Additional documentation'>https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list#user-content-configuration</a>
EOF;
$string['confighideallcourseslink'] = 'Hide "All courses" link at the bottom of the block. <br>Link hiding does not affect a manager\'s view';
>>>>>>> upstream/master
$string['confighidefromguests']     = 'Hide the block from guests and anonymous visitors.';
$string['confighideothercourses']   = 'Hide "Other courses" in the block.';
$string['configmaxallcourse']       = 'On a site with only one category, managers and guests will see all courses, <br />but above this number they will see a category link instead. <br />[Choose an integer between 0 and 999.]';
$string['configprimarysort']        = 'Within a rubric courses will be sorted by this field. Choose "Sort order" to display courses in the same order as seen in the course management interface.';
$string['configsecondarysort']      = 'Within a rubric courses will secondarily be sorted by this field.';
$string['configtitle']              = 'Block title';
<<<<<<< HEAD
$string['configuseregex']           = 'Check this box if you want to use regex for shortname matches. Note that backticks (`) will be stripped from regex searches and that regex matching is case sensitive, unlike non-regex matching. For details about regex syntax please see <a href="http://php.net/manual/en/reference.pcre.pattern.syntax.php" target="_blank">http://php.net/manual/en/reference.pcre.pattern.syntax.php</a>';
$string['currentcourses']           = 'Current courses';
$string['currentshortname']         = 'Current shortname';
$string['customlabel']              = 'Custom label';
$string['customshortname']          = 'Custom shortname';
$string['expanded']                 = 'Expand by default';
$string['filtercategories']         = 'Category';
$string['filtercustom']             = 'Custom';
$string['filtershortname']          = 'Shortname';
$string['filtertype']               = 'Filter type';
$string['sortshortname']			= 'Shortname';
$string['sortfullname']				= 'Fullname';
$string['sortidnumber']				= 'IDNumber';
$string['sortid']					= 'ID';
$string['sortorder']				= 'SortOrder';
$string['sorttype']					= 'Sort type';
$string['sortdirection']			= 'Sort direction';
$string['sortasc']					= 'Ascending';
$string['sortdesc']					= 'Descending';
$string['futurecourses']            = 'Future courses';
$string['futureshortname']          = 'Future shortname';
$string['generalsettings']          = 'General settings';
=======
$string['courses']                  = 'Courses';
$string['defaultfilters']           = <<<EOF
category | collapsed | 0 (top level) | 0 (all descendants)

EXAMPLE: category | exp | 1 (cat id) | 2 (generations)
EXAMPLE: shortname | exp | Current courses | S17
EXAMPLE: regex | col | Upcoming... | (Su|F)17$
EXAMPLE: completion | exp | (In)complete | (in)complete

EOF;
$string['filters']                  = 'Filter configuration';
$string['filters_help']             = $string['configfilters'];
>>>>>>> upstream/master
$string['hideallcourseslink']       = 'Hide "All courses" link';
$string['hideothercourses']         = 'Hide other courses';
$string['hidefromguests']           = 'Hide from guests';
$string['maxallcourse']             = 'Max for single category';
$string['othercourses']             = 'Other courses';
$string['owncourses']               = 'A manager sees own courses';
$string['pluginname']               = 'Filtered course list';
$string['primarysort']              = 'Primary sort';
$string['primaryvector']            = 'Primary sort vector';
$string['secondarysort']            = 'Secondary sort';
$string['secondaryvector']          = 'Secondary sort vector';
$string['top']                      = 'Top';
<<<<<<< HEAD
$string['useregex']                 = 'Use regex';
$string['updated']                  = 'This course has been updated since your last visit';
$string['neverseen']                = 'You have never viewed this course';
$string['showstatus']               = 'Show course view status';
$string['configshowstatus']         = 'This will show a star or asterisk to show that a user has not view the course since last update or never, respectively.';
$string['key']                      = 'Key';
=======
>>>>>>> upstream/master
