<?php

defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir.'/authlib.php');

class auth_plugin_avefor extends auth_plugin_base {
	/**
     * Constructor.
     */
    public function __construct() {
        $this->authtype = 'avefor';
    }
    
	function user_login($username, $password) {
		return false;
	}

	function logoutpage_hook() {
		global $redirect;

		$redirect = 'https://www.avefor.com';
	}
}