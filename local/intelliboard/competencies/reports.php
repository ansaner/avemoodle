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
 * This plugin provides access to Moodle data in form of analytics and reports in real time.
 *
 *
 * @package    local_intelliboard
 * @copyright  2017 IntelliBoard, Inc
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @website    https://intelliboard.net/
 */

require('../../../config.php');
require_once($CFG->dirroot .'/local/intelliboard/locallib.php');
require_once($CFG->dirroot .'/local/intelliboard/externallib.php');
require_once($CFG->dirroot .'/local/intelliboard/competencies/lib.php');

$id = required_param('id', PARAM_INT);
$trigger = optional_param('trigger', 1, PARAM_INT);
$page = optional_param('page', 0, PARAM_INT);
$length = optional_param('length', 20, PARAM_INT);
$filter = clean_raw(optional_param('filter', '', PARAM_RAW));
$daterange = optional_param('daterange', 0, PARAM_INT);
$download = optional_param('download', '', PARAM_ALPHA);
$format = optional_param('format', 'html', PARAM_ALPHA);
$custom = optional_param('custom', 0, PARAM_INT);
$custom2 = optional_param('custom2', 0, PARAM_INT);
$custom3 = optional_param('custom3', 0, PARAM_INT);
$users = optional_param('users', 0, PARAM_INT);
$userid = optional_param('userid', 0, PARAM_INT);
$courseid = optional_param('courseid', 0, PARAM_INT);
$cohortid = optional_param('cohortid', 0, PARAM_INT);

require_login();
intelliboard_competency_access();

if(!get_config('local_intelliboard', 'competency_reports')){
	throw new moodle_exception('invalidaccess', 'error');
}


if($download){
	$length = 100000; //Max. records to export
}

$mode_filter = true;
if($trigger){
	$params = array(
		'id' => $id,
		'reports' => get_config('local_intelliboard', 'reports'),
		'type' => 'reports',
		'do' => 'reportform',
		'mode' => 3
	);
	$intelliboard = intelliboard($params);

	if(!empty($intelliboard->content)){
		$mode_filter = false;
	}
}

if($mode_filter){
	switch ($daterange) {
		case 1: $timestart = strtotime('-1 day'); $timefinish = time(); break;
		case 2: $timestart = strtotime('yesterday'); $timefinish = strtotime('today'); break;
		case 3: $timestart = strtotime('-7 days'); $timefinish = time(); break;
		case 4: $timestart = strtotime('-30 days'); $timefinish = time(); break;
		case 5: $timestart = strtotime('-90 days'); $timefinish = time(); break;
		default: $timestart = 0; $timefinish = time();
	}
	$page = ($page)?$page:1;
	$params = (object) array(
		'filter_user_deleted'=>get_config('local_intelliboard', 'filter1'),
		'filter_user_suspended'=>get_config('local_intelliboard', 'filter2'),
		'filter_user_guest'=>get_config('local_intelliboard', 'filter3'),
		'filter_course_visible'=>get_config('local_intelliboard', 'filter4'),
		'filter_enrolmethod_status'=>get_config('local_intelliboard', 'filter5'),
		'filter_enrol_status'=>get_config('local_intelliboard', 'filter6'),
		'filter_module_visible'=>get_config('local_intelliboard', 'filter7'),
		'filter_columns'=>get_config('local_intelliboard', 'filter9'),
		'teacher_roles'=>get_config('local_intelliboard', 'filter10'),
		'learner_roles'=>get_config('local_intelliboard', 'filter11'),
		'filter_profile'=>0,
		'sizemode'=>get_config('local_intelliboard', 'sizemode'),
		'users'=> $users,
		'custom'=> $custom,
		'custom2'=> $custom2,
		'custom3'=> $custom3,
		'length'=>$length,
		'start'=>(($page-1) * $length),
		'userid'=>$USER->id,
		'courseid'=>$courseid,
		'cohortid'=>$cohortid,
		'filter'=>s($filter),
		'timestart'=> $timestart,
		'timefinish'=>$timefinish
	);

	$function = "report$id";
	$plugin = new local_intelliboard_external();
	$data = json_encode($plugin->{$function}($params));

	$params = array(
		'download' => 1,
		'output' => ($download)?1:0,
		'reports'=>get_config('local_intelliboard', 'reports'),
		'filter'=>$filter,
		'daterange'=>$daterange,
		'data'=>$data,
		'users'=> $USER->id,
		'id'=> $id,
		'length'=>$length,
		'page'=>$page,
		'type'=>'reports',
		'do'=>'reports',
		'mode'=> 3
	);
	$intelliboard = intelliboard($params);
	if($download and isset($intelliboard->json) and isset($intelliboard->itemname)){
    	intelliboard_export_report($intelliboard->json, $intelliboard->itemname, $format);
	}
}else{
	$data = '';
}

$PAGE->set_url(new moodle_url("/local/intelliboard/instructor/reports.php"));
$PAGE->set_pagetype('reports');
$PAGE->set_pagelayout('report');
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('intelliboardroot', 'local_intelliboard'));
$PAGE->set_heading(get_string('intelliboardroot', 'local_intelliboard'));
$PAGE->requires->jquery();
$PAGE->requires->js('/local/intelliboard/assets/js/jquery.circlechart.js');
$PAGE->requires->css('/local/intelliboard/assets/css/style.css');
echo $OUTPUT->header();
?>

<?php if(!isset($intelliboard) || !$intelliboard->token): ?>
	<div class="alert alert-error alert-block fade in " role="alert"><?php echo get_string('intelliboardaccess', 'local_intelliboard'); ?></div>
<?php else: ?>
<div class="intelliboard-page intelliboard-student">
	<?php include("views/menu.php"); ?>
	<div class="intelliboard-content"><?php echo intelliboard_clean($intelliboard->content); ?></div>
	<?php include("../views/footer.php"); ?>
</div>
<?php endif; ?>
<?php
echo $OUTPUT->footer();
