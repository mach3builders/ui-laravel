<?php

namespace Mach3Builders\UI;

use Illuminate\Contracts\Session\Session;

class Notify
{
    /**
     * Create a new notify instance
     *
     * @param Illuminate\Contracts\Session\Session $session
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    /**
     * Set the notification message
     * 
     * @param  string $message
     * @param  string $type
     * @return Notify
     */
    public function message($message, $type = 'info')
    {
        $this->session->flash('notify.message', $message);

        $this->type($type);

        return $this;
    }

    /**
     * Set the type of notification
     * 
     * @param string $type
     * @return Notify
     */
    public function type($type)
    {
        $this->session->flash('notify.type', $type);

        return $this;
    }
}