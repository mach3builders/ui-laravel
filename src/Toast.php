<?php

namespace Mach3Builders\UI;

use Illuminate\Contracts\Session\Session;

class Toast
{
    /**
     * Create a new toast instance
     *
     * @param Illuminate\Contracts\Session\Session $session
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    /**
     * Set the toast message
     * 
     * @param  string $message
     * @param  string $type
     * @param  string $title
     * @return \Mach3Builders\UI\Toast
     */
    public function message($message, $type = 'success', $title = null)
    {
        $this->session->flash('toast.message', $message);
        
        $this->type($type);
        $this->title($title);

        return $this;
    }

    /**
     * Set the type of toast
     *
     * @param string $type
     * @return \Mach3Builders\UI\Toast
     */
    public function type($type)
    {
        $this->session->flash('toast.type', $type);

        return $this;
    }

    /**
     * Set the title of the toast
     *
     * @param  boolean $dismissible
     * @return \Mach3Builders\UI\Toast
     */
    public function title($title)
    {
        $this->session->flash('toast.title', $title);

        return $this;
    }
}