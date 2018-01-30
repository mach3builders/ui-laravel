<?php

namespace Mach3Builders\UI\Notify;

class Notify
{
    /**
     * Set the notification message
     * 
     * @param  string $message
     * @param  string $type
     * @return Notify
     */
    public function message($message, $type = 'info')
    {
        session()->flash('notify.message', $message);
        return $this->type($type);
    }

    /**
     * Set the type of notification
     * 
     * @param string $type
     * @return Notify
     */
    public function type($type)
    {
        session()->flash('notify.type', $type);
        return $this;
    }
}