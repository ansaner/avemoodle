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
 * Contains the definition of the form used to send messages
 *
 * @package    core_message
 * @copyright  2009 Sam Hemelryk
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
if (!defined('MOODLE_INTERNAL')) {
    die('Direct access to this script is forbidden.');    ///  It must be included from a Moodle page
}

require_once($CFG->dirroot.'/lib/formslib.php');
// load repository lib, will load filelib and formslib
require_once($CFG->dirroot . '/repository/lib.php');

/**
 * The form used by users to send instant messages
 *
 * @package   core_message
 * @copyright 2009 Sam Hemelryk
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class send_form extends moodleform {

    /**
     * Define the mform elements required
     */
    function definition () {

        $mform =& $this->_form;

        $editoroptions = array();

        //width handled by css so cols is empty. Still present so the page validates.
        $displayoptions = array('rows'=>'4', 'cols'=>'', 'class'=>'messagesendbox');

        $mform->addElement('hidden', 'id');
        $mform->setType('id', PARAM_INT);
        $mform->addElement('hidden', 'viewing');
        $mform->setType('viewing', PARAM_ALPHANUMEXT);

        $mform->addElement('textarea', 'message', get_string('message', 'message'), $displayoptions, $editoroptions);
		
		/**CÓDIGO AÑADIDO Y MODIFICADO
		* AUTOR: Daniel Cabeza
		* Inserta el File manager
		*/
		$mform->addElement('filemanager', 'attachments[itemid]', get_string('areaattachment', 'forum'), null, self::attachment_options());
		/*FIN DE LA MODIFICACIÓN*/
		
        $this->add_action_buttons(false, get_string('sendmessage', 'message'));
    }
	
	/**CÓDIGO AÑADIDO Y MODIFICADO
	* AUTOR: Daniel Cabeza
	* Returns the options array to use in filemanager for dialogue attachments
	*/
    public static function attachment_options($draftitemid = null) {
        global $CFG, $COURSE, $PAGE; 
		$coursecontext = context_course::instance($COURSE->id);
		$maxfiles = 2;
		if(has_capability('moodle/grade:viewhidden',$coursecontext)){
			$maxfiles = 5;
		}
		
        $maxbytes = get_user_max_upload_file_size($PAGE->context, $CFG->maxbytes, $COURSE->maxbytes, 2048000);
		$result = array(
            'subdirs' => 0,
            'maxbytes' => $maxbytes,
            'maxfiles' => $maxfiles,
            'accepted_types' => '*',
            'return_types' => FILE_INTERNAL
        );
		if (!empty($draftitemid)) {
			$result['itemid'] = $draftitemid;
		}
        return $result;
    }
	/*FIN DE LA ADICIÓN*/
}

?>
