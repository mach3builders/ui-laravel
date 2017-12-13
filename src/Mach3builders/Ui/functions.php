<?php

if (!function_exists('alert')) {
    /**
     * Adds an alert
     * 
     * @param  string $message
     * @param  array $options
     * @return void
     */
    function alert($message, $type='info') {
        $alert = app('alert');
        return $alert->message($message, $type);
    }
}

if (!function_exists('notify')) {
    /**
     * Adds an notification
     * 
     * @param  string $message
     * @param  array $options
     * @return void
     */
    function notify($message, $type='info') {
        $notify = app('notify');
        return $notify->message($message, $type);
    }
}