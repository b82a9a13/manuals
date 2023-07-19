<?php
/**
 * @package   local_manuals
 * @author      Robert Tyrone Cullen
 */

require_once(__DIR__.'/../../config.php');

use local_manuals\lib;

require_login();
$lib = new lib();

//Get their highest level capability and the file to include
$role = $lib->role();
$context = context_system::instance();
if($role === 'admin' || has_capability('local/manuals:admin', $context)){
    $include = "./classes/inc/admin.php";
    $title = get_string('admin_manual', 'local_manuals');
    $context = context_system::instance();
    require_capability('local/manuals:admin', $context);
} elseif($role === 'coach'){
    $include = "./classes/inc/coach.php";
    $title = get_string('coach_manual', 'local_manuals');
    $courseid = $lib->courseEnrolled($role);
    $context = context_course::instance($courseid);
    require_capability('local/manuals:coach', $context);
} elseif($role === 'learner'){
    $include = "./classes/inc/learner.php";
    $title = get_string('learner_manual', 'local_manuals');
    $courseid = $lib->courseEnrolled($role);
    $context = context_course::instance($courseid);
    require_capability('local/manuals:learner', $context);
}

//Setting context
$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/local/manuals/manual.php'));

//Setting page title and heading
$PAGE->set_title($title);
$PAGE->set_heading($title);

//Outputting to the page
echo $OUTPUT->header();
include_once($include);
echo $OUTPUT->footer();

//Used to add a log by triggering the view_manual event
\local_manuals\event\viewed_manual::create(array('contextid' => 1, 'contextlevel' => 10))->trigger();