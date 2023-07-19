<?php
/**
 * @package     local_manuals
 * @author      Robert Tyrone Cullen
 * @var stdClass $plugin
 */
namespace local_manuals;

class lib{
    //Get highest level role
    public function role(){
        global $USER;
        $user = $USER->id;
        global $DB;
        $assignments = $DB->get_records_sql('SELECT * FROM {role_assignments} where userid = ?', [$user]);
        //admin, coach, learner
        $role = [false, false, false];
        foreach($assignments as $assignment){
            if($assignment->roleid == 1){
                $role[0] = true;
            } elseif($assignment->roleid == 4 || $assignment->roleid == 3){
                $role[1] = true;
            } else if($assignment->roleid == 5){
                $role[2] = true;
            }
        }
        if($role[0] === true){
            return 'admin';
        } elseif($role[1] === true){
            return 'coach';
        } elseif($role[2] === true){
            return 'learner';
        }
    }

    //Get a course they are enrolled in
    public function courseEnrolled($type){
        global $USER;
        $user = $USER->id;
        global $DB;
        $roleid = [];
        if($type === 'coach'){
            $roleid = [3, 4];
        } elseif($type === 'learner'){
            $roleid = [5];
        }
        $userEnrolments = $DB->get_records_sql('SELECT enrolid, status FROM {user_enrolments} WHERE userid = ? AND status = ?', [$user, 0]);
        $enrolTable = $DB->get_records('enrol');
        $courseids = [];
        foreach($userEnrolments as $userEnrol){
            foreach($enrolTable as $enrolTab){
                if($enrolTab->id == $userEnrol->enrolid && $userEnrol->status !== 1){
                    array_push($courseids, [$enrolTab->courseid]);
                }
            }
        }
        $temp = [];
        $contexts = $DB->get_records('context');
        $roleAssignments = $DB->get_records_sql('SELECT * FROM {role_assignments} WHERE userid = ?',[$user]);
        foreach($contexts as $context){
            foreach($roleAssignments as $roleAssign){
                if($roleAssign->contextid == $context->id && $roleAssign->roleid == $roleid[0]){
                    array_push($temp ,[$context->instanceid]);
                } else if ($roleAssign->contextid == $context->id && $roleAssign->roleid == $roleid[1] && count($roleid) == 2){
                    array_push($temp, [$context->instanceid]);
                }
            }
        }
        $temp2 = [];
        foreach($temp as $tem){
            foreach($courseids as $courseid){
                if($courseid[0] == $tem[0]){
                    array_push($temp2, $courseid);
                }
            }
        }
        return $temp2[0][0];
    }
}