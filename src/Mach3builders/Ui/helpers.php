<?php
/**
 * Adds an alert
 *
 * @param  string $message
 * @param  string $type
 * @return string
 */
if (!function_exists('alert')) {
    function alert($message, $type = 'info') {
        $alert = app('alert');
        return $alert->message($message, $type);
    }
}

/**
 * Adds a notification
 *
 * @param  string $message
 * @param  string $type
 * @return string
 */
if (!function_exists('notify')) {
    function notify($message, $type = 'info') {
        $notify = app('notify');
        return $notify->message($message, $type);
    }
}
