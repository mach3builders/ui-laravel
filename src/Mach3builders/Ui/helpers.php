<?php

/**
 * Create an alert message
 *
 * @param  string $message
 * @param  string $type
 * @return string
 */
if (! function_exists('alert')) {
    function alert($message, $type = 'info') {
        $alert = app('alert');
        return $alert->message($message, $type);
    }
}

/**
 * Create an notification message
 *
 * @param  string $message
 * @param  string $type
 * @return string
 */
if (! function_exists('notify')) {
    function notify($message, $type = 'info') {
        $notify = app('notify');
        return $notify->message($message, $type);
    }
}
