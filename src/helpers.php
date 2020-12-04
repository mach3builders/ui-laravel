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

/**
 * Create a toast message
 *
 * @param  string $message
 * @param  string $type
 * @param  string $title
 * @return string
 */
if (! function_exists('toast')) {
    function toast($message, $type = 'success', $title = null) {
        $toast = app('toast');
        return $toast->message($message, $type)->title($title);
    }
}