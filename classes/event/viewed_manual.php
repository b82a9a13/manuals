<?php
/**
 * @package   local_manuals
 * @author      Robert Tyrone Cullen
 */
namespace local_manuals\event;

use core\event\base;

defined('MOODLE_INTERNAL') || die();

class viewed_manual extends base {
    protected function init(){
        $this->data['crud'] = 'r';
        $this->data['edulevel'] = self::LEVEL_OTHER;
    }
    public static function get_name(){
        return 'Manual viewed';
    }
    public function get_description(){
        return "The user with id '".$this->userid."' viewed the manual.";
    }
    public function get_url(){
        return new \moodle_url('/local/manuals/manual.php');
    }
    public function get_id(){
        return $this->objectid;
    }
}