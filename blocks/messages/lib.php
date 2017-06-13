<?php
/**
 * Library functions for messaging
 *
 * @package   block_message
 * @copyright 2017 Daniel Cabeza
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
/**
 * Serves the messages attachments. Implements needed access control ;-)
 *
 * @param object $course
 * @param object $birecord
 * @param object $context
 * @param string $filearea
 * @param array $args
 * @param array $options
 * @param bool $forcedownload
 * @return bool false if file not found, does not return if found - justsend the file
 */
function block_messages_pluginfile($course, $birecord, $context, $filearea, $args, $forcedownload = true, $options = array()) {
    global $CFG, $DB, $USER;

    $fs = get_file_storage();
    $relativepath = implode('/', $args);
    $fullpath = "/$context->id/block_messages/$filearea/$relativepath";
    if (!$file = $fs->get_file_by_hash(sha1($fullpath)) or $file->is_directory()) {
       return false;
    }

    // Force non image formats to be downloaded
    if (!$file->is_valid_image()) {
        $forcedownload = true;
    }

    // Send the file
    send_stored_file($file, 0, 0, $forcedownload, $options);
} 
